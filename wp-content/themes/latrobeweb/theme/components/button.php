<?php
/**
 * Button component.
 *
 * Expected args:
 * - href
 * - label
 * - content
 * - variant
 * - class_name
 * - icon
 * - icon_position
 * - target
 * - rel
 * - title
 * - type
 * - disabled
 * - attributes
 *
 * @package latrobeweb
 */

$href          = isset( $args['href'] ) ? (string) $args['href'] : '';
$label         = isset( $args['label'] ) ? (string) $args['label'] : '';
$content       = $args['content'] ?? '';
$variant       = isset( $args['variant'] ) ? (string) $args['variant'] : 'primary-light';
$class_name    = isset( $args['class_name'] ) ? (string) $args['class_name'] : '';
$icon          = $args['icon'] ?? '';
$icon_position = isset( $args['icon_position'] ) ? (string) $args['icon_position'] : 'after';
$target        = isset( $args['target'] ) ? (string) $args['target'] : '';
$rel           = isset( $args['rel'] ) ? (string) $args['rel'] : '';
$title         = isset( $args['title'] ) ? (string) $args['title'] : '';
$type          = isset( $args['type'] ) ? (string) $args['type'] : 'button';
$disabled      = ! empty( $args['disabled'] );
$attributes    = isset( $args['attributes'] ) && is_array( $args['attributes'] ) ? $args['attributes'] : array();

$variant_classes = array(
	'primary-light'            => 'la-button-primary-light',
	'primary-light-icon-right' => 'la-button-primary-light-icon-right',
	'primary-light-icon-left'  => 'la-button-primary-light-icon-left',
	'secondary-light'          => 'la-button-secondary-light',
	'primary-dark'             => 'la-button-primary-dark',
	'primary-dark-icon-right'  => 'la-button-primary-dark-icon-right',
	'primary-dark-icon-left'   => 'la-button-primary-dark-icon-left',
	'secondary-dark'           => 'la-button-secondary-dark',
);

$variant_class = $variant_classes[ $variant ] ?? $variant;
$classes       = trim( $variant_class . ' ' . $class_name );
$body          = '';

if ( $icon && 'before' === $icon_position ) {
	$body .= wp_kses( $icon, latrobeweb_get_svg_allowed() );
}

$body .= $content ? wp_kses_post( $content ) : esc_html( $label );

if ( $icon && 'after' === $icon_position ) {
	$body .= wp_kses( $icon, latrobeweb_get_svg_allowed() );
}

$attribute_markup = '';
foreach ( $attributes as $attribute_name => $attribute_value ) {
	if ( null === $attribute_value || false === $attribute_value || '' === $attribute_value ) {
		continue;
	}

	$attribute_markup .= sprintf(
		' %1$s="%2$s"',
		esc_attr( $attribute_name ),
		esc_attr( (string) $attribute_value )
	);
}

if ( $href ) :
	?>
	<a
		href="<?php echo esc_url( $href ); ?>"
		class="<?php echo esc_attr( $classes ); ?>"
		<?php if ( $target ) : ?>
			target="<?php echo esc_attr( $target ); ?>"
		<?php endif; ?>
		<?php if ( $rel ) : ?>
			rel="<?php echo esc_attr( $rel ); ?>"
		<?php endif; ?>
		<?php if ( $title ) : ?>
			title="<?php echo esc_attr( $title ); ?>"
		<?php endif; ?>
		<?php echo $attribute_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	>
		<?php echo $body; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</a>
<?php else : ?>
	<button
		type="<?php echo esc_attr( $type ); ?>"
		class="<?php echo esc_attr( $classes ); ?>"
		<?php if ( $disabled ) : ?>
			disabled
		<?php endif; ?>
		<?php if ( $title ) : ?>
			title="<?php echo esc_attr( $title ); ?>"
		<?php endif; ?>
		<?php echo $attribute_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	>
		<?php echo $body; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</button>
<?php endif; ?>
