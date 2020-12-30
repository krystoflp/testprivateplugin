<?php
/*
Plugin Name: testprivateplugin
Plugin URI: https://ChurchWeb.uk
Description: Tester for auto updater from private githib repository
Version: 0.0.15
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
$myUpdateChecker->setAuthentication('-----BEGIN OPENSSH PRIVATE KEY-----b3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZWQyNTUxOQAAACDdq1Whv2DFrxUrhwL/SOOsK5wTijzzJQQJUBm8nS7ssQAAAJi715T1u9eU9QAAAAtzc2gtZWQyNTUxOQAAACDdq1Whv2DFrxUrhwL/SOOsK5wTijzzJQQJUBm8nS7ssQAAAEDADdhylb976WDLLfZunqHFaBvAomikMNZ9iTrFfJjqGN2rVaG/YMWvFSuHAv9I46wrnBOKPPMlBAlQGbydLuyxAAAAFHN1cHBvcnRAY2h1cmNod2ViLnVrAQ==-----END OPENSSH PRIVATE KEY-----');

//Optional: Enable github release functionality
$myUpdateChecker->getVcsApi()->enableReleaseAssets();

