<?php
/*
    Template name: Contato
*/

get_header(); ?>

<section class="content__blog contact-form">
    <video width="100%" height="1080"  autoplay muted class="mini-banner__video mini-banner__video--contact">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Wave_home.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
   <div class="container">
        <div class="contact-form__items">
            <div class="contact-form__title" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                <h1> <?php echo get_field('title_contact') ?> </h1>
                <p class="contact__sub">
                Preencha o formulário, ou se preferir, entre em contato via WhatsApp e agende uma visita.
                </p>
            </div>
            <div class="contact-form__shortcode" data-aos="fade-left" data-aos-duration="900" data-aos-once="true">
                <?php echo do_shortcode( '[contact-form-7 id="5fb8233" title="Formulário de contato 1"]' ); ?>
                <p class="politic-info">
                    Seus dados não serão utilizados para envio de qualquer tipo de SPAM. Ao prosseguir, 
                    você declara ter lido e estar ciente das condições de tratamento dos seus dados e do 
                    seu consentimento conforme descrito em nossa <a href="<?php echo get_home_url() ?>/politica-de-privacidade">política de privacidade.</a>
                </p>
                <a href="#success_form" rel="modal:open" class="success_form-btn"></a>
            </div>
        </div>
   </div>

   <div id="success_form" class="modal">
        <div class="success__gif"></div>
        <h2>Agradecemos sua mensagem!</h2>
        <p> Em breve nossos assessores entrarão <br> em contato para te auxiliar. </p>
    </div> 

</section>

<?php get_footer(); ?>