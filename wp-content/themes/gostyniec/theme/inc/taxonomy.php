<?php
// hook into the init action and call mentors_taxonomies when it fires
add_action('init', 'partners_taxonomies', 0);

function partners_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x('Kategorie', 'taxonomy general name', 'gostyniec'),
    'singular_name'     => _x('Kategorie', 'taxonomy singular name', 'gostyniec'),
    'search_items'      => __('Szukaj', 'gostyniec'),
    'all_items'         => __('Wszystkie', 'gostyniec'),
    'parent_item'       => __('Rodzic', 'gostyniec'),
    'parent_item_colon' => __('Rodzic:', 'gostyniec'),
    'edit_item'         => __('Edytuj', 'gostyniec'),
    'update_item'       => __('Aktualizuj', 'gostyniec'),
    'add_new_item'      => __('Dodaj nową', 'gostyniec'),
    'new_item_name'     => __('Nowa pozycja', 'gostyniec'),
    'menu_name'         => __('Kategorie', 'gostyniec'),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'partnerzy', 'with_front' => false),
  );

  register_taxonomy('partners', array('partners'), $args);
}
