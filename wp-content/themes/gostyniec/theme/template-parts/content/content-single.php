<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gostyniec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="xl:w-10/12 mx-auto mt-[25px] sm:mt-10 mb-[28px]">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<div id="breadcrumbs" class="text-[14px]">', '</div>');
			}
			?>
		</div>

		<div class="wysiwyg mt-14 sm:mt-20 mb-10 xl:w-10/12 mx-auto">
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->
	</div>


</article><!-- #post-${ID} -->