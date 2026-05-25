<?php
/**
 * Card component variants.
 *
 * @package latrobeweb
 */

$variant     = isset( $args['variant'] ) ? (string) $args['variant'] : 'default';
$class_name  = isset( $args['class_name'] ) ? (string) $args['class_name'] : '';
$icon        = $args['icon'] ?? '';
$eyebrow     = isset( $args['eyebrow'] ) ? (string) $args['eyebrow'] : '';
$title       = isset( $args['title'] ) ? (string) $args['title'] : '';
$description = isset( $args['description'] ) ? (string) $args['description'] : '';
$footer      = $args['footer'] ?? '';
$value       = isset( $args['value'] ) ? (string) $args['value'] : '';
$label       = isset( $args['label'] ) ? (string) $args['label'] : '';
$href        = isset( $args['href'] ) ? (string) $args['href'] : '';
$children    = $args['children'] ?? '';

if ( 'type-1' === $variant ) :
	?>
        <article class="<?php echo esc_attr( trim( 'flex translate-y-0 items-center gap-5 rounded-2xl border border-gray-200 bg-white px-5 py-5 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-card-brand-inset ' . $class_name ) ); ?>">
                <?php if ( $icon ) : ?><div class="bg-red-light text-la-red-1 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $icon, latrobeweb_get_svg_allowed() ); ?></div><?php endif; ?>
		<div>
			<p class="body-base-600 text-black"><?php echo esc_html( $title ); ?></p>
			<?php if ( $description ) : ?><p class="body-base-400 text-gray-500"><?php echo esc_html( $description ); ?></p><?php endif; ?>
		</div>
	</article>
	<?php
	return;
endif;

if ( 'type-2' === $variant ) :
	?>
        <article class="<?php echo esc_attr( trim( 'bg-surface-card-soft flex translate-y-0 flex-col rounded-2xl border border-gray-200 p-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-la-shadow-3 ' . $class_name ) ); ?>">
                <?php if ( $icon ) : ?><div class="bg-red-light text-la-red-1 mb-4 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $icon, latrobeweb_get_svg_allowed() ); ?></div><?php endif; ?>
		<h3 class="body-base-600 text-black"><?php echo esc_html( $title ); ?></h3>
		<?php if ( $description ) : ?><p class="body-base-400 mt-2 text-gray-500"><?php echo esc_html( $description ); ?></p><?php endif; ?>
	</article>
	<?php
	return;
endif;

if ( 'type-3' === $variant ) :
	?>
        <article class="<?php echo esc_attr( trim( 'group flex translate-y-0 flex-col rounded-2xl border border-gray-200 bg-white p-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-la-shadow-4 ' . $class_name ) ); ?>">
                <?php if ( $icon ) : ?><div class="bg-red-light text-la-red-1 mb-3.5 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $icon, latrobeweb_get_svg_allowed() ); ?></div><?php endif; ?>
		<h3 class="body-base-600 text-black group-hover:underline group-hover:decoration-brand-1 group-hover:[text-decoration-thickness:13.5%] group-hover:[text-underline-offset:25%]"><?php echo esc_html( $title ); ?></h3>
		<?php if ( $description ) : ?><p class="body-base-400 mt-3.5 text-gray-500 leading-[26px] md:text-lg md:leading-6 lg:text-base lg:leading-6"><?php echo esc_html( $description ); ?></p><?php endif; ?>
	</article>
	<?php
	return;
endif;

if ( 'team' === $variant ) :
	?>
        <article class="<?php echo esc_attr( trim( 'translate-y-0 rounded-2xl border border-gray-200 bg-white px-6 py-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:bg-surface-card-hover hover:shadow-la-shadow-1 ' . $class_name ) ); ?>">
                <div class="flex flex-col gap-2">
                        <p class="eyebrow text-brand-1"><?php echo esc_html( $eyebrow ); ?></p>
                        <p class="body-base-600 font-bold text-black"><?php echo esc_html( $title ); ?></p>
                </div>
		<p class="body-base-400 mt-3 text-gray-500"><?php echo esc_html( $description ); ?></p>
		<p class="body-sm-400 mt-4 border-l-2 border-brand-1 pl-4 text-base leading-6 text-gray-500 md:text-base md:leading-6 lg:text-sm lg:leading-5"><?php echo esc_html( (string) $footer ); ?></p>
	</article>
	<?php
	return;
