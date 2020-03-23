</div>
<footer class="main-footer">
    <div class="content-footer">

        <?php
        $args = array(
            'theme_location' => 'footer-menu',
            'container' => 'nav',
            'container_class' => 'bottom-menu',
            'menu_class' => 'b-menu__list',
        );

        wp_nav_menu( $args );

        ?>

        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool <?php echo date('Y') ?></a></div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>