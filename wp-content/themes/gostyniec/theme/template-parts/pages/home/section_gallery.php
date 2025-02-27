<?php
$gallery_group = get_field('gallery');
?>

<section class="mb-8 sm:mb-14">
  <div class="container">
    <div class="row">
      <div class="wysiwyg text-center lg:w-1/2 lg:mx-auto mb-[60px]">
        <h2 class="text-secondary uppercase text-[28px] xl:text-[35px] mb-[20px] lg:mb-[50px]">
          <?php echo $gallery_group['gallery_heading']; ?>
        </h2>
        <?php echo $gallery_group['gallery_text']; ?>
      </div>
    </div>
  </div>
  <div class="container-fluid relative">
    <?php if (have_rows('gallery_repeater')): ?>
      <div id="splide-gallery" class="splide">
        <div class="splide__track py-4">
          <ul class="splide__list">
            <?php while (have_rows('gallery_repeater')) : the_row();
              $imageSlider = get_sub_field('gallery_repeater_image'); ?>
              <a class="splide__slide cursor-pointer xl:max-h-[365px]"
                data-fancybox="gallery"
                data-src="<?php echo wp_get_attachment_url($imageSlider); ?>">
                <div class="splide__slide-content">
                  <?php echo wp_get_attachment_image($imageSlider, 'full', '', ["class" => "w-max h-full xl:max-h-[365px] sm:min-h-[365px] object-cover"]); ?>

                </div>
              </a>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="row text-center mt-[38px]">
      <?php
      if ($gallery_group): ?>
        <?php
        $link = $gallery_group['gallery_cta'];
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a
            class="text-white hover:bg-secondary mx-auto bg-primary h-[61px] w-full sm:w-auto px-4 sm:px-[45px] uppercase font-Lato font-light text-base lg:text-[18px] transition-all inline-flex justify-center items-center mt-[14px]"
            href="<?php echo esc_url($link_url); ?>"
            target="<?php echo esc_attr($link_target); ?>">
            <?php echo esc_html($link_title); ?>
          </a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</section>