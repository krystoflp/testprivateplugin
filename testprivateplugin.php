<?php
/*
Plugin Name: testprivateplugin
Plugin URI: https://ChurchWeb.uk
Description: Tester for auto updater from private githib repository
Version: 0.0.14
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

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('5a74cc0ed4a4c82b216f945577c3c78e4ef73952');

//Optional: Enable github release functionality
$myUpdateChecker->getVcsApi()->enableReleaseAssets();

