<?php 
$feat_image = wp_get_attachment_url( get_post_thumbnail_id() ); 
get_header(); 
?>

<section class="content__blog content__blog--single">
    <div>
    
        <div class="single__content " data-aos="fade-down" data-aos-duration="700" data-aos-once="true">
            <div class="single__content--top">
                <div class="container">
                    <div class="single__bread">
                        <a href="<?php echo get_home_url() ?>">
                            Trium /
                        </a>
                        <a href="<?php echo get_home_url() ?>/publicacoes">
                            Publicações /
                        </a>
                        <a href="<?php echo get_home_url() ?>/publicacoes">
                            Carta Mensal 
                        </a>
                    </div>

                    <div class="single__info">
                        <div class="single__info-date" data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                            <div class="single__info-date--day">
                                <?php echo substr(get_the_date('d/m/Y'), 0, 2); ?>
                            </div>
                            <div class="single__info--mounth">
                                <?php echo get_the_date('M'); ?> / <?php echo get_the_date('y'); ?>
                            </div>
                        </div>
                        <div class="single__title--text" data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                            <h1> <?php echo get_the_title() ?> </h1>
                            <div class="single__autor">
                                <?php if (!empty(get_field('nome_autor_alternativo')) && !empty(get_field('img_autor_alternativo')) ): ?>
                                    por <strong> <?php echo get_field('nome_autor_alternativo'); ?> </strong>   
                                <?php else: ?>
                                    por <strong> <?php echo get_the_author(); ?> </strong>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single__thumb">
                <?php echo get_the_post_thumbnail(); ?>
            </div>

            <?php if (!empty(get_field('cmb_post_group'))): ?>
                <div class="single__content single__content--main">
                    <?php foreach (get_field('cmb_post_group') as $content ) : ?>
                        
                        <div class="single__grid">
                            <div class="single__left" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                                <?php if (!empty($content['esquerdo'])): ?>
                                    <img src="<?php echo $content['esquerdo']; ?>" alt=""/>
                                <?php endif; ?>       
                                <?php if (!empty($content['esquerdo_info'])): ?>
                                    <p>
                                        <?php echo wpautop($content['esquerdo_info']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                                            

                            <?php if (!empty($content['conteudo'])): ?>
                                <div class="single__content__text">
                                    <?php echo wpautop($content['conteudo']); ?>
                                </div>
                            <?php endif; ?>

                        
                            <div class="single__right" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                                <?php if (!empty($content['direito'])): ?>
                                    <img src="<?php echo $content['direito']; ?>" alt=""/>
                                <?php endif; ?>

                                <?php if (!empty($content['direito_info'])): ?>
                                    <p>
                                        <?php echo wpautop($content['direito_info']); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                                                                    
                    <?php endforeach; wp_reset_query(); ?>
                </div>
            <?php endif; ?>

            <div class="container">
                <div class="single__autor-single" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <?php if (!empty(get_field('nome_autor_alternativo')) && !empty(get_field('img_autor_alternativo')) ): ?>
                        <div class="single__autor--infos">
                            <div class="single__autor--img">
                                <img src="<?php echo get_field('img_autor_alternativo'); ?>" class="avatar">
                            </div>
                            <div class="single__autor--infos-post">
                                <div class="single__autor--data"> <?php echo the_date('d/m/Y'); ?>  </div>
                                <div class="single__autor--title"> <?php echo get_the_title(); ?>  </div>
                                <div class="single__autor--name"> <strong> <?php echo get_field('nome_autor_alternativo'); ?> </strong> </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="single__autor--infos">
                            <div class="single__autor--img">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                <?php $author_id = get_the_author_meta('ID'); ?>
                                <a href="<?php echo get_user_meta( $author_id, 'linkedin' , true ); ?>" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/autor-linkedin-single.svg" alt="Linkedin">
                                </a>
                            </div>
                            <div class="single__autor--infos-post">
                                <div class="single__autor--data"> <?php echo the_date('d/m/Y'); ?>  </div>
                                <div class="single__autor--title"> <?php echo get_the_title(); ?>  </div>
                                <div class="single__autor--name"> Por <strong><?php echo get_the_author(); ?></strong> </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="single__share" data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                    <div class="single__share-incons">
                        <div class="share">
                            Compartilhe:
                        </div>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo home_url($_SERVER['REQUEST_URI']); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-facebook.svg" alt="Facebook">
                        </a>
                        <a href="mailto:?body=<?php echo home_url($_SERVER['REQUEST_URI']); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-mail.svg" alt="E-mail">
                        </a>
                        <a href="https://api.whatsapp.com/send?text=<?php echo home_url($_SERVER['REQUEST_URI']); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-whatsapp.svg" alt="Whatsapp">
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo home_url($_SERVER['REQUEST_URI']); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-linkedin.svg" alt="Linkedin">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info__last-posts info__last-posts--single" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
    <div class="container">
        <div class="info__last-posts-items">
            <h2>
                <strong>Veja</strong> também
            </h2>
            <a href="<?php echo get_home_url() ?>/publicacoes">
                Ver todos
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" class="faq__arrow" alt="Seta indicadora">
            </a>
        </div>     
    </div>
</section>

<?php include_once('components/last-posts.php'); ?>

<?php get_footer(); ?>