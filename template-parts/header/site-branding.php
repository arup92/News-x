<?php
/**
 * Displays header site branding
 *
 */

?>
<div class="site-branding">
    <h1 class="site-title">
        <?php
			if ( !get_theme_mod( 'news_x_default_logo_setting' ) ) {
		?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		<?php
			} else {
		?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'news_x_default_logo_setting' ) ); ?>" alt="Logo" /></a>
		<?php
			}
		?>
    </h1>
</div><!-- /.site-branding -->