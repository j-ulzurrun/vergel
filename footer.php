<footer>
	<div class="container">
				<?php
            wp_nav_menu( array(
                'menu'              => 'secondary',
                'theme_location'    => 'secondary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'footer-menu',
        		'container_id'      => 'menu-secondary',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>


        <div class="redsocial">

            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?>


             <?php endif; ?>

        </div>

	</div>
   
</footer>

<?php wp_footer() ?>

</body>
</html>