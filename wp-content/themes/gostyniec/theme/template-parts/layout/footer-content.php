<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gostyniec
 */

$background = get_field('footer_background', 'options');
?>

<footer id="footer" class="text-white text-base leading-[18px] overflow-hidden pt-[112px] md:pt-[200px] pb-[110px] relative" style="background: url(<?php echo $background ?> ) center/cover no-repeat;">
	<div class="container" data-aos="fade-up">
		<div class="row">
			<div class="w-full text-center flex justify-center items-start gap-[44px] mb-10 md:mb-0">
				<a aria-label="gostyniec" href="<?php echo bloginfo('url'); ?>">
					<?php
					$logo = get_field('footer_logo', 'options');

					$size = 'full';
					if ($logo) {
						$attr = array(
							'class' => '',
							'loading' => 'lazy'
						);
						echo wp_get_attachment_image($logo, $size, false, $attr);
					}
					?>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="copyright uppercase text-center mx-auto pt-[84px] md:pt-[116px] md:pb-[100px] relative z-50 w-full text-[14px]">
				<?php echo get_field('copyright', 'options'); ?>
			</div>
		</div>
	</div>
</footer>