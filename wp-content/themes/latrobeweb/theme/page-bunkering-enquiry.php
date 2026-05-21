<?php
/**
 * Template Name: Bunkering Enquiry
 * Template Post Type: page
 *
 * @package latrobeweb
 */

get_header();
?>

<main class="la-bunker-page">
	<section class="la-bunker-page__section">
		<div class="la-bunker-page__container">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="la-bunker-page__content">
					<?php if ( trim( (string) get_the_content() ) !== '' ) : ?>
						<?php the_content(); ?>
					<?php else : ?>
						<div class="la-bunker-empty-state">
							<h1><?php esc_html_e( 'Bunkering Enquiry', 'latrobeweb' ); ?></h1>
							<p><?php esc_html_e( 'Add your Contact Form 7 shortcode to this page content to render the multi-step form.', 'latrobeweb' ); ?></p>
						</div>
					<?php endif; ?>
				</div>
				<?php
			endwhile;
			?>
		</div>
	</section>
</main>

<?php
get_footer();
