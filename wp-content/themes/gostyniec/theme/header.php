<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gostyniec
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<div id="loader" class="loader overflow-hidden max-w-[100vw]">
		<div class="logo">
			<img src='<?php echo get_template_directory_uri(); ?>/images/gostyniec-logo.png' alt='Logo' id='loader-logo' loading='lazy'>
		</div>
	</div>
	<?php echo get_field('head_code', 'options'); ?>
</head>

<body <?php body_class(); ?>>
	<?php echo get_field('body_code', 'options'); ?>

	<?php wp_body_open(); ?>

	<div class="socials fixed right-0 top-1/2 z-20 hidden md:block">
		<div class="flex flex-col items-center justify-center gap-[1px]">
			<?php
			$social_media = get_field('social_media', 'options');
			if ($social_media && isset($social_media['facebook'])): ?>
				<a class="inline-flex bg-white w-[48px] h-[48px] justify-center items-center" target="_blank" rel="nofollow noopener" href="<?php echo esc_url($social_media['facebook']); ?>">
					<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<mask id="mask0_1_99" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="10" height="20">
							<rect width="10" height="20" fill="url(#pattern0_1_99)" />
						</mask>
						<g mask="url(#mask0_1_99)">
							<rect width="10" height="20" fill="#0e3932" class="fill-color"></rect>
						</g>
						<defs>
							<pattern id="pattern0_1_99" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_1_99" transform="scale(0.1 0.05)" />
							</pattern>
							<image id="image0_1_99" width="10" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAUCAMAAACDMFxkAAAAUVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABcqRVCAAAAG3RSTlP/AANK5PL45i9SdcXtzE9A0+Gt3Wg6us6CxLUJNCkXAAAAWklEQVR4nJXMSRKAIAwEQCJGZMd9+f9DTYh4dy7TVamMAo6LAU3lrWpIq4h5cC+RaUgOoHEUTsSNOHs/EMu1v8812MC3LznZQHUm3RZkrOuJ+j953AoLImaAByuGAnQq4jenAAAAAElFTkSuQmCC" />
						</defs>
					</svg>
				</a>
			<?php endif; ?>
			<?php
			if ($social_media && isset($social_media['booking'])): ?>
				<a class="inline-flex bg-white w-[48px] h-[48px] justify-center items-center" target="_blank" rel="nofollow noopener" href="<?php echo esc_url($social_media['booking']); ?>">
					<svg width="18" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<mask id="mask0_1973_102" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="22">
							<rect width="20" height="21" transform="translate(0.0283203 0.71582)" fill="url(#pattern0_1973_102)" />
						</mask>
						<g mask="url(#mask0_1973_102)">
							<rect x="0.0283203" y="0.71582" width="20" height="21" fill="#0e3932" class="fill-color" />
						</g>
						<defs>
							<pattern id="pattern0_1973_102" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_1973_102" transform="scale(0.05 0.047619)" />
							</pattern>
							<image id="image0_1973_102" width="20" height="21" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAMAAABxCz6aAAAA1VBMVEUAAAATOIATOH8UOIATOIATOIAAp+YAn98TOIAUOIAUOIATOYATOH8TOIASOYASOYASOIATOYATOIAApOMSOIEUOYETOYETOIAUOIAXJ3EWK3UAldMBnt0AQIAFh8cJeboUNHwAM5kUMXoVNHwApuYAVaoTOIAkJG0kSZITN38Ase4UM4UArOogQIAUPIAPabQUO4kVOIAAr+0TOYAWOnwRNoICldUTOYAUN4AaTZkAruwTOYAXOoATOH8UOIAAmNoTOIAYPYYSOIEVOYIUNoETN4AAse5DV3NBAAAAR3RSTlMA//Kbnuj//8q37Gz1+dyai7qT/31Z/4TeiDs6zQSTO/wFxEqYA7EHB3iwGTEIJhENVo3UIz3aNoEK/+YWUsQ+wBVxMUvYig+62RQAAADESURBVHicXc7VEoNADAXQbCm0SL1I3d3dXf7/k5rNALvT+8LlDCSBSj7Kk9q/QaTLgniXEEPDLAK08MXI6FfSuY8RxhIjfL6wMFvgiUoWMS9Q7fPiIpoSUkkirgVaT9McrNCUYDuf7yca3inhfSOjqus6H8l20p1nXtKIn//t4KFOQzQm1DKILYEdaipjThHgNha/NxT8sN47lLVjlRbFMQaaU4ClFotp8p2sCTAkFGSlcUotl9O2kFUoKdd+0LpS+zv7AUfJDDVNw6+GAAAAAElFTkSuQmCC" />
						</defs>
					</svg>
				</a>
			<?php endif; ?>
			<?php
			if ($social_media && isset($social_media['instagram'])): ?>
				<a class="inline-flex bg-white w-[48px] h-[48px] justify-center items-center" target="_blank" rel="nofollow noopener" href="<?php echo esc_url($social_media['instagram']); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" fill="#0e3932" viewBox="0 0 16 16">
						<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
					</svg>
				</a>
			<?php endif; ?>
		</div>
	</div>

	<div id="page">
		<a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'gostyniec'); ?></a>

		<?php get_template_part('template-parts/layout/header', 'content'); ?>

		<div id="content">