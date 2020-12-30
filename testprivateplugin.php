<?php
/*
Plugin Name: testprivateplugin
Plugin URI: https://ChurchWeb.uk
Description: Tester for auto updater from private githib repository
Version: 0.0.4
Author: ChurchWeb

Author URI: https://ChurchWeb.uk
*/

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) exit;

// Run update code
require 'CWupdater/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/krystoflp/testprivateplugin',
	__FILE__,
	'testprivateplugin'
);


//Optional: Enable github release functionality
$myUpdateChecker->getVcsApi()->enableReleaseAssets();

