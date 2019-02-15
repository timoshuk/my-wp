<?php

/*
 *Підключення скриптів та стилів 
 * 
 */
    function my_wp_scripts(){
        wp_enqueue_style('my-wp-bootstrap', get_template_directory_uri() . 'essets/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('my-wp-style', get_stylesheet_uri());
        wp_enqueue_script('my-wp-jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
        wp_enqueue_script('my-wp-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
        wp_enqueue_script('my-wp-bootstrapjs', get_template_directory_uri() . 'essets/bootstrap/js/bootstrap.min.js');
    }
?>