<?php

add_theme_support('post-thumbnails');

function mvandemar_remove_post_type_support() {
    remove_post_type_support( 'post', 'editor' );
}
add_action( 'init', 'mvandemar_remove_post_type_support' );


function hide_editor()
{
    if (isset($_GET['post']))
        $post_id = $_GET['post'];
    else if (isset($_POST['post_ID']))
        $post_id = $_POST['post_ID'];
    if (!isset($post_id) || empty($post_id))
        return;
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    if ($template_file == 'index.php' ||
     $template_file == 'publicacoes.php' || 
     $template_file == 'duvidas.php'|| 
     $template_file == 'contato.php' ||
     $template_file == 'assessoria.php'||
     $template_file == 'trium.php' ||
     $template_file == 'educacao.php')
    { 
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_init', 'hide_editor');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

function livros_setup(){
    register_post_type('livros', array(
        'labels' => array(
            'name' => 'Livros',
            'singular_name' => 'Livro',
            'add_new_item' => 'Adicionar novo'
        ),
        'publicly_queryable'  => false,
        'supports' => array('title', 'thumbnail', 'editor'),
        'menu_icon' => 'dashicons-book',
        'public' => true,
    ));
}
add_action('after_setup_theme', 'livros_setup');

function podcasts_setup(){
    register_post_type('podcasts', array(
        'labels' => array(
            'name' => 'Podcasts',
            'singular_name' => 'Podcast',
            'add_new_item' => 'Adicionar novo'
        ),
        'publicly_queryable'  => false,
        'supports' => array('title', 'thumbnail', 'editor'),
        'menu_icon' => 'dashicons-book',
        'public' => true,
    ));
}
add_action('after_setup_theme', 'podcasts_setup');

function videos_setup(){
    register_post_type('videos', array(
        'labels' => array(
            'name' => 'Videos',
            'singular_name' => 'Video',
            'add_new_item' => 'Adicionar novo'
        ),
        'publicly_queryable'  => false,
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-book',
        'public' => true,
    ));
}
add_action('after_setup_theme', 'videos_setup');

include_once('includes/cmb2.php');
include_once('includes/menus.php');