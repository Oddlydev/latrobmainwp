<?php
/**
 * The header for our theme
 *
 * @package latrobeweb
 */

$nav_items = latrobeweb_get_menu_items( 'menu-1' );
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'latrobeweb' ); ?></a>

	<header id="masthead" class="border-b border-gray-200 bg-gradient-1 text-white shadow-md">
		<div class="px-4 py-4 lg:px-12 lg:py-3">
			<div class="flex items-center justify-between gap-4 lg:hidden">
				<?php latrobeweb_site_brand( array( 'title' => 'PCAT', 'subtitle' => 'Palliative Care Assessment Tool', 'logo_width_class' => 'w-[51px]' ) ); ?>

				<button
					type="button"
					class="inline-flex h-11 w-11 items-center justify-center text-zinc-200"
					aria-label="<?php esc_attr_e( 'Open menu', 'latrobeweb' ); ?>"
					aria-expanded="false"
					aria-controls="mobile-menu"
					data-mobile-menu-toggle
				>
					<span class="la-menu-icon" data-menu-icon="open" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M3.99902 11.9969H19.9949" stroke="#E4E4E7" stroke-width="1.99948" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M3.99902 5.99841H19.9949" stroke="#E4E4E7" stroke-width="1.99948" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M3.99902 17.9954H19.9949" stroke="#E4E4E7" stroke-width="1.99948" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</span>
					<span class="hidden" data-menu-icon="close" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M17.9954 5.99841L5.99854 17.9953" stroke="#E4E4E7" stroke-width="1.99948" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M5.99854 5.99841L17.9954 17.9953" stroke="#E4E4E7" stroke-width="1.99948" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</span>
				</button>
			</div>

			<div class="hidden items-center justify-between gap-4 lg:flex">
				<?php latrobeweb_site_brand( array( 'title' => 'PCAT', 'subtitle' => 'Palliative Care Assessment Tool', 'logo_width_class' => 'w-[51px]' ) ); ?>

				<div class="flex items-center lg:gap-2">
					<nav class="flex items-center gap-6" aria-label="<?php esc_attr_e( 'Main Navigation', 'latrobeweb' ); ?>">
						<?php foreach ( $nav_items as $item ) : ?>
							<a class="body-base-500 border-b border-transparent text-zinc-200 transition-[border-color] hover:border-brand-1" href="<?php echo esc_url( $item['url'] ); ?>" data-nav-link>
								<?php echo esc_html( $item['label'] ); ?>
							</a>
						<?php endforeach; ?>
					</nav>
					<span class="h-6 w-px bg-divider-light lg:ml-4" aria-hidden="true"></span>
                                        <?php latrobeweb_component( 'button', array( 'href' => LATROBEWEB_LOGIN_URL, 'label' => 'Access Tool', 'variant' => 'primary-dark', 'class_name' => 'px-4 py-2.5 whitespace-nowrap', 'target' => '_blank', 'rel' => 'noreferrer' ) ); ?>
				</div>
			</div>
		</div>

                <div id="mobile-menu" class="border-ink-faint shadow-mobile-menu hidden border-b bg-gray-900 lg:hidden">
			<div class="px-4 py-4">
				<div class="flex flex-col gap-5">
					<nav class="flex flex-col" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'latrobeweb' ); ?>">
						<?php foreach ( $nav_items as $item ) : ?>
                                                        <a class="body-base-500 block w-full border-b border-zinc-600 py-4 text-left whitespace-nowrap text-zinc-200 transition-colors duration-200 hover:border-brand-1" href="<?php echo esc_url( $item['url'] ); ?>" data-nav-link>
								<?php echo esc_html( $item['label'] ); ?>
							</a>
						<?php endforeach; ?>
					</nav>

                                        <?php latrobeweb_component( 'button', array( 'href' => LATROBEWEB_LOGIN_URL, 'label' => 'Access Tool', 'variant' => 'primary-dark', 'class_name' => 'px-4 py-2.5 whitespace-nowrap', 'target' => '_blank', 'rel' => 'noreferrer' ) ); ?>
				</div>
			</div>
		</div>
	</header>

	<div id="content">
