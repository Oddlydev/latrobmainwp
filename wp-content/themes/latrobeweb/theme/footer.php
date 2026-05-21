<?php
/**
 * The template for displaying the footer
 *
 * @package latrobeweb
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="bg-gradient-1 border-t border-gray-200">
		<div class="px-6 py-12 lg:mx-auto lg:px-12 lg:py-12">
			<div class="flex flex-col gap-8 md:gap-8 lg:gap-8">
				<div class="flex flex-col items-center gap-10 text-center md:gap-12 lg:flex-row lg:items-center lg:justify-between lg:gap-5 lg:text-left">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="la-site-brand inline-flex items-center gap-3 self-center text-left lg:self-auto">
						<img
							src="<?php echo esc_url( latrobeweb_asset_uri( 'images/logo-light.svg' ) ); ?>"
							alt="La Trobe University"
							class="h-auto shrink-0 w-[69px]"
						/>
						<div class="flex flex-col text-left">
							<p class="font-display text-base font-semibold leading-4 text-zinc-50">
								<?php echo esc_html( 'La Trobe University' ); ?>
							</p>
							<p class="font-display mt-1 text-xs font-medium leading-4 uppercase tracking-wide text-gray-400">
								<?php echo esc_html( 'PCAT Research Programme' ); ?>
							</p>
						</div>
					</a>

					<nav class="w-full md:w-auto" aria-label="<?php esc_attr_e( 'Footer Menu', 'latrobeweb' ); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'container'      => false,
								'menu_class'     => 'flex w-full flex-col items-center gap-y-4 md:w-auto md:flex-row md:flex-wrap md:justify-center md:gap-x-5 md:gap-y-3 md:pb-3 lg:pb-0 lg:justify-end lg:gap-x-6',
								'fallback_cb'    => false,
								'link_before'    => '<span class="body-base-400 text-footer-link inline-block w-full border-b border-transparent py-0 text-center whitespace-nowrap transition-colors duration-200 hover:border-brand-1 md:w-auto lg:body-base-500 lg:text-zinc-200">',
								'link_after'     => '</span>',
							)
						);
						?>
					</nav>
				</div>

				<div class="flex flex-col gap-4 border-t border-footer-divider-soft pt-6 text-center lg:flex-row lg:items-center lg:justify-between lg:gap-3 lg:pt-8 lg:text-left">
					<p class="body-base-400 text-footer-body lg:body-base-500">
						<?php echo esc_html( '© ' . wp_date( 'Y' ) . ' La Trobe University - PCAT - Palliative Care Assessment Tool' ); ?>
					</p>

					<p class="font-sans text-base leading-6 font-normal tracking-normal text-[rgba(250,250,252,0.50)]">
						<?php esc_html_e( 'Built by', 'latrobeweb' ); ?>
						<a href="https://oddly.global/" target="_blank" rel="noopener noreferrer" class="inline-block border-b border-transparent font-sans text-base leading-6 font-semibold tracking-normal text-[rgba(250,250,252,0.70)] transition-colors duration-200 hover:border-brand-1">ODDLY</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
