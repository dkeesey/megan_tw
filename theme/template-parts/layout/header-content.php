<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Megan_tw
 */
?>

<header id="masthead" class="bg-magenta text-white flex justify-around items-center p-4 align-center">
	<div class="text-lg font-bold hover:underline">
			<?php if ( is_front_page() ) : ?>
					<a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline">
							<?php bloginfo( 'name' ); ?>
					</a>
			<?php else : ?>
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="no-underline"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
	</div>

	<nav id="site-navigation" class="hidden lg:block" aria-label="<?php esc_attr_e( 'Main Navigation', 'megan_tw' ); ?>">
			
			<?php
			if ( has_nav_menu( 'menu-1' ) ) {
					wp_nav_menu(
							array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
							)
					);
			}
			?>
	</nav><!-- #site-navigation -->

<div class="block lg:hidden">
    <button id="mobile-menu-toggle" aria-controls="mobile-menu" aria-expanded="false" class="hover:underline flex items-center justify-center">
			<svg viewBox="0 0 50 40" width="20" height="20" class="mr-2">
				<rect class="line" width="50" height="5" fill="white"></rect>
				<rect class="line" y="15" width="50" height="5" fill="white"></rect>
				<rect class="line" y="30" width="50" height="5" fill="white"></rect>
			</svg>
			<?php esc_html_e( 'Therapy Approaches', 'megan_tw' ); ?>
    </button>
</div>

</header><!-- #masthead -->

<div id="mobile-menu" class="bg-magenta no-underline">
    <ul id="menu-primary-container" class="flex flex-col py-2 px-4">
        <?php
        if ( has_nav_menu( 'menu-1' ) ) {
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'mobile-primary-menu',
                    'items_wrap'     => '%3$s',
										'container' 		 => '',
										'item_spacing' 	 => 'discard',
                )
            );
        }
        ?>
    </ul>
</div>
