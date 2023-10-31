<div class="contact">
    <?php if (!empty(get_option('opcoes_main')['telefones'])): ?>
        <?php foreach (get_option('opcoes_main')['telefones'] as $telefone ) : ?>
            <div class="contact__phone">
                <a href="tel:<?php echo $telefone['telefone_input']; ?>" class="footer__item--info">
                    <?php echo $telefone['telefone_input']; ?>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (!empty(get_option('opcoes_main')['emails'])): ?>
        <?php foreach (get_option('opcoes_main')['emails'] as $email ) : ?>
            <div class="contact__email">
                <a href="mailto:<?php echo $email['email_input']; ?>" class="footer__item--info">
                    <?php echo $email['email_input']; ?>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>