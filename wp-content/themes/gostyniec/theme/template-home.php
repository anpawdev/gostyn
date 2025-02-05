<?php

/**
 * Template Name: Strona główna
 *
 */

get_header();
?>

<?php
  get_template_part('/template-parts/pages/global/section_hero');
  get_template_part('/template-parts/pages/global/section_main');
  get_template_part('/template-parts/pages/home/section_cta');
  get_template_part('/template-parts/pages/home/section_news');
  get_template_part('/template-parts/pages/home/section_gallery');
  get_template_part('/template-parts/pages/global/section_logotypes');
  get_template_part('/template-parts/pages/global/section_testimonials');
  get_template_part('/template-parts/pages/home/section_text');

?>

<?php
get_footer();
