<?php

add_action('after_setup_theme', function () {
  add_action('ux_builder_setup', function () {
    add_ux_builder_shortcode( 'ux_menu_direct_link', array(
      'name'      => __( 'Menu Direct link', 'flatsome' ),
      'category'  => __( 'Content', 'flatsome' ),
      'info'      => '{{ label }}',
      'require'   => array( 'ux_menu' ),
      'template'  => file_get_contents( get_template_directory() . '/inc/builder/shortcodes/templates/ux_menu_link.html' ),
      'wrap'      => false,
      'presets'   => array(
        array(
          'name'    => __( 'Default', 'flatsome' ),
          'content' => '[ux_menu_direct_link text="Menu link" link="/"]',
        ),
      ),
      'options'   => array(
        'text'            => array(
          'type'       => 'textfield',
          'heading'    => __( 'Text', 'flatsome' ),
          'default'    => '',
          'auto_focus' => true,
        ),
        'link'            => array(
          'type'       => 'textfield',
          'heading'    => __( 'Link', 'flatsome' ),
          'default'    => '',
        ),
      ),
    ) );
  });
});