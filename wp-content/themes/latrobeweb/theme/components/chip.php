<?php
/**
 * Chip component.
 *
 * Expected args:
 * - label
 * - count
 * - state
 * - class_name
 * - attributes
 *
 * @package latrobeweb
 */

$label      = $args['label'] ?? '';
$count      = $args['count'] ?? '';
$state      = $args['state'] ?? 'default';
$class_name = $args['class_name'] ?? '';
$pressed    = ! empty( $args['pressed'] );
$attributes = $args['attributes'] ?? array();

$state_classes = array(
	'default' => '',
	'hover'   => 'la-chip--hover',
	'active'  => 'la-chip--active',
);

$base_classes = 'la-chip body-base-600 inline-flex cursor-pointer appearance-none items-center gap-1.5 rounded-full border border-solid border-gray-500 bg-brand-2 px-2 py-2 pl-3.5 text-gray-500 no-underline transition-colors duration-150 outline-none select-none hover:border-brand-1 hover:bg-transparent hover:text-brand-1 hover:[&>.la-chip-count]:bg-brand-1 hover:[&>.la-chip-count]:text-brand-2 active:border-brand-1 active:bg-brand-1 active:text-brand-2 active:[&>.la-chip-count]:bg-brand-2 active:[&>.la-chip-count]:text-brand-1';
$classes = trim( $base_classes . ' ' . ( $state_classes[ $state ] ?? '' ) . ' ' . $class_name );
$attribute_string = '';

foreach ( $attributes as $attribute_name => $attribute_value ) {
	if ( '' === $attribute_value || null === $attribute_value ) {
		continue;
	}

	$attribute_string .= sprintf(
		' %1$s="%2$s"',
		esc_attr( $attribute_name ),
		esc_attr( (string) $attribute_value )
	);
}
?>
<button type="button" class="<?php echo esc_attr( $classes ); ?>"<?php echo $pressed ? ' aria-pressed="true"' : ''; ?><?php echo $attribute_string; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<span><?php echo esc_html( $label ); ?></span>
	<?php if ( '' !== $count ) : ?>
		<span class="la-chip-count font-dlig inline-grid h-chip-badge w-chip-badge shrink-0 place-items-center rounded-full bg-gray-500 p-0 text-center font-sans text-[0.8rem] leading-none font-semibold tracking-normal tabular-nums text-brand-2"><?php echo esc_html( $count ); ?></span>
	<?php endif; ?>
</button>
