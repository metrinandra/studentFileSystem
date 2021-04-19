<?php
    function kd_theme_support () {
        add_theme_support('title-tag');
    }

    add_action('wp_enqueue_scripts', 'kd_theme_support');

    function kd_register_styles () {
        wp_enqueue_style('kd-style', get_template_directory_uri() . "/style.css", array('kd-bootstrap'), '1.0', 'all');
        wp_enqueue_style('kd-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    }

    add_action('wp_enqueue_scripts', 'kd_register_styles');

    function kd_register_scripts () {
        wp_enqueue_style('kd-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
        wp_enqueue_style('kd-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
        wp_enqueue_style('kd-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
        wp_enqueue_style('kd-js', get_template_directory_uri() . "js/main.js", array(), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'kd_register_scripts');
?>