<?php

if (is_single()) {
	$background = get_the_post_thumbnail_url(get_the_ID(), 'full');
	$banner_text = get_the_title();
} elseif (!is_home() && !is_404()) {
	$background = get_field('banner_background');
	$banner_text = get_field('banner_text');
} else {
	$background = get_field('banner_background', 76);
	$banner_text = get_field('banner_text', 76);
}

$heightClass = is_front_page() ? 'xl:h-screen' : 'xl:h-[752px]';
$media = get_field('banner_choices');
$youtube = get_field('banner_youtube_video');
$videoFile = get_field('banner_video_file');
?>

<section class="hero <?php echo $heightClass; ?> h-[460px] relative flex justify-center items-center overflow-hidden" style="background: url(<?php echo esc_url($background); ?>) no-repeat; background-size:cover;">
	<?php if ($media == 'film YouTube'): ?>
		<div class="absolute top-0 left-0 w-full h-full z-[2] hero-overlay">
			<iframe class="w-full h-full absolute top-0 left-0" data-cookieyes="accept"
				src="https://www.youtube-nocookie.com/embed/<?php echo $youtube; ?>?playlist=<?php echo $youtube; ?>&loop=1&autoplay=1&mute=1&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1"
				title="YouTube video player" allowfullscreen></iframe>
		</div>
	<?php elseif ($media == 'film wideo'): ?>
		<video class="absolute top-0 left-0 w-full h-full object-cover z-[2] hero-overlay" autoplay loop muted playsinline>
			<source src="<?php echo esc_url($videoFile); ?>" type="video/mp4">
		</video>
	<?php else: ?>
		<div class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-[2] hero-overlay ">
		<?php if (have_rows('banner_gallery_images')): ?>
			<div class="gallery-slider splide h-full <?php echo $heightClass; ?>">
				<div class="splide__track h-full">
					<ul class="splide__list h-full">
						<?php while (have_rows('banner_gallery_images')) : the_row();
							$imageSlider = get_sub_field('banner_background'); ?>
							<?php echo wp_get_attachment_image($imageSlider, 'full', '', ["class" => "splide__slide w-full h-full <?php echo $heightClass; ?> object-cover"]); ?>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	<div class="container relative z-10 lg:w-1/2 mx-10 sm:mx-auto">
		<div data-aos="fade-in" class="text-white uppercase text-[28px] md:text-[36px] text-center mt-14 
			<?php if (is_front_page()): ?> 2xl:mt-[380px] <?php else: ?> xl:mt-[190px] <?php endif; ?> 
			<?php if (is_single()): ?> xl:w-1/2 mx-auto <?php endif; ?>">
			<?php echo $banner_text; ?>
			<?php
			$link = get_field('banner_button');
			if ($link):
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
			?>
				<a
					class="text-white hover:bg-white mt-10 2xl:mt-[200px] hover:text-secondary hover:border-transparent 
					h-[61px] lg:h-[69px] lg:px-[80px] font-light px-10 text-[17px] lg:text-[20px] transition-all 
					inline-flex justify-center items-center border border-solid border-white uppercase"
					href="<?php echo esc_url($link_url); ?>"
					target="<?php echo esc_attr($link_target); ?>">
					<?php echo esc_html($link_title); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>
