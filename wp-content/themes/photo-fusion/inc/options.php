<?php
/**
 * Photo Fusion options
 *
 * @package Theme Palace
 * @subpackage Photo_Fusion
 * @since Photo Fusion 0.1
 */


/**
 * Enable options of the defined section
 * @return array Enable options
 */
function photo_fusion_enable_options() {
	$photo_fusion_enable_options = array(
		'static-frontpage' => esc_html__( 'Static Frontpage', 'photo-fusion' ),
		'entire-site'      => esc_html__( 'Entire Site', 'photo-fusion' ),
		'disabled'         => esc_html__( 'Disabled', 'photo-fusion' ),
	);

	$output = apply_filters( 'photo_fusion_enable_options', $photo_fusion_enable_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}

/**
 * Common content types
 * @return array Content types
 */
function photo_fusion_content_type() {
	$photo_fusion_content_type = array(
		'page'		=> esc_html__( 'Page', 'photo-fusion' ),
	); 

	$output = apply_filters( 'photo_fusion_content_type', $photo_fusion_content_type );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}

/**
 * Enable options of the slider section
 * @return array Enable options
 */
function photo_fusion_enable_disable_options() {
	$photo_fusion_enable_disable_options = array(
		'static-frontpage' => esc_html__( 'Static Frontpage', 'photo-fusion' ),
		'disabled'         => esc_html__( 'Disabled', 'photo-fusion' ),
	);

	$output = apply_filters( 'photo_fusion_enable_disable_options', $photo_fusion_enable_disable_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}

/**
 * Blog content types
 * @return array Content types
 */
function photo_fusion_blog_content_type() {
	$photo_fusion_blog_content_type = array(
		'recent-post' => esc_html__( 'Recent Posts', 'photo-fusion' ),
	);

	$output = apply_filters( 'photo_fusion_blog_content_type', $photo_fusion_blog_content_type );

	return $output;
}

/**
 * photo gallery source
 */
function photo_fusion_photo_gallery_source() {
	$photo_fusion_pg_source = array(
		'category' 	=> esc_html__( 'Category', 'photo-fusion' ),
	);

	$output = apply_filters( 'photo_fusion_pg_source', $photo_fusion_pg_source );

	return $output;
}

/**
 * Site Layout
 * @return array Sidbar positions
 */
function photo_fusion_photo_gallery_image_layout() {
	$photo_fusion_about_image_layout = array(
		'grid'  	=> esc_html__( 'Grid Box', 'photo-fusion' ),
	);

	$output = apply_filters( 'photo_fusion_about_image_layout', $photo_fusion_about_image_layout );

	return $output;
}

/**
 * About Section Source
 * @return array Enable options
 */
function photo_fusion_about_source_options() {
	$photo_fusion_about_source_options = array(
		'page'      => esc_html__( 'Page', 'photo-fusion' ),
	);

	$output = apply_filters( 'photo_fusion_about_source_options', $photo_fusion_about_source_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}

/**
 * List of pagination types
 * @return array Pagination types
 */
function photo_fusion_pagination_type() {
	$photo_fusion_pagination_type = array(
		'numeric'         => esc_html__( 'Numeric', 'photo-fusion' ),
		'older-newer'     => esc_html__( 'Older/Newer', 'photo-fusion' ),
	);

	$output = apply_filters( 'photo_fusion_pagination_type', $photo_fusion_pagination_type );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}