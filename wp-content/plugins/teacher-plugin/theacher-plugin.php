<?php
/*
Plugin Name: Teacher Plugin
Description: Membuat Plugin Teacher
Version: 1.0
Author: OhMyGhan
*/

register_activation_hook(__FILE__, 'teacher_plugin_activate');
register_deactivation_hook(__FILE__, 'teacher_plugin_deactivate');


function teacher_plugin_activate() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'teacher';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}


function teacher_plugin_deactivate() {
    // Tambahkan kode yang diperlukan saat plugin dinonaktifkan (jika ada)
}

require_once(plugin_dir_path(__FILE__) . 'teacher.php');


add_action('admin_menu', 'teacher_plugin_add_menu');
function teacher_plugin_add_menu() {
    add_menu_page(
        'Teacher Plugin',
        'Teacher Plugin',
        'manage_options',
        'teacher-plugin',
        'teacher_plugin_menu_callback',
        'dashicons-groups',
        20
    );
}


function teacher_plugin_menu_callback() {
    if (isset($_POST['teacher_submit'])) {
        $name = sanitize_text_field($_POST['teacher_name']);
        $email = sanitize_text_field($_POST['teacher_email']);

        if (!empty($name) && !empty($email)) {
            $teacher = new Teacher($name, $email);
            $teacher->save();
            echo '<div class="notice notice-success"><p>Teacher added successfully.</p></div>';
        } else {
            echo '<div class="notice notice-error"><p>Please enter both name and email.</p></div>';
        }
    }
    ?>

    <div class="wrap">
        <h1>Teacher Plugin</h1>
        <h2>Add New Teacher</h2>
        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="teacher_name">Name</label></th>
                    <td><input type="text" name="teacher_name" id="teacher_name" class="regular-text required"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="teacher_email">Email</label></th>
                    <td><input type="email" name="teacher_email" id="teacher_email" class="regular-text required"></td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="teacher_submit" id="teacher_submit" class="button button-primary" value="Add Teacher">
            </p>
        </form>

        <h2>Teachers</h2>
        <?php
        $teachers = Teacher::getTeachers();

        if (!empty($teachers)) {
            echo '<table class="wp-list-table widefat fixed striped">';
            echo '<thead><tr><th>ID</th><th>Name</th><th>Email</th></tr></thead>';
            echo '<tbody>';
            foreach ($teachers as $teacher) {
                echo '<tr>';
                echo '<td>' . $teacher->getId() . '</td>';
                echo '<td>' . $teacher->getName() . '</td>';
                echo '<td>' . $teacher->getEmail() . '</td>';
                echo '</tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<p>No Teachers found.</p>';
        }
        ?>
    </div>
    <?php
}
