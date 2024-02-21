<?php
/*
    Template name: Trium
*/

get_header(); ?>

<section class="trium">
    <div class="container">
        <div class="trium__items">
            <div class="trium__text">
                <div class="trium__text--up" data-aos="fade-right" data-aos-duration="600" data-aos-once="true">
                    <?php echo get_field('title_up') ?>
                </div>
                <h1 data-aos="fade-right" data-aos-duration="700" data-aos-once="true"> <?php echo get_field('title') ?> </h1>
                <a href="<?php echo get_home_url() ?>/assessoria" class="button-pages" 
                data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    Conheça nossos <strong>serviços</strong>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                </a> 
            </div>
            <div class="trium__imgs">
                <div class="rounded_blue_trium" ></div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/layer_trium_1.svg" class="banner__trium-1" lt="Layer"
                data-aos="fade-up-left" data-aos-duration="700" data-aos-once="true">

                <img src=" <?php echo get_field('Imagem') ?> " class="banner__trium-img"
                data-aos="fade-up" data-aos-duration="600" data-aos-once="true"/>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/layer_trium_2.svg" class="banner__trium-2" alt="Layer"
                data-aos="fade-up-right" data-aos-duration="700" data-aos-once="true">
            </div>
        </div>
        <div class="arrow_trium"></div>
    </div>
</section>

<section class="texts__1">
    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" width="207" height="2" viewBox="0 0 207 2" fill="none">
            <path d="M-209 1L207 0.999964" stroke="url(#paint0_linear_272_8256)" stroke-width="2"/>
            <defs>
                <linearGradient id="paint0_linear_272_8256" x1="73.1963" y1="0.45702" x2="278.808" y2="-0.0806896" gradientUnits="userSpaceOnUse">
                <stop stop-color="#EACF86"/>
                <stop offset="1" stop-color="#EACF86" stop-opacity="0"/>
                </linearGradient>
            </defs>
        </svg>
        <div class="texts__1-item">
            <div class="texts__1-text">
                <h2 data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                    <?php echo get_field('title_trium_about') ?>
                </h2>
                <div class="texts__1-subtitle" data-aos="fade-down" data-aos-duration="700" data-aos-once="true">
                    <?php echo wpautop( get_field('text_trium_about') ) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty(get_field('cmb_contributors_group'))): ?>
    <section class="contributors">
        <?php foreach (get_field('cmb_contributors_group') as $contributor ) : ?>
            <div class="contributors-item" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                <img class="contributors-img" 
                src="<?php echo $contributor['image_contributor']; ?>" alt="<?php echo $contributor['name_contributor']; ?>"/>

                <?php if (!empty($contributor['linkedin_contributor'])): ?>
                    <a href="<?php echo $contributor['linkedin_contributor']; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-colaborador.svg" class="contributors-linkedin" 
                        alt="Linkedin">
                    </a>
                <?php endif; ?>

                <div class="contributors-name"> <?php echo $contributor['name_contributor']; ?> </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/layer-colaborador.svg" class="contributors-layer" 
                alt="Layer">
            </div>
        <?php endforeach; wp_reset_query(); ?>
        <div class="contributors-btn">
        </div>
    </section>
    <div class="contriburts-btn">
        <a href="https://assessoria.triumcapital.com.br/invista-ja" class="button-pages" target="_blank">
            Comece a <strong>investir</strong>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
        </a> 
    </div>
<?php endif; ?>

<section class="texts__2">
    <div class="container">
        <div class="texts__2-item">
            <div class="texts__2-text">
                <h2 data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                    <?php echo get_field('title_trium_text') ?>
                </h2>
                <div class="texts__2-subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <?php echo get_field('text_trium_text') ?>
                </div>
            </div>
            <div class="infos">
                <div class="card nps" data-aos="fade-up-left" data-aos-duration="700" data-aos-once="true">
                    <div class="nps">
                        <h4> NPS: <mark> <?php echo get_option('opcoes_main')['title_nps'] ?> </mark> </h4>
                    </div>
                    <div class="infos--sub">
                        Net Promoter Score
                    </div>
                </div>
                <div class="card custodia" data-aos="fade-up-left" data-aos-duration="900" data-aos-once="true">
                    <div class="nps">
                        <h4> <?php echo get_option('opcoes_main')['title_sob'] ?> </h4>    
                    </div>
                    <div class="infos--sub">
                        sob custódia
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>