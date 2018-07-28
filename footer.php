</div><!-- #content -->

	        <footer class="footer x-footer">
            <div class="ui-container">
                <div class="footer__bar footer-bar">

                    <div class="footer-bar__column">
                        <a
                        <?php // custom header tel
                        echo 'href="tel:+7' , get_field('header_tel','option') , '"'; ?>
                        class="ui-link ui-link--reverse footer-bar__link">+7
                        <?php the_field('header_tel', 'option'); ?>
                        </a>
                    </div>
                    <div class="footer-bar__column">
                        <a
                        <?php // custom header email
                        echo 'href="mailto:' , get_field('header_email','option') , '"' ; ?> class="uui-link ui-link--reverse footer-bar__link"> <?php the_field('header_email','option'); ?>
                        </a>
                    </div>

                    <div class="footer-bar__column">
                        <div class="footer-bar__copyright">
                        <?php // custom header copyright
                        the_field('header_copyright','option') ?>
                        </div>
                    </div>

                </div>

            </div>
        </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
