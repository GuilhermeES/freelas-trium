<?php get_header(); ?>
 
<section class="mini-banner">
    <video width="100%" height="1080" loop autoplay muted class="mini-banner__video">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/Circle.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="mini-banner__title">
        <div class="container">
            <h1> Nenhuma página <br> encontrada </h1>
        </div>
    </div>
</section>

<section class="content-404">
    <div class="container">
        <div class="error-404">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error.png" class="error-img-desktop" alt="Página não encontrada"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error-mobile.png" class="error-img-mobile" alt="Página não encontrada"/>
            <div class="error__text">
                <h2> 404 </h2>
                <p> Sem conteúdo </p>
                <a href="<?php echo get_home_url() ?>" class="btn-404"> Voltar para home </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>