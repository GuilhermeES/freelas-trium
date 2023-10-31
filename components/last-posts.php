<section class="last-posts" data-aos="fade-up" data-aos-duration="900" data-aos-once="true">
    <div class="last-posts-items">
    <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 9,
        );
        query_posts($args); 
        if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();  ?>
                <a href="<?php echo get_permalink() ?>">
                    <img
                        class="blog__firt-img"
                        src="<?php echo !empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/1920x1080' ?>"
                        alt="<?php echo !empty(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE)) ?
                            get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE) :
                            'Imagem do post ' . get_the_title(); ?>"
                    >
                    <div class="blog__first-text">
                        <span class="blog__first-carta">Carta mensal</span>
                        <h3>  <?php echo mb_substr(get_the_title(), 0, 35, 'UTF-8') . '...'; ?> </h3>
                        <div class="blog__first-info">
                            <?php if (!empty(get_field('nome_autor_alternativo')) && !empty(get_field('img_autor_alternativo')) ): ?>
                                por <strong> <?php echo get_field('nome_autor_alternativo'); ?> </strong> 
                            <?php else: ?>
                                por <strong> <?php echo get_the_author(); ?> </strong>  
                            <?php endif; ?>
                        </div>
                        <div class="blog__first-info blog__first-info--date">
                            <?php echo get_the_date('d/m/Y'); ?>
                        </div>
                    </div>
                </a>
            <?php endwhile ?>
        <?php endif; wp_reset_query(); ?>
    </div>
    <div class="container">
        <a href="<?php echo get_home_url() ?>/publicacoes" class="geral-link-pub">
            Ver todos
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" class="faq__arrow"  alt="Seta indicadora">
        </a>
    </div>
</section>