endif;

if ( 'type-4' === $variant ) :
	?>
        <article class="<?php echo esc_attr( trim( 'group flex w-full min-w-0 translate-y-0 items-center gap-4 rounded-2xl border border-gray-200 bg-white px-4 py-4 shadow-none transition-[border-color,box-shadow,transform,background-color] duration-200 ease-out hover:-translate-y-px hover:rounded-2xl hover:border-gray-200 hover:bg-white hover:shadow-card-brand-inset ' . $class_name ) ); ?>">
                <div class="bg-red-light text-la-red-1 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $icon, latrobeweb_get_svg_allowed() ); ?></div>
                <div class="space-y-1">
                        <p class="text-gray-500 font-sans text-base font-semibold leading-6 tracking-[0.8px] uppercase [font-feature-settings:'dlig'_on]"><?php echo esc_html( $eyebrow ); ?></p>
			<?php $type_4_value_class = 'body-base-500 text-black group-hover:text-brand-1'; ?>
			<?php if ( $href ) : ?>
				<a href="<?php echo esc_url( $href ); ?>" class="<?php echo esc_attr( $type_4_value_class . ' group-hover:underline group-hover:decoration-solid group-hover:[text-decoration-skip-ink:none] group-hover:[text-decoration-thickness:8%] group-hover:[text-underline-offset:25%] group-hover:[text-underline-position:from-font]' ); ?>"><?php echo esc_html( $value ); ?></a>
			<?php else : ?>
				<p class="<?php echo esc_attr( $type_4_value_class ); ?>"><?php echo esc_html( $value ); ?></p>
			<?php endif; ?>
                </div>
	</article>
	<?php
	return;
endif;

if ( 'contact' === $variant ) :
	?>
        <article class="<?php echo esc_attr( trim( 'group flex translate-y-0 items-center gap-4 rounded-2xl border border-gray-200 bg-white px-4 py-4 shadow-none transition-[border-color,box-shadow,transform] duration-200 ease-out hover:-translate-y-px hover:border-contact-hover-border hover:shadow-contact-hover ' . $class_name ) ); ?>">
                <div class="bg-contact-icon-surface text-brand-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl"><?php echo wp_kses( $icon, latrobeweb_get_svg_allowed() ); ?></div>
		<div>
			<p class="eyebrow text-gray-500"><?php echo esc_html( $label ); ?></p>
			<?php $contact_value_class = 'body-base-500 inline text-black group-hover:text-brand-1 group-hover:underline group-hover:decoration-solid group-hover:[text-decoration-skip-ink:none] group-hover:[text-decoration-thickness:8%] group-hover:[text-underline-offset:25%] group-hover:[text-underline-position:from-font]'; ?>
			<?php if ( $href ) : ?>
				<a href="<?php echo esc_url( $href ); ?>" class="<?php echo esc_attr( $contact_value_class ); ?>"><?php echo esc_html( $value ); ?></a>
			<?php else : ?>
				<span class="<?php echo esc_attr( $contact_value_class ); ?>"><?php echo esc_html( $value ); ?></span>
			<?php endif; ?>
		</div>
	</article>
	<?php
	return;
endif;
?>
<article class="<?php echo esc_attr( trim( 'shadow-card rounded-3xl border border-slate-200 bg-white p-6 ' . $class_name ) ); ?>">
	<?php if ( $eyebrow || $title || $description ) : ?>
		<header class="space-y-2">
                        <?php if ( $eyebrow ) : ?><p class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.05em] text-slate-600"><?php echo esc_html( $eyebrow ); ?></p><?php endif; ?>
			<?php if ( $title ) : ?><h3 class="body-base-600 text-black"><?php echo esc_html( $title ); ?></h3><?php endif; ?>
			<?php if ( $description ) : ?><p class="body-base-400 text-gray-500"><?php echo esc_html( $description ); ?></p><?php endif; ?>
		</header>
	<?php endif; ?>
	<?php if ( $children ) : ?><div class="mt-5 space-y-4"><?php echo wp_kses_post( $children ); ?></div><?php endif; ?>
	<?php if ( $footer ) : ?><footer class="mt-5 border-t border-slate-200 pt-4"><?php echo wp_kses_post( (string) $footer ); ?></footer><?php endif; ?>
</article>
