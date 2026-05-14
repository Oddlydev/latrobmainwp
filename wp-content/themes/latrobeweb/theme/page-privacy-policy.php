<?php
/**
 * Template Name: 
 * Template Post Type: page
 *
 * @package latrobeweb
 */

get_header();

if ( have_posts() ) {
	the_post();
}

$content = apply_filters( 'the_content', get_the_content() );
?>

<div class="la-wysiwyg-preview-frame">
	<?php
	latrobeweb_render_rich_text_article(
		array(
			'title'               => get_the_title(),
			'date'                => get_the_date( 'Y-m-d' ),
			'content'             => $content,
			'is_rendered_content' => true,
		)
	);
	?>
</div>

<?php
get_footer();
