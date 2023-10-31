<?php if (!empty(get_field('title_card_home'))): ?>
    <section class="card__home">
        <div class="container">
            <div class="card__home__bg">
                <div class="card__home__img">
                    <img src="<?php echo get_field('img_card_home'); ?>" alt="Pessoa sorrindo feliz" class="card__home__img--desktop">
                </div>
                <div class="card__home__text">
                    <h2 data-aos="fade-left" data-aos-duration="600" data-aos-once="true"> <?php echo get_field('title_card_home'); ?> </h2>
                    <a href="<?php echo get_home_url() ?>/sobre" class="button-pages"
                    data-aos="fade-left" data-aos-duration="900" data-aos-once="true">
                        <strong>Saiba mais sobre nossos assessores</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                    </a>  
                </div>
            </div>
        </div>
    </section>
<?php endif; ?> 