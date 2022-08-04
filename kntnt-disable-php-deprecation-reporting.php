<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable PHP Deprecation Reporting
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Alters PHP's error reporting to prevent deprecation messages.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


error_reporting( error_reporting() & ~E_DEPRECATED );
