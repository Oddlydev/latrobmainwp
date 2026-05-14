<?php
/**
 * The template for displaying the footer
 *
 * @package latrobeweb
 */

$footer_links = latrobeweb_get_footer_menu_items();
?>

	</div><!-- #content -->

        <footer id="colophon" class="bg-gradient-1 border-t border-gray-200">
		<div class="px-6 py-12 lg:mx-auto lg:max-w-[1295px] lg:px-0 lg:py-12">
			<div class="flex flex-col gap-8 md:gap-8 lg:gap-8">
				<div class="flex flex-col items-center gap-10 text-center md:gap-12 lg:flex-row lg:items-center lg:justify-between lg:gap-5 lg:text-left">
					<?php latrobeweb_site_brand( array( 'title' => 'La Trobe University', 'subtitle' => 'PCAT Research Programme', 'show_divider' => false, 'logo_width_class' => 'w-[69px]' ) ); ?>

					<nav class="flex w-full flex-col items-center gap-y-4 md:w-auto md:flex-row md:flex-wrap md:justify-center md:gap-x-5 md:gap-y-3 lg:justify-end lg:gap-x-6" aria-label="<?php esc_attr_e( 'Footer Menu', 'latrobeweb' ); ?>">
						<?php foreach ( $footer_links as $item ) : ?>
                                                        <a class="body-base-400 text-footer-link inline-block w-full border-b border-transparent py-0 text-center whitespace-nowrap transition-colors duration-200 hover:border-brand-1 md:w-auto lg:body-base-500 lg:text-zinc-200" href="<?php echo esc_url( $item['url'] ); ?>">
								<?php echo esc_html( $item['label'] ); ?>
							</a>
						<?php endforeach; ?>
					</nav>
				</div>

				<div class="flex flex-col gap-4 border-t border-footer-divider-soft pt-6 text-center lg:flex-row lg:items-center lg:justify-between lg:gap-3 lg:pt-8 lg:text-left">
                                        <p class="body-base-400 text-footer-body lg:body-base-500">
						&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> La Trobe University - PCAT - Palliative Care Assessment Tool
					</p>

                                        <p class="body-base-400 text-footer-built lg:body-base-500">
                                                <?php esc_html_e( 'Built by', 'latrobeweb' ); ?>
                                                <a href="https://oddly.global/" target="_blank" rel="noopener noreferrer" class="body-base-600 text-footer-body inline-block border-b border-transparent transition-colors duration-200 hover:border-brand-1">ODDLY</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
