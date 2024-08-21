<?php
/*
    Template name: Educacao
*/

get_header(); ?>
 
<section class="mini-banner mini-banner--education">
    <video width="100%" height="1080"  autoplay muted class="mini-banner__video mini-banner__video--education">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Concha.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="mini-banner__title mini-banner__title--education">
        <div class="container">
            <div class="education__banner">
                <h1 data-aos="fade-up" data-aos-duration="700" data-aos-once="true"> <?php echo get_field('title') ?> </h1>
                <div class="round_blue_education">
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty(get_field('title_last'))): ?>
    <section class="info__last-posts info__last-education">
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
                    <?php echo get_field('title_last'); ?>
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

<section class="ctas">
    <div class="container">
        <div class="ctas__items">
            <div class="cta__card cta__event"  data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                <div class="cta__event--items">
                    <h2> <?php echo get_field('title_cta'); ?> </h2>
                    <div class="cta__event__sub">
                        <?php echo wpautop( get_field('subtitle_cta') ) ?>
                    </div>
                    <a href="<?php echo get_field('link_cta'); ?>" class="button-pages">
                        <?php echo get_field('bota_cta'); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                    </a> 
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/events.png" class="cta__event-img" alt="Evento especiais">
            </div>
            <div class="cta__aside">
                <div class="cta__card"  data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
                    <div class="cta__card--items">
                        <h2> <?php echo get_field('title_cta_ebook'); ?> </h2>
                        <div class="cta__event__sub">
                            <?php echo wpautop( get_field('subtitle_cta_ebook') ) ?>
                        </div>
                        <a href="<?php echo get_field('link_cta_ebook'); ?>" class="button-pages" target="_blank">
                            <?php echo get_field('bota_cta_ebook'); ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                        </a> 
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ebook.png" class="cta__card-img" alt-="Ebook"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ebook-mobile.png" class="cta__card-img cta__card-img--mobile" alt="Ebook">
                </div>
                <div class="cta__card"  data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
                    <div class="cta__card--items">
                        <h2> <?php echo get_field('title_cta_webinars'); ?> </h2>
                        <div class="cta__event__sub">
                            <?php echo wpautop( get_field('subtitle_cta_webinars') ) ?>
                        </div>
                        <a href="<?php echo get_field('link_cta_webinars'); ?>" class="button-pages" target="_blank">
                            <?php echo get_field('bota_cta_webinars'); ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                        </a> 
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/webinar.png" class="cta__card-img" alt="Webinar">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/webinar-mobile.png" class="cta__card-img cta__card-img--mobile" alt="Webinar">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cpts">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'livros',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
        query_posts($args); 
        if (have_posts()) : ?>
            <div class="cpt">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cpt_icon.svg"/>
                <h2  data-aos="fade-up-right" data-aos-duration="700" data-aos-once="true"> <strong>Livros</strong> que <br> indicamos </h2>

                <svg xmlns="http://www.w3.org/2000/svg" width="2" height="569" viewBox="0 0 2 569" fill="none">
                        <path d="M1 0V569" stroke="url(#paint0_linear_1143_4990)" stroke-width="2"/>
                        <defs>
                            <linearGradient id="paint0_linear_1143_4990" x1="-7.80652e+13" y1="-41.3491" x2="-7.80652e+13" y2="873.725" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.3125" stop-color="#005F93"/>
                            <stop offset="0.546875" stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.936866" stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.9375" stop-color="#005F93" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                    </svg>

                <div class="cpt__items" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <?php while (have_posts()) : the_post();  ?>
                        <a href="#livro<?php echo get_the_id() ?>" class="cpt__post" rel="modal:open">
                            <img
                            src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/286x194' ?>"
                            alt="<?php echo !empty(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE)) ?
                                get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE) :
                                'Capa ' . get_the_title(); ?>"
                            >

                            <h3>  <?php echo mb_substr(get_the_title(), 0, 20, 'UTF-8') . '...'; ?> </h3>
                            <p> 
                                <?php if (has_excerpt()) : ?>
                                    <?php echo get_the_excerpt(); ?>
                                <?php else: ?>
                                    <?php echo mb_substr(get_the_excerpt(), 0, 120, 'UTF-8') . '...'; ?>
                                <?php endif; ?>    
                            </p>
                        </a>


                    <?php endwhile ?>
                </div>
                <?php while (have_posts()) : the_post();  ?>
                    <div id="livro<?php echo get_the_id() ?>" class="modal">
                        <div class="modal__cpt">
                            <img
                            class="modal__cpt-img"
                            src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/286x194' ?>"
                            alt="<?php echo !empty(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE)) ?
                                get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE) :
                                'Capa ' . get_the_title(); ?>"
                            >
                            <div class="modal__cpt-texts">
                                <h3> <?php echo the_title(); ?> </h3>
                                <div class="modal__cpt-sub">
                                    <?php wpautop(the_content()) ?>
                                </div>
                            </div>
                        </div>
                    </div>                    
                <?php endwhile; wp_reset_query();?>
            </div>
        <?php endif; wp_reset_query(); ?>
    </div>
</section>

