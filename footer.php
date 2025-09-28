    <!-- cta -->
    <div class="side-cta__wrap">
        <a class="side-cta --line" href="<?php echo esc_url(home_url('/')); ?>">LINEで<br>問い合わせ</a>
        <a class="side-cta --mail" href="<?php echo esc_url(home_url('/')); ?>">メールで<br>問い合わせ</a>
    </div>

    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__logoWrap">
                <div class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo-1.png" alt="" width="" height="" loading="lazy">
                </div>
                <div class="footer__snsWrap">
                    <a class="footer__sns" href="<?php echo esc_url(home_url('/')); ?>"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/x-icon.svg" alt="" width="" height="" loading="lazy">
                    </a>
                    <a class="footer__sns" href="<?php echo esc_url(home_url('/')); ?>"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon.svg" alt="" width="" height="" loading="lazy">
                    </a>
                    <a class="footer__sns" href="<?php echo esc_url(home_url('/')); ?>"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-icon.svg" alt="" width="" height="" loading="lazy">
                    </a>
                </div>
            </div>
            <ul class="footer__menu">
                <li class="footer__list"><a href="<?php echo esc_url(home_url('/')); ?>">会社情報</a></li>
                <li class="footer__list"><a href="<?php echo esc_url(home_url('/')); ?>">利用規約</a></li>
                <li class="footer__list"><a href="<?php echo esc_url(home_url('/')); ?>">プライバシーポリシー</a></li>
                <li class="footer__list"><a href="<?php echo esc_url(home_url('/')); ?>">キャンペーンについて</a></li>
            </ul>
        </div>
        <p class="footer__copyright">copyright</p>
    </footer>

    <?php wp_footer(); ?>
    
</body>
</html>