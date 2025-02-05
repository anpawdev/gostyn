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

<section id="primary" class="py-[160px] pt-[194px] lg:pt-[244px] lg:pb-[200px]">
	<main id="main">

		<div class="text-center">
			<header class="page-header">
				<h1 class="page-title text-[84px] leading-[100px] text-primary"><?php esc_html_e('404', 'gostyniec'); ?></h1>
			</header><!-- .page-header -->

			<div <?php gftw_content_class('page-content'); ?>>
				<p class="text-xl uppercase font-bold text-black"><?php esc_html_e('Strony nie znaleziono.', 'gostyniec'); ?></p>
				<a aria-label="gostyniec" href="<?php echo bloginfo('url'); ?>" class="bg-secondary hover:bg-secondary no-underline font-bold !text-primary text-[18px] inline-flex font-Lato justify-center items-center h-[54px] px-6"><?php _e('Strona główna', 'gostyniec'); ?>
					<svg class="ml-[31px]"
						xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink"
						width="23px" height="16px">
						<image x="0px" y="0px" width="23px" height="16px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAQCAMAAADK8RQqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAulBMVEUARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYYARYb///9vP2o1AAAAPHRSTlMAFM+3CgyY+7gQBov+tAUVCJCyB4URc7UPpaqroLH0we/k8yUrJGDyQzzf60BK8e1BR+4DRulEBEL1bwKekVBxAAAAAWJLR0Q90G1RWQAAAAd0SU1FB+kBFw4hJcA0StIAAACBSURBVBjTbYzXEoJAEAT3zAoYMBEU5dQzZ1TQ+f/vssonxemnrenaFvlGFYolIZQr1VqdiYZlO4qJpgWnxUS7A5d+dHtw+0zIAENP/CD8JRiNI0xkijx2rAGZzfMsjF6uSH692e7IvD8cT2Q+RxcSuSb6dv+fHwZxSiJemD1fn+sNBPsR10+I5lMAAAAASUVORK5CYII=" />
					</svg>
				</a>
			</div><!-- .page-content -->
		</div>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
