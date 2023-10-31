<aside class="blog__aside">
    <div class="blog__aside--position"  data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
        <h2> Publicações <strong>recentes</strong> </h2>
        <div class="blog__aside-list">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 6,
            );
            query_posts($args); 
            if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();  ?>
                    <article class="article__aside" >
                        <a href="<?php echo get_permalink() ?>">
                            <div class="article__aside-date">
                                <div class="day">
                                    <?php echo substr(get_the_date('d/m/Y'), 0, 2); ?>
                                </div>
                                <div class="mounth-year">
                                    <?php echo get_the_date('M'); ?> / <?php echo get_the_date('y'); ?>
                                </div>
                            </div>
                            <div class="article__aside-name">
                                <h3> <?php echo the_title(); ?> </h3>
                                <div class="article__aside-autor">

                                    <?php if (!empty(get_field('nome_autor_alternativo')) && !empty(get_field('img_autor_alternativo')) ): ?>
                                        por <strong> <?php echo get_field('nome_autor_alternativo'); ?> 
                                    <?php else: ?>
                                        por <strong> <?php echo get_the_author(); ?> </strong> 
                                    <?php endif; ?>

                                </div>
                            </div>
                        </a>
                    </article>
                <?php endwhile ?>
            <?php endif; wp_reset_query(); ?>
        </div>
    </div>
</aside>