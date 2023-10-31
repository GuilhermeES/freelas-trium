<?php
/*
    Template name: Publicacoes
*/

get_header(); ?>

<section class="content__blog">
    <div class="container">
        <div class="content__main">
            <div class="content__list">
                <div class="blog__title" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                    <h1> <?php echo get_field('title') ?> </h1>
                </div>
                <div class="round-yellow">
                    <div class="round-yellow-json"></div>
                </div>
                <div class="blog__firt" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
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
                                    <h3> <?php echo the_title(); ?> </h3>
                                    <div class="blog__first-info">
                                        <?php if (!empty(get_field('nome_autor_alternativo')) && !empty(get_field('img_autor_alternativo')) ): ?>
                                            por <strong> <?php echo get_field('nome_autor_alternativo'); ?> • </strong>  <?php echo the_date('d/m/Y'); ?>
                                        <?php else: ?>
                                            por <strong> <?php echo get_the_author(); ?> • </strong>  <?php echo the_date('d/m/Y'); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile ?>
                    <?php endif; wp_reset_query(); ?>
                </div>
                <div class="blog__aside--mobile">
                    <?php include('components/aside-blog.php'); ?>
                </div>
                <div class="blog">
                    <div class="blog__list">
                        <?php echo do_shortcode( '[ajax_load_more post_type="post" posts_per_page="6" button_label="Carregando mais publicações"]' ); ?>
                    </div>  
                </div>
            </div>
            <div class="blog__aside--desktop">
                <?php include('components/aside-blog.php'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>