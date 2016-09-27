<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package savannahtrek
 */

if ( ! is_active_sidebar( 'sidebar-languages' ) ) {
	return;
}
?>


	<?php dynamic_sidebar( 'sidebar-languages' ); ?>

