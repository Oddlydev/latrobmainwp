<?php
/**
 * Template Name: Bunkering Enquiry
 * Template Post Type: page
 *
 * @package latrobeweb
 */

get_header();

$contact_form_shortcode = '[contact-form-7 id="75c4d43" title="Contact form 1"]';
?>

<main class="la-bunker-page">
	<section class="la-bunker-page__section">
		<div class="la-bunker-page__container">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="la-bunker-page__content">
					<?php echo do_shortcode( $contact_form_shortcode ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>
				<?php
			endwhile;
			?>
		</div>
	</section>
</main>

<?php
get_footer();
