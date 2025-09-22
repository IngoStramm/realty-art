<?php

/**
 * Plugin Name: Realty Art
 * Plugin URI: https://agencialaf.com
 * Description: Plugin integrantye do site do Realty Art.
 * Version: 1.0.1
 * Author: Ingo Stramm
 * Text Domain: realty-art
 * License: GPLv2
 */

defined('ABSPATH') or die('No script kiddies please!');

define('RA_DIR', plugin_dir_path(__FILE__));
define('RA_URL', plugin_dir_url(__FILE__));

function ra_debug($debug)
{
    echo '<pre>';
    var_dump($debug);
    echo '</pre>';
}

function ra_version()
{
    $version = '1.0.1';
    return $version;
}

require_once 'tgm/tgm.php';
require_once 'classes/classes.php';
require_once 'scripts.php';
require_once 'shortcode.php';

require 'plugin-update-checker-4.10/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://raw.githubusercontent.com/IngoStramm/realty-art/master/info.json',
    __FILE__,
    'realty-art'
);
