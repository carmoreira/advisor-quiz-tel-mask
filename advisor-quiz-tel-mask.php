<?php
/*
Plugin Name: Advisor Quiz - Tel Mask
Plugin URI: http://www.cmoreira.net/logos-showcase
Description: This plugin will add a telephone mask to an input field in advisor quiz
Author: Carlos Moreira
Version: 1
Author URI: https://cmoreira.net
Text Domain: advisor-quiz-tel-mask
Domain Path: /lang
*/

add_filter( 'advq_enqueue_scripts', 'advisor_quiz_tel_mask' );

/**
 * Add plugin files to enqueue list of advisor quiz files
 *
 * @param array $scripts array of scripts.
 * @return array $scripts modified array
 */
function advisor_quiz_tel_mask( $scripts ) {

	$scripts['jquery_mask'] = array(
		'path'         => plugins_url( 'includes/jquery.mask.min.js', __FILE__ ),
		'dependencies' => array( 'jquery' ),
	);
	$scripts['custom_mask'] = array(
		'path'         => plugins_url( 'includes/custom.mask.js', __FILE__ ),
		'dependencies' => array( 'jquery_mask' ),
	);

	return $scripts;

}
