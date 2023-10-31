<div class="social">
    <div class="social__icons">
        <?php if (!empty(get_option('opcoes_main')['linkedin'])): ?>
            <a href="<?php echo get_option('opcoes_main')['linkedin'] ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-linkedin.svg"/>
            </a>
        <?php endif; ?>
        <?php if (!empty(get_option('opcoes_main')['instagram'])): ?>
            <a href="<?php echo get_option('opcoes_main')['instagram'] ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-instagram.svg"/>
            </a>
        <?php endif; ?>
        <?php if (!empty(get_option('opcoes_main')['facebook'])): ?>
            <a href="<?php echo get_option('opcoes_main')['facebook'] ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-facebook.svg"/>
            </a>
        <?php endif; ?>
        <?php if (!empty(get_option('opcoes_main')['emails'])): ?>
            <?php foreach (get_option('opcoes_main')['emails'] as $email ) : ?>
                <a href="mailto:<?php echo $email['email_input']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg"/>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>