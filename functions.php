<?php

function register_custom_bricks_elements() {
    if (class_exists('\\Bricks\\Elements')) {
        // Use get_stylesheet_directory for child theme
        $element_file = get_stylesheet_directory() . '/elements/class-element-subscription-plans.php';
        
        if (file_exists($element_file)) {
            \Bricks\Elements::register_element($element_file);
        }
    }
}
add_action('init', 'register_custom_bricks_elements', 11);
