<?php
$post_group = get_field('home_posts');
?>

<section class="section-news mb-[85px]">
  <div class="container">
    <div class="row">
      <div class="wysiwyg text-center lg:w-1/2 lg:mx-auto">
        <h2 class="text-secondary uppercase text-[24px] xl:text-[35px] mb-[20px]">
          <?php echo $post_group['posts_heading']; ?>
        </h2>
        <?php echo $post_group['posts_text']; ?>
      </div>
    </div>
    <div class="row">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
      ];

      $query = new WP_Query($args);

      if ($query->have_posts()): ?>
        <div class="md:grid-cols-2 grid md:gap-x-14 2xl:gap-x-[110px] xl:gap-y-10">

          <?php while ($query->have_posts()): $query->the_post(); ?>
            <div class="flex flex-col h-full mt-20 xl:mt-[84px]" data-aos="fade-up">
              <a href="<?php echo get_permalink(); ?>" class="relative group text-secondary transition-all h-full">
                <div class="relative">
                  <div class="custom-border-top-visible">
                    <?php the_post_thumbnail('full', ['class' => 'w-full min-h-[320px] xl:h-[469px] object-cover']); ?>
                  </div>
                </div>
                <div class="px-4 xl:px-[60px]">
                  <h3 class="text-secondary group-hover:text-primary text-[20px] font-bold pt-6 xl:pt-[70px] mb-[34px]"><?php the_title(); ?></h3>
                  <p class="text-[17px] leading-[22px] group-hover:text-primary"><?php echo wp_trim_words(get_the_content(), 20, '...');  ?></p>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif;

      wp_reset_postdata();
      ?>
    </div>
    <div class="row text-center">
      <?php
      if ($post_group): ?>
        <?php
        $link = $post_group['posts_cta'];
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a
            class="text-white hover:bg-secondary mx-auto bg-primary h-[61px] sm:px-[45px] w-full sm:w-auto px-4 uppercase font-Lato font-light text-base lg:text-[18px] transition-all inline-flex justify-center items-center mt-[56px]"
            href="<?php echo esc_url($link_url); ?>"
            target="<?php echo esc_attr($link_target); ?>">
            <?php echo esc_html($link_title); ?>
          </a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</section>