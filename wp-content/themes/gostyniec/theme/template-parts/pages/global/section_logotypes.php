<section class="overflow-hidden pt-[48px] pb-[29px] text-center">
  <div class="container">
    <div class="row">
      <h2 class="text-text inline-block bg-white mx-auto relative px-10 uppercase top-6 z-10 text-center font-light text-[24px] md:text-[35px]"><?php echo get_field('logotypes_heading', 'options'); ?></h2>
      <?php
      if (have_rows('logotypes', 'options')): ?>
        <div id="splide-logo" class="splide sm:px-[75px] py-[80px] border border-solid border-primary">
          <div class="splide__track">
            <ul class="splide__list items-center">
              <?php while (have_rows('logotypes', 'options')) : the_row(); ?>
                <li class="splide__slide cursor-pointer flex justify-center items-center">
                  <?php
                  $image = get_sub_field('logotype', 'options');
                  if (!empty($image)): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full max-w-[233px] max-h-[116px] object-contain grayscale opacity-50 hover:grayscale-0 hover:opacity-100"/>
                  <?php endif; ?>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
      <?php endif;

      wp_reset_postdata();
      ?>

    </div>
  </div>
</section>