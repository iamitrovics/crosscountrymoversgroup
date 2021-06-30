<?php
/**
 * Custom image sizes
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// general
add_image_size('preview-image', 300, 200, TRUE);
add_image_size('full-image', 1920, 9999, FALSE);
add_image_size('half-image', 900, 9999, FALSE);

// Home
add_image_size('blog-image', 960, 640, TRUE);
