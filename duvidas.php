<?php
/*
    Template name: Duvidas
*/

get_header(); ?>
 
<section class="mini-banner">
    <video width="100%" height="1080" loop autoplay muted class="mini-banner__video">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Circle.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="mini-banner__title" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
        <div class="container">
            <h1> <?php echo get_field('title') ?> </h1>
        </div>
    </div>
</section>

<section class="content-pattern content-pattern--questions">
    <svg xmlns="http://www.w3.org/2000/svg" width="467" height="4" viewBox="0 0 467 4" fill="none" class="content-pattern__svg">
        <line x1="467" y1="2" x2="-36" y2="1.99996" stroke="url(#paint0_linear_410_3951)" stroke-width="4"/>
        <defs>
        <linearGradient id="paint0_linear_410_3951" x1="467" y1="0" x2="-1655.56" y2="-0.000185528" gradientUnits="userSpaceOnUse">
        <stop stop-color="#EACF86" stop-opacity="0.35"/>
        <stop offset="1" stop-color="#785800"/>
        </linearGradient>
        </defs>
    </svg>
    <div class="container">
        <div class="content-pattern__items">
            <div class="content-pattern__title"
            data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                <h2> <?php echo get_field('title_questions') ?>  <h2>
            </div>
            <div class="content-pattern__questions" 
            data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                <ul class="according-list">
                    <?php $item = 0; ?>
                    <?php foreach (get_field('questions') as $question ) : $item++ ?>
                        <div class="faq__item">
                            <div class="faq__info">
                                <div class="faq__top">
                                    <div class="faq__number"><?php echo $item; ?></div>   
                                    <h3 class="faq__header"><?php echo $question['pergunta']; ?></h3>
                                </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" class="faq__arrow"  alt="Seta indicadora">
                            </div>
                            <div class="faq__content">
                                <?php echo wpautop( $question['resposta'] ) ?>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>