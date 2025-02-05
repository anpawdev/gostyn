<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gostyniec
 */

get_header();
?>

<?php
get_template_part('/template-parts/pages/global/section_hero');
get_template_part('/template-parts/content/content-single');
get_template_part('/template-parts/pages/global/section_logotypes');
get_template_part('/template-parts/pages/global/section_testimonials');
?>

<?php
get_footer();
