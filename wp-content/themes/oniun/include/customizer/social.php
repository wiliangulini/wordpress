<?php

function bo_social_customizer( $wp_customize ) {
  // Settings
  $wp_customize->add_setting('bo_facebook', array('default' => ''));
  $wp_customize->add_setting('bo_instagram', array('default' => ''));
  $wp_customize->add_setting('bo_whatsapp', array('default' => ''));
  $wp_customize->add_setting('bo_shared', array('default' => ''));

  // Sections
  $wp_customize->add_section('bo_social_section', array(
    'title' => 'Redes Sociais',
    'priority' => '1'
  ));

  // Controllers
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'bo_facebook',
      array(
        'label' => 'Link do Facebook',
        'section' => 'bo_social_section',
        'settings' => 'bo_facebook',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'bo_instagram',
      array(
        'label' => 'Link do Instagram',
        'section' => 'bo_social_section',
        'settings' => 'bo_instagram',
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'bo_whatsapp',
      array(
        'label' => 'Link do WhatsApp',
        'section' => 'bo_social_section',
        'settings' => 'bo_whatsapp',
        'type' => 'text'
      )
    )
  );
}
