<?php
/*
Plugin Name: Employee Management
Description: Plugin for managing employee data
Version: 1.0
Author: OhMyGhan
*/

global $wpdb;
$table_name = $wpdb->prefix . 'employees';

function create_employee_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'employees';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        department VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function employee_management_page() {
    global $wpdb;

    //URl File Css
    echo '<link rel="stylesheet" type="text/css" href="' . plugins_url( 'employee-management/style.css' ) . '">';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit'])) {
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_text_field($_POST['email']);
            $phone = sanitize_text_field($_POST['phone']);
            $department = sanitize_text_field($_POST['department']);

            $table_name = $wpdb->prefix . 'employees';
            $data = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'department' => $department,
            );
            $wpdb->insert($table_name, $data);

            echo '<div class="notice notice-success"><p>Employee data inserted successfully.</p></div>';
        }

        if (isset($_POST['update'])) {
            $id = (int) $_POST['employee_id'];
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_text_field($_POST['email']);
            $phone = sanitize_text_field($_POST['phone']);
            $department = sanitize_text_field($_POST['department']);

            $table_name = $wpdb->prefix . 'employees';
            $data = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'department' => $department,
            );
            $where = array('id' => $id);
            $wpdb->update($table_name, $data, $where);

            echo '<div class="notice notice-success"><p>Employee data updated successfully!</p></div>';
        }
    }

    echo '<div class="wrap">';
    echo '<h1>Employee Data Management</h1>';
    echo '<form method="POST" action="">';

    echo '<label for="name">Name</label><br>';
    echo '<input type="text" id="name" name="name" required><br><br>';

    echo '<label for="email">Email</label><br>';
    echo '<input type="email" id="email" name="email" required><br><br>';

    echo '<label for="phone">Phone</label><br>';
    echo '<input type="text" id="phone" name="phone" required><br><br>';

    echo '<label for="department">Department</label><br>';
    echo '<input type="text" id="department" name="department" required><br><br>';

    echo '<input type="submit" name="submit" value="Add Employee">';
    echo '</form>';
    echo '</div>';

    $table_name = $wpdb->prefix . 'employees';
    $employees = $wpdb->get_results("SELECT * FROM $table_name");

    echo '<div class="wrap">';
    echo '<h1>Employee Management</h1>';

    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Phone</th>';
    echo '<th>Department</th>';
    echo '<th>Action</th>';
    echo '</tr>';

    foreach ($employees as $employee) {
        echo '<tr>';
        echo '<td>' . $employee->id . '</td>';
        echo '<td>' . $employee->name . '</td>';
        echo '<td>' . $employee->email . '</td>';
        echo '<td>' . $employee->phone . '</td>';
        echo '<td>' . $employee->department . '</td>';
        echo '<td>';
        echo '<form method="POST" action="">';
        echo '<input type="hidden" name="employee_id" value="' . $employee->id . '">';
        echo '<input type="submit" name="edit" value="Edit">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit']) && $_POST['employee_id'] == $employee->id) {
            echo '<tr>';
            echo '<td colspan="6">';
            echo '<form method="POST" action="">';
            echo '<input type="hidden" name="employee_id" value="' . $employee->id . '">';

            echo '<label for="name">Name</label><br>';
            echo '<input type="text" id="name" name="name" value="' . $employee->name . '" required><br><br>';

            echo '<label for="email">Email</label><br>';
            echo '<input type="email" id="email" name="email" value="' . $employee->email . '" required><br><br>';

            echo '<label for="phone">Phone</label><br>';
            echo '<input type="text" id="phone" name="phone" value="' . $employee->phone . '" required><br><br>';

            echo '<label for="department">Department</label><br>';
            echo '<input type="text" id="department" name="department" value="' . $employee->department . '" required><br><br>';

            echo '<input type="submit" name="update" value="Update">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
    }

    echo '</table>';
    echo '</div>';
}

function drop_employee_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'employees';
    $wpdb->query("DROP TABLE IF EXISTS $table_name");
}

function add_employee_menu() {
    add_menu_page(
        'Employee Management',
        'Employee Management',
        'manage_options',
        'employee-management',
        'employee_management_page',
        'dashicons-businessman',
        20
    );
}

register_activation_hook(__FILE__, 'create_employee_table');
register_deactivation_hook(__FILE__, 'drop_employee_table');
add_action('admin_menu', 'add_employee_menu');
