<section class="pt-[64px] lg:pt-[124px] lg:pb-[106px]">
    <div class="container-fluid relative half-fluid">
        <div class="container">
            <?php
            if (have_rows('media_text')) :
                $row_index = 0;
                while (have_rows('media_text')) : the_row();
                    $image = get_sub_field('company_image');
                    $media_type = get_sub_field('media_choices');
                    $youtubeID = get_sub_field('youtube_video');
                    $videoFile = get_sub_field('video_file');
                    $map = get_sub_field('maps');
                    $row_index++;

                    $image_position = ($row_index % 2 === 0) ? 'left-half' : 'right-half';
                    $data_aos = ($row_index % 2 === 0) ? 'fade-left' : 'fade-right';
                    $text_position = ($row_index % 2 === 0) ? 'lg:ml-[50%] sm:pl-10 xl:pl-[150px]' : 'sm:pr-10 xl:pr-[190px]';
                    $border_position = ($row_index % 2 === 0) ? 'custom-border-bottom' : 'custom-border-top';
            ?>

                    <div class="row mb-14 lg:mb-[141px] last:mb-0 md:min-h-[609px] flex flex-col" >

                        <div class="lg:w-1/2 lg:absolute <?php echo $image_position; ?>">
                            <?php if ($media_type == 'film YouTube'): ?>
                                <div class="youtube-container <?php echo $border_position; ?>">
                                    <iframe data-cookieyes="accept" width="560" height="315"
                                        src="https://www.youtube-nocookie.com/embed/<?php echo $youtubeID; ?>?playlist=<?php echo $youtubeID; ?>&loop=1&autoplay=1&mute=1&controls=0&modestbranding=1&playsinline=1&rel=0&enablejsapi=1"
                                        title="YouTube video player" allowfullscreen></iframe>
                                </div>
                            <?php elseif ($media_type == 'film wideo'): ?>
                                <video controls autoplay loop muted playsinline class="<?php echo $border_position; ?>">
                                    <source src="<?php echo esc_url($videoFile); ?>" type="video/mp4">
                                </video>
                            <?php elseif ($media_type == 'mapa'): ?>
                                <div class="custom-border-iframe map">
                                    <?php echo $map; ?>
                                </div>
                            <?php else: ?>
                                <?php if (have_rows('gallery_images')): ?>
                                    <div class="gallery-slider splide  max-h-[609px] <?php echo $border_position; ?>">
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                <?php while (have_rows('gallery_images')) : the_row();
                                                    $imageSlider = get_sub_field('image'); ?>
                                                        <a class="splide__slide"
                                                            data-fancybox="gallery-<?php echo $row_index; ?>"
                                                            data-src="<?php echo wp_get_attachment_url($imageSlider); ?>">
                                                            <?php echo wp_get_attachment_image($imageSlider, 'full', '', ["class" => "cursor-pointer w-full h-full max-h-[591px] sm:min-h-[591px] object-cover"]); ?>
                                                        </a>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>

                        <?php
                        $link = get_sub_field('button');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <?php if (is_page('galeria')): ?>
                                <a class="lg:hidden max-w-[234px] mx-auto button text-white uppercase text-base mt-10 2xl:text-[18px] h-[61px] hover:bg-secondary bg-primary transition-all font-light inline-flex justify-center items-center w-full sm:w-auto px-9 2xl:px-[54px]"
                                    href="javascript:void(0);" data-fancybox-trigger="gallery-<?php echo get_row_index(); ?>">
                                    <?php echo esc_html($link_title); ?>
                                </a>
                            <?php endif; ?>

                        <?php endif; ?>

                        <div class="wysiwyg lg:w-1/2 pt-2.5 order-first lg:order-1 mb-8 lg:mb-0 <?php echo $text_position; ?>" data-aos="<?php echo $data_aos; ?>">
                            <?php if (get_sub_field('title')): ?>
                                <h2 class="text-secondary uppercase text-[24px] xl:text-[35px] mb-[20px] lg:mb-[40px]">
                                    <?php echo get_sub_field('title'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php echo get_sub_field('text'); ?>
                            <div class="flex flex-wrap sm:flex-nowrap gap-2 mt-6 sm:mt-14 buttons">

                                <?php
                                $link = get_sub_field('button_second');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a class="button text-white uppercase text-base 2xl:text-[18px] h-[61px] hover:bg-primary bg-secondary transition-all font-light inline-flex justify-center items-center w-full sm:w-auto px-9 2xl:px-[41px]"
                                        href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                    </a>
                                <?php endif; ?>

                                <?php
                                $link = get_sub_field('button');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <?php if (is_page('galeria')): ?>
                                        <a class="hidden button text-white uppercase text-base 2xl:text-[18px] h-[61px] hover:bg-secondary bg-primary transition-all font-light lg:inline-flex justify-center items-center w-full sm:w-auto px-9 2xl:px-[41px]"
                                            href="javascript:void(0);" data-fancybox-trigger="gallery-<?php echo get_row_index(); ?>">
                                            <?php echo esc_html($link_title); ?>
                                        </a>
                                    <?php else: ?>
                                        <a class="button text-white uppercase text-base 2xl:text-[18px] h-[61px] hover:bg-secondary bg-primary transition-all font-light inline-flex justify-center items-center w-full sm:w-auto px-9 2xl:px-[41px]"
                                            href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                            <?php echo esc_html($link_title); ?>
                                        </a> <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
            <?php endwhile;
            endif; ?>

        </div>
    </div>
</section>