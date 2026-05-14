<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package latrobeweb
 */

get_header();
?>

<main id="main" class="grid min-h-[calc(100vh-220px)] place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
	<div class="text-center">
		<p class="eyebrow text-brand-1"><?php esc_html_e( '404', 'latrobeweb' ); ?></p>
		<h1 class="mt-4 font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black sm:text-5xl lg:text-[2.25rem] lg:leading-[110%]">
			<?php esc_html_e( 'Page not found', 'latrobeweb' ); ?>
		</h1>
		<p class="body-base-400 mx-auto mt-6 max-w-xl text-gray-500 lg:text-lg">
			<?php esc_html_e( 'Sorry, we couldn’t find the page you’re looking for.', 'latrobeweb' ); ?>
		</p>
		<div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row sm:gap-6">
			<?php
			latrobeweb_component(
				'button',
				array(
					'href'          => home_url( '/' ),
					'label'         => 'Go back home',
					'variant'       => 'primary-light-icon-left',
                                        'class_name'    => 'px-4 py-2.5',
					'icon'          => latrobeweb_get_icon_markup( 'arrow-left' ),
					'icon_position' => 'before',
				)
			);
			latrobeweb_component(
				'button',
				array(
					'href'       => home_url( '/#contact' ),
					'label'      => 'Contact support',
					'variant'    => 'secondary-light',
                                        'class_name' => 'px-4 py-2.5',
				)
			);
			?>
		</div>
	</div>
</main>

<?php
get_footer();
