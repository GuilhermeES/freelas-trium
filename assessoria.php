<?php
/*
    Template name: Assessoria
*/

get_header(); ?>

<section class="content__blog advisory">
    <video width="100%" height="1080" autoplay muted class="banner__video--advisory">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Espiral.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>  
    <div class="container">  
        <div class="advisoy__text" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
            <h1> <?php echo get_field('title') ?> </h1>
            <p>
                <?php echo get_field('subtitle') ?>
            </p>
        </div>
        <div class="arrow"></div>
        <div class="advisory__info">
            <div class="advisory__group">

                <div class="advisory__item">
                    <div class="advisory__top">
                        <img data-aos="fade-up" data-aos-duration="700" data-aos-once="true" src="<?php echo get_template_directory_uri(); ?>/assets/img/para_voce.svg" alt="">
                        <h2 data-aos="fade-up" data-aos-duration="700" data-aos-once="true"> Para <strong>você</strong> </h2>

                    

                        <?php foreach (get_field('advisory_items_123') as $voce ) : ?>
                            <div class="advisory__card" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                                <h3 class="advisory__card-title">
                                    <?php echo $voce['informacao']; ?>
                                </h3>
                                <div class="line"></div>
                                <div class="advisory__card-subtitle">
                                    <?php echo $voce['resposta']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a href="<?php echo get_home_url() ?>/contato" class="button-pages"
                        data-aos="fade-up-right" data-aos-duration="700" data-aos-once="true" >
                           Fale com nossos <strong>assessores</strong>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                        </a>  

                </div>

                <svg data-aos="fade-down" data-aos-duration="900" data-aos-once="true" 
                xmlns="http://www.w3.org/2000/svg" width="470" height="2" viewBox="0 0 470 2" fill="none" class="advisory__divisor">
                    <path d="M0 1H470" stroke="url(#paint0_linear_345_1670)" stroke-width="2"/>
                    <defs>
                        <linearGradient id="paint0_linear_345_1670" x1="-4.35173" y1="0.499985" x2="21.4914" y2="108.411" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#005F93" stop-opacity="0.3"/>
                        <stop offset="0.5" stop-color="#005F93"/>
                        <stop offset="1" stop-color="#005F93" stop-opacity="0.3"/>
                        </linearGradient>
                    </defs>
                </svg>          

                <div class="advisory__item">
                    <div class="advisory__top">
                        <img  data-aos="fade-up" data-aos-duration="700" data-aos-once="true" src="<?php echo get_template_directory_uri(); ?>/assets/img/para_empresas.svg" alt="">
                        <h2 data-aos="fade-up" data-aos-duration="700" data-aos-once="true"> Para <strong>empresas</strong> </h2>

    

                        <?php foreach (get_field('advisory_items_123_2') as $empresas ) : ?>
                            <div class="advisory__card" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                                <h3 class="advisory__card-title">
                                    <?php echo $empresas['informacao_2']; ?>
                                </h3>
                                <div class="line"></div>
                                <div class="advisory__card-subtitle">
                                    <?php echo $empresas['resposta_2']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <a href="<?php echo get_home_url() ?>/contato" class="button-pages"
                        data-aos="fade-up-left" data-aos-duration="700" data-aos-once="true">
                        Fale com nossos <strong>assessores</strong>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="education">
    <div class="container">
        <div class="education__items">
            <div class="education__title" >
                <h2 data-aos="fade-right" data-aos-duration="700" data-aos-once="true" >
                    <?php echo get_field('title_education_advisory') ?> 
                </h2>
                <p data-aos="fade-right" data-aos-duration="800" data-aos-once="true">  <?php echo get_field('subtitle_education_advisory') ?> </p> 
                <a href="<?php echo get_home_url() ?>/educacao" class="button-pages"
                data-aos="fade-right" data-aos-duration="900" data-aos-once="true">
                    Explore as <strong>possibilidades</strong>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                </a>         
            </div>
            <div class="education__fig">
                <div class="education__json"></div>
                <img class="education__json-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-education.png" alt="background do svg">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>