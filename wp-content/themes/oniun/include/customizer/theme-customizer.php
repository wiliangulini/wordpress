<?php
require get_template_directory().'/include/customizer/social.php';

function bo_customize_register($wp_customize) {

  bo_social_customizer($wp_customize);

}