<section class="cpts">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'podcasts',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
        query_posts($args); 
        if (have_posts()) : ?>
            <div class="cpt">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cpt_icon.svg"/>
                <h2  data-aos="fade-up-right" data-aos-duration="700" data-aos-once="true"> <strong>Podcasts</strong> <br> selecionados </h2>

                <svg xmlns="http://www.w3.org/2000/svg" width="2" height="569" viewBox="0 0 2 569" fill="none">
                        <path d="M1 0V569" stroke="url(#paint0_linear_1143_4990)" stroke-width="2"/>
                        <defs>
                            <linearGradient id="paint0_linear_1143_4990" x1="-7.80652e+13" y1="-41.3491" x2="-7.80652e+13" y2="873.725" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.3125" stop-color="#005F93"/>
                            <stop offset="0.546875" stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.936866" stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.9375" stop-color="#005F93" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                    </svg>

                <div class="cpt__items" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <?php while (have_posts()) : the_post();  ?>
                        <a href="#podcast<?php echo get_the_id() ?>" class="cpt__post" rel="modal:open">
                            <img class="cpt__img__podcast"
                                src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/286x338' ?>"
                                alt="<?php echo !empty(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE)) ?
                                    get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE) :
                                    'Capa ' . get_the_title(); ?>"
                                >

                                <h3> <?php echo mb_substr(get_the_title(), 0, 23, 'UTF-8') . '...'; ?> </h3>
                                <p> 
                                    <?php if (has_excerpt()) : ?>
                                        <?php echo get_the_excerpt(); ?>
                                    <?php else: ?>
                                        <?php echo mb_substr(get_the_excerpt(), 0, 120, 'UTF-8') . '...'; ?>
                                    <?php endif; ?>    
                                </p>
                        </a>
                    <?php endwhile ?>
                </div>
                <?php while (have_posts()) : the_post();  ?>
                    <div id="podcast<?php echo get_the_id() ?>" class="modal">
                        <div class="modal__cpt">
                            <div>
                                <img
                                class="modal__cpt-img"
                                src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/286x194' ?>"
                                alt="<?php echo !empty(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE)) ?
                                    get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE) :
                                    'Capa ' . get_the_title(); ?>"
                                >
                                <?php if (get_field('link_podcast')) : ?>
                                    <a href="<?php echo get_field('link_podcast') ?>" class="button-pages btn-desktop" target="_blank">
                                        Acessar
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                                    </a> 
                                <?php endif; ?>    
                            </div> 
                            <div class="modal__cpt-texts">
                                <h3> <?php echo the_title(); ?> </h3>
                                <div class="modal__cpt-sub">
                                    <?php wpautop(the_content()) ?>
                                </div>
                            </div>
                            <a href="<?php echo get_permalink() ?>" class="button-pages btn-mobile">
                                Acessar
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                            </a> 
                        </div>
                    </div>                    
                <?php endwhile; wp_reset_query();?>
            </div>
        <?php endif; wp_reset_query(); ?>
    </div>
</section>

<section class="cpts cpts--videos">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'videos',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
        query_posts($args); 
        if (have_posts()) : ?>
            <div class="cpt">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cpt_icon.svg"/>
                <h2  data-aos="fade-up-right" data-aos-duration="700" data-aos-once="true"> <strong>Vídeos</strong>  <br> relevantes </h2>

                <svg xmlns="http://www.w3.org/2000/svg" width="2" height="569" viewBox="0 0 2 569" fill="none">
                        <path d="M1 0V569" stroke="url(#paint0_linear_1143_4990)" stroke-width="2"/>
                        <defs>
                            <linearGradient id="paint0_linear_1143_4990" x1="-7.80652e+13" y1="-41.3491" x2="-7.80652e+13" y2="873.725" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.3125" stop-color="#005F93"/>
                            <stop offset="0.546875" stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.936866" stop-color="#005F93" stop-opacity="0"/>
                            <stop offset="0.9375" stop-color="#005F93" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                    </svg>

                <div class="cpt__videos" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <?php while (have_posts()) : the_post();  ?>
                        <a href="#video<?php echo get_the_id() ?>" class="cpt__video" rel="modal:open">
                            <img src="https://img.youtube.com/vi/<?php echo get_field('iframe_youtube') ?>/sddefault.jpg" alt="<?php echo the_title(); ?>" />
                            <h3> <?php echo mb_substr(get_the_title(), 0, 23, 'UTF-8') . '...'; ?>  </h3>
                        </a>
                    <?php endwhile ?>
                </div>
                <?php while (have_posts()) : the_post();  ?>
                    <div id="video<?php echo get_the_id() ?>" class="modal">
                        <div class="modal__video">
                            <iframe width="100%" height="345" src="https://www.youtube-nocookie.com/embed/<?php echo get_field('iframe_youtube') ?>"></iframe>
                            <h3> <?php echo the_title(); ?>  </h3>
                            <div class="modal__video--desc">
                                <?php wpautop(the_content()) ?>
                            </div>
                        </div>
                    </div>                    
                <?php endwhile; wp_reset_query();?>
            </div>
        <?php endif; wp_reset_query(); ?>
    </div>
</section>

<section class="know">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
            <?php echo get_field('title_know'); ?>
        </h2>
        <p data-aos="fade-up" data-aos-duration="800" data-aos-once="true"> 
            <?php echo get_field('subtitle_know'); ?>
        </p>
        <a href="<?php echo get_home_url() ?>/contato" class="button-pages"
        data-aos="fade-up" data-aos-duration="900" data-aos-once="true" >
            Fale com nossos assessores
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
        </a>
    </div>
</section>


<?php get_footer(); ?>