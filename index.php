<?php
/*
    Template name: Home
*/

get_header(); ?>

    <div class="main">
        <?php include_once('components/banner.php'); ?>

        <section class="banner__info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-numbers.svg" alt="Layer" class="banner__info-bg"/>
            <div class="container">
                <div class="banner__info-items">
                    <div class="banner__info-numbers">
                        <h2  data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                            <?php echo get_field('title_info'); ?>
                        </h2>
                        <div class="infos">
                            <div class="card nps"  data-aos="fade-up-left" data-aos-duration="700" data-aos-once="true">
                                <div class="nps">
                                <h4> NPS: <mark> <?php echo get_option('opcoes_main')['title_nps'] ?> </mark> </h4>
                                </div>
                                <div class="infos--sub">
                                    Net Promoter Score
                                </div>
                            </div>
                            <div class="card custodia"  data-aos="fade-up-left" data-aos-duration="900" data-aos-once="true">
                                <div class="nps">
                                    <h4> <?php echo get_option('opcoes_main')['title_sob'] ?> </h4>    
                                </div>
                                <div class="infos--sub">
                                    sob custódia
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner__info-infos">
                            <h2>
                                <?php echo get_field('title_info'); ?>
                            </h2>
                        <div class="banner__info-infos-item"  data-aos="fade-left" data-aos-duration="600" data-aos-once="true">
                            <div class="servir"></div>   
                            <div>
                                <h3> <?php echo get_field('banner_info_1'); ?> </h3>
                                <p><?php echo get_field('banner_text_1'); ?></p>
                            </div> 
                        </div>
                        <div class="banner__info-infos-item" data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
                            <div class="investidor"></div>   
                            <div>
                                <h3> <?php echo get_field('banner_info_2'); ?> </h3>
                                <p><?php echo get_field('banner_text_2'); ?></p>
                            </div> 
                        </div>
                        <div class="banner__info-infos-item" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                            <div class="assesoria"></div>   
                            <div>
                                <h3> <?php echo get_field('banner_info_3'); ?> </h3>
                                <p class="banner__info-infos-item--last-p"> <?php echo get_field('banner_text_3'); ?></p>
                            </div> 
                        </div>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-section.svg" class="line-section">
            </div>
        </section>
    </div>

    <section class="about">
        <div class="container">
            <div class="about__items">
                <div class="about__imgs">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/isolation.svg" class="isolation"
                    data-aos="fade-down" data-aos-duration="700" data-aos-once="true"
                    >
                    <img class="about__img"
                        data-aos="fade-up" data-aos-duration="700" data-aos-once="true"
                        src="<?php echo !empty(get_field('image_about')) ? get_field('image_about') : 'https://via.placeholder.com/697x620' ?>"
                        alt="<?php echo !empty(get_post_meta(get_field('image_about_id'), '_wp_attachment_image_alt', TRUE)) ?
                            get_post_meta(get_field('image_about_id'), '_wp_attachment_image_alt', TRUE) :
                            'Imagem usuario' ?> " 
                    >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_about.svg" class="arrow_about"
                    data-aos="fade-up" data-aos-duration="900" data-aos-once="true"
                    >
                </div>
                <div class="about__texts">
                    <h2 data-aos="fade-left" data-aos-duration="600" data-aos-once="true"> <?php echo get_field('title_about'); ?> </h2>

                    <div class="about__info foryou" data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
                        Para <strong>você</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="252" height="1" viewBox="0 0 252 1" fill="none">
                            <path d="M0 0.5H252" stroke="url(#paint0_linear_272_5439)"/>
                            <defs>
                                <linearGradient id="paint0_linear_272_5439" x1="0" y1="0.5" x2="295.5" y2="2.31937e-07" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#EACF86"/>
                                <stop offset="1" stop-color="#EACF86" stop-opacity="0"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <p>
                            <?php echo get_field('foryou'); ?>
                        </p>
                    </div>

                    <div class="about__info enterprise" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                        Para <strong>empresas</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="252" height="1" viewBox="0 0 252 1" fill="none" class="about__info-svg--2">
                        <path d="M0 0.5H252" stroke="url(#paint0_linear_272_5439)"/>
                        <defs>
                            <linearGradient id="paint0_linear_272_5439" x1="0" y1="0.5" x2="295.5" y2="2.31937e-07" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EACF86"/>
                            <stop offset="1" stop-color="#EACF86" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                        </svg>
                        <p>
                            <?php echo get_field('enterprise'); ?>
                        </p>
                    </div>

                    <a href="<?php echo get_home_url() ?>/assessoria" class="button-pages"
                    data-aos="fade-left" data-aos-duration="900" data-aos-once="true">
                        Conheça <strong>nossos serviços</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                    </a>  

                </div>
            </div>
        </div>
    </section>

    <section class="education--home">
        <div class="container">
            <div class="education__items">
                <div class="education__title">
                    <h2 data-aos="fade-right" data-aos-duration="600" data-aos-once="true"> <?php echo get_field('title_education_advisory') ?> </h2>
                    <p data-aos="fade-right" data-aos-duration="700" data-aos-once="true">  <?php echo get_field('subtitle_education_advisory') ?> </p> 
                    <a href="<?php echo get_home_url() ?>/educacao" class="button-pages"
                    data-aos="fade-right" data-aos-duration="900" data-aos-once="true">
                        Explore as <strong>possibilidades</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                    </a>         
                </div>
                <div class="education__fig">
                    <div class="education__json__home"></div>
                    <img class="education__json-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-education-home.svg" alt="background do svg">
                </div>
            </div>
        </div>
        <?php include_once('components/card-home.php'); ?>
    </section>

    <?php if (!empty(get_field('title_last_posts'))): ?>
        <section class="info__last-posts info__last-posts--home">
            <svg xmlns="http://www.w3.org/2000/svg" width="207" height="2" viewBox="0 0 207 2" fill="none">
                <path d="M-209 1L207 0.999964" stroke="url(#paint0_linear_272_8256)" stroke-width="2"></path>
                <defs>
                    <linearGradient id="paint0_linear_272_8256" x1="73.1963" y1="0.45702" x2="278.808" y2="-0.0806896" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EACF86"></stop>
                    <stop offset="1" stop-color="#EACF86" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
            <div class="container">
                <div class="info__last-posts-items">
                    <h2 data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                        <?php echo get_field('title_last_posts'); ?>
                    </h2>
                    <a href="<?php echo get_home_url() ?>/publicacoes"
                    data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                        Ver todos
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" class="faq__arrow" alt="Seta indicadora">
                    </a>
                </div>     
            </div>
        </section>
    <?php endif; ?>

<?php include_once('components/last-posts.php'); ?>

<?php get_footer(); ?>