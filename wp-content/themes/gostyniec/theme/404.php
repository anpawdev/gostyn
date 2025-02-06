<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gostyniec
 */

get_header();
?>

<?php
$background = get_field('banner_background', 76);
?>

<section class="hero hero-overlay xl:h-screen h-[460px] relative flex justify-center items-center" style="background: url(<?php echo esc_url($background); ?>) no-repeat; background-size:cover;">
	<div class="container">
		<div data-aos="fade-in" class="text-white uppercase text-center xl:mt-[190px] ">
			<h1 class="text-[28px] md:text-[63px]"><?php esc_html_e('404', 'gostyniec'); ?></h1>
			<div <?php gftw_content_class('page-content'); ?>>
				<p class="text-xl uppercase font-light text-white"><?php esc_html_e('Strony nie znaleziono.', 'gostyniec'); ?></p>
				<a aria-label="gostyniec" href="<?php echo bloginfo('url'); ?>" class="bg-primary hover:bg-secondary uppercase no-underline font-light !text-white text-[18px] inline-flex font-Lato justify-center items-center h-[54px] px-[35px]"><?php _e('Strona główna', 'gostyniec'); ?> </a>
			</div><!-- .page-content -->

		</div>
	</div>
</section>

<?php
get_footer();
