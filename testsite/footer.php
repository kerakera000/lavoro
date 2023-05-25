
<footer>
    <div class="footer">
        <div class="footer__title">
            <div class="footer__title--img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Footer-logo.png" alt="Business-logo">
            </div>
            <p class="footer__title--text">ITから「楽しい」をつくる</p>
        </div>

        <div class="footer__content">
            <div class="footer__content--pattern1">
                <a href="<?php echo esc_url(home_url('/aboutpage')); ?>" class="footer-pattern1-title">ABOUT</a>
                <div class="footer-pattern1-col">
                    <p>―</p>
                    <a href="<?php echo esc_url(home_url('/aboutpage')); ?>">代表挨拶</a>
                </div>
                <div class="footer-pattern1-col">
                    <p>―</p>
                    <a href="<?php echo esc_url(home_url('/aboutpage')); ?>">企業理念</a>
                </div>
                <div class="footer-pattern1-col">
                    <p>―</p>
                    <a href="<?php echo esc_url(home_url('/aboutpage')); ?>">会社概要</a>
                </div>
            </div>

            <div class="footer__content--pattern1">
                <a href="<?php echo esc_url(home_url('/businesspage')); ?>" class="footer-pattern1-title">BUSINESS</a>
            </div>

            <div class="footer__content--pattern1">
                <a href="<?php echo esc_url(home_url('/workspage')); ?>" class="footer-pattern1-title">WORKS</a>
            </div>

            <div class="footer__content--pattern2">
                <a href="<?php echo esc_url(home_url('/newspage')); ?>" class="footer-pattern2-text">NEWS</a>
                <a href="<?php echo esc_url(home_url('/recruitpage')); ?>" class="footer-pattern2-text">RECURUIT</a>
                <a href="<?php echo esc_url(home_url('/contactpage')); ?>" class="footer-pattern2-text">CONTACT</a>
            </div>
        </div>
    </div>
    <div class="inc">
        <p>© 2020 LAVORO inc.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>