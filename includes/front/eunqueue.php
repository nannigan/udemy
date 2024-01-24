<?php

function u_enqueue (){
 wp_register_style(
    'u_font_roboto_slab_and_lemon','https://fonts.googleapis.com/css2?family=Lemon&family=Roboto+Slab:wght@300&display=swap'
 );
 wp_register_style(
    'u_bootstrap_icons', get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
 );
wp_register_style(
    'u_theme', get_theme_file_uri('assets/public/index.css')
 );
 wp_enqueue_style('u_font_roboto_slab_and_lemon');
 wp_enqueue_style('u_bootstrap_icons');
 wp_enqueue_style('u_theme');
}