<?php

/**
 * Template Name: Szablon główny
 *
 */

get_header();
?>

<?php
get_template_part('/template-parts/pages/global/section_hero');
get_template_part('/template-parts/pages/global/section_main');
get_template_part('/template-parts/pages/global/section_logotypes');
get_template_part('/template-parts/pages/global/section_testimonials');
?>

<?php
get_footer();
