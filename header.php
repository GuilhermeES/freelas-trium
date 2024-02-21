<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(); ?></title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>

    <header class="header <?php echo is_single() || is_page('publicacoes') ? 'header--color' : '' ?>">
        <div class="header__items">
            <div class="header__logo">
                <a href="<?php echo get_home_url() ?>">
                    <img src="<?php echo get_option('opcoes_main')['logo_header'] ?>" alt="Logo Trium | XP">
                </a>
            </div>
            <div class="header__hamburguer">
                <div class="open">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="18" viewBox="0 0 34 18" fill="none">
                        <path d="M1 1H33" stroke="#EACF86" stroke-width="2" stroke-linecap="round"/>
                        <path d="M1 9H33" stroke="#EACF86" stroke-width="2" stroke-linecap="round"/>
                        <path d="M12 17L33 17" stroke="#EACF86" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="close" style="display:none;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                        <path d="M0.999023 23.6274L23.6264 1.00002" stroke="#EACF86" stroke-width="2" stroke-linecap="round"/>
                        <path d="M23.626 23.6274L0.99856 1.00002" stroke="#EACF86" stroke-width="2" stroke-linecap="round"/>
                    </svg>     
                </div>
            </div>
            <nav class="header__navigation">
                <?php wp_nav_menu(array(
                    'container' => false,
                    'menu_class' => 'header__li',
                    'theme_location' => 'header', ));
                ?>
                <a href="<?php echo get_option('opcoes_main')['link_global'] ?>" class="main-button" target="_blank">
                    Invista
                </a>
                <div class="header__info">
                    <div class="header__social">
                        <?php include('components/social-media.php'); ?>
                    </div>
                    <div class="header__contact">
                        <?php include('components/contact.php'); ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="header__line"></div>
    </header>