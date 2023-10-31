<section class="banner ">
    <video width="100%" height="1080" autoplay muted class="banner__video">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Wave_home.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>  
    <div class="round_blue round_blue_mobile"></div>
    <div class="container">
        <div class="banner__infos">
            <div class="banner__text">
                <h1 data-aos="fade-right" data-aos-duration="600" data-aos-once="true" >
                    <?php echo get_field('title') ?>
                </h1>
                <p class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <?php echo get_field('subtitle') ?>
                </p>
                <a href="<?php echo get_home_url() ?>/contato" class="button-pages" 
                data-aos="fade-right" data-aos-duration="700" data-aos-once="true"
                        >
                    Fale com a <strong>Trium</strong>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-btn.svg"/>
                </a>  
                <div class="arrow_home arrow"></div>
            </div>
            <div class="banner__imgs">
                <div class="round_blue round_blue_desktop"></div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/layer_1.svg" class="banner__layer-1" alt="Layer"
                data-aos="fade-up-right" data-aos-duration="600" data-aos-once="true"
                >

                <img src=" <?php echo get_field('image') ?>" class="banner__img"
                data-aos="fade-up" data-aos-duration="400" data-aos-once="true"
                >

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/layer_2.svg" class="banner__layer-2" alt="Layer"
                data-aos="fade-up-left" data-aos-duration="600" data-aos-once="true"
                >

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line-banner.svg" class="banner__line"
               
                >
            </div>
        </div>
    </div>
</section>