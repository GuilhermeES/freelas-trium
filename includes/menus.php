<?php

function header_init() {
    register_nav_menu('header', __('Header'));
}
add_action('init', 'header_init');

function footer__init()
{
  register_nav_menu('menu_footer_1', __('Menu Footer | Coluna 1'));
  register_nav_menu('menu_footer_2', __('Menu Footer | Coluna 2'));
}
add_action('init', 'footer__init');
