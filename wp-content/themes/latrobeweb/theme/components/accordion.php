<?php
/**
 * Accordion component.
 *
 * Expected args:
 * - items
 * - class_name
 * - default_open
 * - default_open_id
 *
 * @package latrobeweb
 */

$items           = $args['items'] ?? array();
$class_name      = $args['class_name'] ?? '';
$default_open    = (int) ( $args['default_open'] ?? 0 );
$default_open_id = isset( $args['default_open_id'] ) ? (string) $args['default_open_id'] : '';

$icon_open_desktop = 'M11.7803 9.78033C11.4874 10.0732 11.0126 10.0732 10.7197 9.78033L8 7.06066L5.28033 9.78033C4.98744 10.0732 4.51256 10.0732 4.21967 9.78033C3.92678 9.48744 3.92678 9.01256 4.21967 8.71967L7.46967 5.46967C7.76256 5.17678 8.23744 5.17678 8.53033 5.46967L11.7803 8.71967C12.0732 9.01256 12.0732 9.48744 11.7803 9.78033Z';
$icon_closed_desktop = 'M4.21967 6.21967C4.51256 5.92678 4.98744 5.92678 5.28033 6.21967L8 8.93934L10.7197 6.21967C11.0126 5.92678 11.4874 5.92678 11.7803 6.21967C12.0732 6.51256 12.0732 6.98744 11.7803 7.28033L8.53033 10.5303C8.23744 10.8232 7.76256 10.8232 7.46967 10.5303L4.21967 7.28033C3.92678 6.98744 3.92678 6.51256 4.21967 6.21967Z';
$icon_open_tablet = 'M7.78033 4.53033C7.48744 4.82322 7.01256 4.82322 6.71967 4.53033L4 1.81066L1.28033 4.53033C0.987437 4.82322 0.512563 4.82322 0.21967 4.53033C-0.0732232 4.23744 -0.0732232 3.76256 0.21967 3.46967L3.46967 0.21967C3.76256 -0.0732232 4.23744 -0.0732232 4.53033 0.21967L7.78033 3.46967C8.07322 3.76256 8.07322 4.23744 7.78033 4.53033Z';
$icon_closed_tablet = 'M4.21967 6.21967C4.51256 5.92678 4.98744 5.92678 5.28033 6.21967L8 8.93934L10.7197 6.21967C11.0126 5.92678 11.4874 5.92678 11.7803 6.21967C12.0732 6.51256 12.0732 6.98744 11.7803 7.28033L8.53033 10.5303C8.23744 10.8232 7.76256 10.8232 7.46967 10.5303L4.21967 7.28033C3.92678 6.98744 3.92678 6.51256 4.21967 6.21967Z';
?>
<div class="overflow-hidden rounded-2xl border border-gray-100 bg-surface-card <?php echo esc_attr( $class_name ); ?>" data-accordion>
	<?php foreach ( $items as $index => $item ) : ?>
		<?php
		$item_id    = isset( $item['id'] ) ? (string) $item['id'] : 'accordion-item-' . $index;
		$is_open    = $default_open_id ? $default_open_id === $item_id : $default_open === $index;
		?>
		<?php $categories = isset( $item['categories'] ) && is_array( $item['categories'] ) ? implode( ' ', $item['categories'] ) : ''; ?>
		<div class="border-b border-gray-100 last:border-b-0" data-accordion-item<?php echo $categories ? ' data-faq-categories="' . esc_attr( $categories ) . '"' : ''; ?>>
			<button type="button" class="la-accordion-trigger group relative flex w-full items-center justify-start px-5 py-5 text-left md:px-6 md:py-5 lg:px-6 lg:py-5" aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>" data-accordion-trigger>
				<span class="body-base-500 text-left text-black group-hover:underline lg:font-medium"><?php echo esc_html( $item['title'] ?? '' ); ?></span>
				<svg class="la-accordion-icon absolute right-6 top-1/2 -translate-y-1/2 shrink-0 text-black transition-all duration-200 md:hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path data-accordion-icon-desktop fill-rule="evenodd" clip-rule="evenodd" d="<?php echo esc_attr( $is_open ? $icon_open_desktop : $icon_closed_desktop ); ?>" fill="currentColor"/></svg>
				<?php if ( $is_open ) : ?>
					<svg class="absolute top-1/2 hidden h-[5px] w-2 -translate-y-1/2 shrink-0 text-black md:right-5 md:block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5" fill="none" aria-hidden="true"><path data-accordion-icon-tablet fill-rule="evenodd" clip-rule="evenodd" d="<?php echo esc_attr( $icon_open_tablet ); ?>" fill="currentColor"/></svg>
				<?php else : ?>
					<svg class="absolute top-1/2 hidden h-4 w-4 -translate-y-1/2 shrink-0 text-black md:right-5 md:block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path data-accordion-icon-tablet fill-rule="evenodd" clip-rule="evenodd" d="<?php echo esc_attr( $icon_closed_tablet ); ?>" fill="currentColor"/></svg>
				<?php endif; ?>
			</button>
			<div class="overflow-hidden transition-[height,opacity] duration-300 ease-out <?php echo $is_open ? 'opacity-100' : 'opacity-0'; ?>" aria-hidden="<?php echo $is_open ? 'false' : 'true'; ?>" data-accordion-panel<?php echo $is_open ? ' style="height:auto;"' : ' style="height:0px;"'; ?>>
				<div data-accordion-panel-inner>
					<div class="la-wysiwyg body-base-400 pl-5 pr-5 pb-5 text-left text-gray-600 md:pl-5 md:pr-10 md:pb-5 lg:pl-6 lg:pr-10 lg:pb-5"><?php echo wp_kses_post( $item['content'] ?? '' ); ?></div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
