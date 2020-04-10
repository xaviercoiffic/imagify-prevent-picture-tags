<?php
/**
 * Plugin Name: Imagify | Prevent Picture Tags
 * Description: Prevent the replacement of img tags into picture tags.
 * Plugin URI:  https://github.com/xaviercoiffic/imagify-prevent-picture-tags
 * Author:      Xavier Coiffic
 * Author URI:  https://xavïer.co
 */

namespace Imagify\Webp\Picture;
defined( 'ABSPATH' ) or die();

add_filter( 'imagify_allow_picture_tags_for_webp','picture_tags');

/**
 *
 * @author Xavier Coiffic
 */

function picture_tags() {
 $allow = apply_filters( 'imagify_allow_picture_tags_for_webp', false );

 if ( ! $allow ) {
 return;
		}

 ob_start( [ $this, 'maybe_process_buffer' ] );
 }
