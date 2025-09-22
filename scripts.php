<?php

add_action('wp_enqueue_scripts', 'ra_frontend_scripts');

function ra_frontend_scripts()
{

    $min = (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', '10.0.0.3'))) ? '' : '.min';
    $version = ra_version();

    if (empty($min)) :
        wp_enqueue_script('realty-art-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true);
    endif;

    wp_enqueue_script_module('js-circle-progress', RA_URL . '/assets/js/circle-progress.min.js', array('jquery'), $version);

    wp_register_script('realty-art-script', RA_URL . 'assets/js/realty-art' . $min . '.js', array('jquery', 'js-circle-progress'), $version, true);

    wp_enqueue_script('realty-art-script');

    wp_localize_script('realty-art-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
    wp_enqueue_style('realty-art-style', RA_URL . 'assets/css/realty-art.css', array(), false, 'all');
}
