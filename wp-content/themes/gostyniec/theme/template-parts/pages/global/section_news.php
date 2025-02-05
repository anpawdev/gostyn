<section class="section-news pb-24 md:pb-36 xl:pb-0">
  <div class="container">
    <div class="row">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = [
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged'          => $paged
      ];

      $query = new WP_Query($args);

      if ($query->have_posts()): ?>
        <div class="md:grid-cols-2 grid md:gap-x-14 2xl:gap-x-[110px] xl:gap-y-10">

          <?php while ($query->have_posts()): $query->the_post(); ?>
            <div class="flex flex-col h-full mt-20 xl:mt-[150px]">
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
        <div class="pagination text-center mx-auto mt-[70px]">
          <?php wp_pagenavi(['query' => $query]); ?>
        </div>
      <?php endif;

      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>