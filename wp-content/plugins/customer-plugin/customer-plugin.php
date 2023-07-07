<?php
/*
Plugin Name: Customer Plugin
Description: Membuat Plugin Sendiri.
Version: 1.0
Author: OhMyGhan
*/

// Plugin code goes here

register_activation_hook(__FILE__, 'customer_plugin_activated');

function customer_plugin_activated() {
    global $wpdb;
    $table_name = $wpdb->prefix. 'customer';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once( ABSPATH. 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

function customer_plugin_menu() {
    add_menu_page(
        'Customer Data',
        'Customer Data',
        'manage_options',
        'customer_plugin',
        'customer_plugin_page',
        'dashicons-id'
    );

    add_submenu_page(
        'customer_plugin',
        'Add Customer',
        'Add Customer',
        'manage_options',
        'customer_add',
        'customer_add_page'
    );
}

function customer_plugin_page() {
    global $wpdb;

    if (isset($_GET['action']) && $_GET['action'] === 'edit') {
        $customer_id = isset($_GET['id']) ? absint($_GET['id']) : 0;
        $table_name = $wpdb->prefix . 'customer';

        $customer = $wpdb->get_row($wpdb->prepare("SELECT id, name, address FROM $table_name WHERE id = %d", $customer_id));

        if ($customer) {
            ?>
            <div class="wrap">
                <h1>Edit Customer</h1>
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php?action=customer_update')); ?>">
                    <input type="hidden" name="customer_id" value="<?php echo $customer->id; ?>">
                    <?php wp_nonce_field('customer_update_nonce', 'customer_update_nonce'); ?>

                    <label for="customer_name">Name:</label>
                    <input type="text" name="customer_name" id="customer_name" value="<?php echo esc_attr($customer->name); ?>" required><br>
                    <label for="customer_address">Address:</label>
                    <input type="text" name="customer_address" id="customer_address" value="<?php echo esc_attr($customer->address); ?>" required><br>

                    <input type="submit" value="Update Customer" class="button button-primary">
                </form>
            </div>
            <?php
        }
    } else {
        $customers = $wpdb->get_results("SELECT id, name, address FROM {$wpdb->prefix}customer");

        echo '<div class="wrap">';
        echo '<h1>Customer Data</h1>';
        echo '<table class="widefat">';
        echo '<thead><tr><th>ID</th><th>Name</th><th>Address</th><th>Actions</th></tr></thead>';
        echo '<tbody>';
        foreach ($customers as $customer) {
            echo '<tr>';
            echo '<td>' . $customer->id . '</td>';
            echo '<td>' . $customer->name . '</td>';
            echo '<td>' . $customer->address . '</td>';
            echo '<td>';
            echo '<a href="' . admin_url('admin.php?page=customer_plugin&action=edit&id=' .

 $customer->id) . '">Edit</a>';
            echo '<a href="' . admin_url('admin-post.php?action=customer_delete&id=' . $customer->id) . '">Delete</a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }
}

function customer_add_page() {
    ?>
    <div class="wrap">
        <h1>Add Customer</h1>
        <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="customer_add">
            <?php wp_nonce_field('customer_add_nonce', 'customer_add_nonce'); ?>

            <label for="customer_name">Name:</label>
            <input type="text" name="customer_name" id="customer_name" required><br>
            <label for="customer_address">Address:</label>
            <input type="text" name="customer_address" id="customer_address" required><br>

            <input type="submit" value="Add Customer" class="button button-primary">
        </form>
    </div>
    <?php
}

function customer_add_action() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        global $wpdb;

        $table_name = $wpdb->prefix . 'customer';

        $customer_name = sanitize_text_field($_POST['customer_name']);
        $customer_address = sanitize_text_field($_POST['customer_address']);

        $wpdb->insert(
            $table_name,
            array(
                'name' => $customer_name,
                'address' => $customer_address
            ),
            array(
                '%s',
                '%s'
            )
        );

        wp_safe_redirect(admin_url('admin.php?page=customer_plugin'));
        exit();
    }
}

function customer_delete_action() {
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'customer_delete' && isset($_GET['id'])) {
        global $wpdb;

        $table_name = $wpdb->prefix . 'customer';
        $customer_id = absint($_GET['id']);

        $wpdb->delete(
            $table_name,
            array('id' => $customer_id),
            array('%d')
        );

        wp_safe_redirect(admin_url('admin.php?page=customer_plugin'));
        exit();
    }
}

function customer_update_action() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'customer_update' && isset($_POST['customer_id'])) {
        global $wpdb;

        $table_name = $wpdb->prefix . 'customer';
        $customer_id = absint($_POST['customer_id']);

        if (isset($_POST['customer_update_nonce']) && wp_verify_nonce($_POST['customer_update_nonce'], 'customer_update_nonce')) {
            $customer_name = sanitize_text_field($_POST['customer_name']);
            $customer_address = sanitize_text_field($_POST['customer_address']);

            $wpdb->update(
                $table_name,
                array(
                    'name' => $customer_name,
                    'address' => $customer_address
                ),
                array('id' => $customer_id),
                array(
                    '%s',
                    '%s'
                ),
                array('%d')
            );

            wp_safe_redirect(admin_url('admin.php?page=customer_plugin'));
            exit();
        }
    }
}

add_action('admin_init', 'customer_delete_action');
add_action('admin_menu', 'customer_plugin_menu');
add_action('admin_post_customer_add', 'customer_add_action');
add_action('admin_post_customer_update', 'customer_update_action');