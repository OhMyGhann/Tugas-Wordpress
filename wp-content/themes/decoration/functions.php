<?php 

    function add_css()

{   
    wp_register_style('first', get_template_directory_uri (). '/assets/css/style-starter.css', false, '1.1' , 'all');
    wp_enqueue_style('first');
}

    add_action ('wp_enqueue_scripts', 'add_css');

    function add_script()

    {   
       

        wp_register_script('change', get_template_directory_uri (). '/assets/js/theme-change.js', array('jquery'), '1.1' , true);
        wp_enqueue_script('change');

        wp_register_script('popup', get_template_directory_uri (). '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1' , true);
        wp_enqueue_script('popup');

        wp_register_script('carousel', get_template_directory_uri (). '/assets/js/owl.carousel.js', array('jquery'), '1.1' , true);
        wp_enqueue_script('carousel');

        wp_register_script('bootstrap', get_template_directory_uri (). '/assets/js/bootstrap.min.js', array('jquery'), '1.1' , true);
        wp_enqueue_script('bootstrap');
    }
 
    function add_custom_menu_classes($classes, $item, $args) {
        $classes[] = 'nav-item';

        if(in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_custom_menu_classes', 10, 3);
    
        add_action ('wp_enqueue_scripts', 'add_css');
        add_action ('wp_enqueue_scripts', 'add_script');

        add_theme_support ('menus');