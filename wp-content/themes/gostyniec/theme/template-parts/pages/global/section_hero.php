<?php

if (is_single()) {
  $background = get_the_post_thumbnail_url(get_the_ID(), 'full');
  $banner_text = get_the_title();
} elseif (!is_home()) {
  $background = get_field('banner_background');
  $banner_text = get_field('banner_text');
} else {
  $background = get_field('banner_background', 41);
  $banner_text = get_field('banner_text', 41);
}

$heightClass = is_front_page() ? 'xl:h-screen' : 'xl:h-[752px]';
?>

<section class="hero hero-overlay <?php echo $heightClass; ?> h-[460px] relative flex justify-center items-center" style="background: url(<?php echo esc_url($background); ?>) no-repeat; background-size:cover;">
  <div class="container">
    <div data-aos="fade-in" class="text-white uppercase text-[28px] md:text-[36px] text-center xl:mt-[190px] <?php if(is_single()):?> xl:w-1/2 mx-auto <?php endif;?>">
      <?php echo $banner_text; ?>
      <?php
					$link = get_field('banner_button');
					if ($link):
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
						<a
							class="text-white hover:bg-white mt-10 sm:mt-[80px] hover:text-secondary hover:border-transparent h-[61px] lg:h-[69px] lg:px-[52px] font-light px-10 text-[17px] lg:text-[20px] transition-all inline-flex justify-center items-center border border-solid border-white uppercase"
							href="<?php echo esc_url($link_url); ?>"
							target="<?php echo esc_attr($link_target); ?>">
							<?php echo esc_html($link_title); ?>
						</a>
					<?php endif; ?>
    </div>
  </div>
</section>
