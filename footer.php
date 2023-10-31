    
    <footer class="footer">
        <div class="container">
           <div class="footer__top">
                <div class="footer__logo">
                    <img src="<?php echo get_option('opcoes_main')['logo_footer'] ?>" alt="Logo Trium | XP">
                    <a href="<?php echo get_option('opcoes_main')['link_global'] ?>" class="main-button--footer" target="_blank">
                        Invista
                    </a>
                </div>  
                <div class="footer__menu footer__menu-1">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'theme_location' => 'menu_footer_1', ));
                    ?>
                </div>
                <div class="footer__menu footer__menu-2">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'theme_location' => 'menu_footer_2', ));
                    ?>
                </div>
                <div class="footer__divisor-mobile footer__divisor-mobile--top"></div>
                <div class="footer__info">
                    <?php include('components/contact.php'); ?> 
                    <?php if (!empty(get_option('opcoes_main')['endereco'])): ?>
                        <div class="footer__address">
                            <p>
                                <a href="<?php echo get_option('opcoes_main')['address_link'] ?>" target="_blank">
                                    <?php echo get_option('opcoes_main')['endereco'] ?>
                                </a>
                            </p>
                        </div>
                    <?php endif; ?>
                    <div class="footer__social--mobile">
                        <?php include('components/social-media.php'); ?>
                    </div>  
                </div> 
                <div class="footer__divisor-mobile footer__divisor-mobile--bot"></div>
           </div>
           <div class="footer__mid">
              <div class="footer__politcs">
                <a href="<?php echo get_home_url() ?>/politica-de-privacidade">
                    Política de privacidade
                </a>
                <a href="<?php echo get_home_url() ?>/politica-de-cookies">
                    Política de cookies
                </a>
              </div>   
              <div class="footer__social">
                <?php include('components/social-media.php'); ?>
              </div>     
           </div>
           <div class="footer__divisor"></div>
           <div class="footer__copy">
                <?php echo wpautop( get_option('opcoes_main')['copy'] ) ?>
           </div>
           <div class="footer__site">
            Copyright © TRIUM <?php echo date('Y'); ?>. 
           </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js" integrity="sha512-jEnuDt6jfecCjthQAJ+ed0MTVA++5ZKmlUcmDGBv2vUI/REn6FuIdixLNnQT+vKusE2hhTk2is3cFvv5wA+Sgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.6.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    
    
    <?php wp_footer() ?>
    </body>
</html>