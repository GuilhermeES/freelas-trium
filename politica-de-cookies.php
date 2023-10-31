<?php
/*
    Template name: Cookies
*/

get_header(); ?>
 
<section class="mini-banner mini-banner--politic">
    <video width="100%" height="1080" loop autoplay muted class="mini-banner__video">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Circle.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="mini-banner__title" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">>
        <div class="container">
            <h1> <?php echo get_field('title') ?> </h1>
        </div>
    </div>
</section>

<section class="content-pattern content-pattern--politics--bg">
    <div class="container">
        <div class="content-pattern__items content-pattern__items--politcs">
            <div class="content-pattern__title content-pattern--indices" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <?php foreach (get_field('cmb_cookies_group') as $indice ) :  ?>
                    <a class="politic__indice <?php echo is_page('politica-de-privacidade')  ? 'politic__indice--privacity' : 'politic__indice--cookies' ?>" >
                        <?php echo $indice['indice_cookies']; ?>
                    </a>
                    <?php if (!empty($indice['subindice_cookies'])): ?>
                        <ul class="politic__subindice">
                            <li> <?php echo $indice['subindice_cookies']; ?> </li>
                        </ul>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="content-pattern__questions content-pattern--politic content-pattern--cookie"
            data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                <?php echo wpautop( the_content() ) ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>