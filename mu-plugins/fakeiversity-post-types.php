<?php function fakeiversity_post_types()
{
  register_post_type('event', array(
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-calendar-alt',
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singluar_name' => 'Event',
    )
  ));
}

add_action('init', 'fakeiversity_post_types');
