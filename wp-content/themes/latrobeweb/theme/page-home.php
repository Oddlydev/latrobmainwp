<?php
/**
 * Template Name: Home
 * Template Post Type: page
 *
 * @package latrobeweb
 */

get_header();

?>

<main class="overflow-hidden bg-gray-50 lg:bg-white">
	<section id="top" class="scroll-mt-24">
		<?php $home_hero_section_images = (array) get_field( 'home_hero_section_images' ); ?>
		<?php $home_hero_image_rows = $home_hero_section_images['home_hero_section_images'] ?? array(); ?>
		<?php
		$home_hero_image_row   = ! empty( $home_hero_image_rows ) ? $home_hero_image_rows[ array_rand( $home_hero_image_rows ) ] : array();
		$home_hero_mobile_url  = esc_url( $home_hero_image_row['home_hero_section_mobile_image'] ?? '' );
		$home_hero_tablet_url  = esc_url( $home_hero_image_row['home_hero_section_tablet_image'] ?? '' );
		?>
		<div class="relative overflow-hidden border border-gray-200 bg-white text-black shadow-[0_12px_40px_rgba(15,23,42,0.08)]">
			<img
				src="<?php echo esc_url( $home_hero_image_row['home_hero_section_desktop_image'] ?? '' ); ?>"
				alt=""
				aria-hidden="true"
				class="la-home-hero-image-desktop absolute inset-y-0 right-0 hidden h-full w-[58%] object-cover lg:block xl:w-[60%] 2xl:w-[62%]"
			/>
			<div
				aria-hidden="true"
				class="la-home-hero-desktop-overlay pointer-events-none absolute inset-y-0 left-0 hidden h-full lg:block"
			></div>
			<div class="la-home-hero-text-layer relative z-10 px-6 pt-10 pb-0 md:px-10 md:pt-10 md:pb-0 lg:max-w-[716px] lg:pr-10 lg:pt-[11.0625rem] lg:pb-[11.0625rem] lg:pl-[9.375rem]">
				<div class="w-full">
					<p class="body-xs-500 md:body-base-500 inline-flex max-w-full items-center gap-2 whitespace-normal rounded-full border border-gray-300 bg-white px-4 py-2 text-black shadow-sm">
						<span class="h-2.5 w-2.5 rounded-full bg-green-500 animate-pulse"></span>
						<?php echo esc_html( get_field( 'home_hero_section_label_text' ) ); ?>
					</p>
					<div class="mt-5 space-y-4 md:mt-5 md:space-y-5 lg:mt-12 lg:space-y-6">
						<h1 class="font-display text-4xl leading-[110%] font-bold tracking-normal text-black md:font-black lg:text-[60px] lg:font-black">
							<span class="block lg:whitespace-nowrap"><?php echo esc_html( get_field( 'home_hero_section_title' ) ); ?></span>
							<span class="mt-1 block text-brand-1 md:mt-0 md:inline lg:block lg:whitespace-nowrap"><?php echo esc_html( get_field( 'home_hero_section_title_highlighted_text' ) ); ?></span>
						</h1>
						<p class="body-base-400 max-w-full pt-0 text-gray-600 md:w-full md:max-w-full md:pt-0 lg:w-[616px] lg:max-w-[616px] lg:pt-0">
							<?php echo esc_html( get_field( 'home_hero_section_description' ) ); ?>
						</p>
					</div>
				</div>
				<div class="mt-5 flex flex-wrap gap-4 pb-5 md:pb-7 lg:mt-12 lg:pb-0">
					<?php
					latrobeweb_component(
						'button',
						array(
							'href'          => get_field( 'home_hero_section_button_one_link' ),
							'label'         => 'Access PCAT Tool',
							'variant'       => 'la-button-primary-light-icon-right',
							'class_name'    => 'px-5 py-3 lg:px-8 lg:py-4',
							'icon'          => latrobeweb_get_icon_markup( 'arrow' ),
							'icon_position' => 'after',
							'target'        => '_blank',
							'rel'           => 'noreferrer',
						)
					);
					latrobeweb_component(
						'button',
						array(
							'href'       => get_field( 'home_hero_section_button_two_link' ),
							'label'      => 'Learn more',
							'variant'    => 'la-button-secondary-light',
							'class_name' => 'px-5 py-3 lg:px-8 lg:py-4',
						)
					);
					?>
				</div>
			</div>
			<?php if ( $home_hero_mobile_url ) : ?>
				<div
					class="la-home-hero-image-mobile-shell md:hidden"
					role="img"
					aria-hidden="true"
					style="--la-hero-mobile-bg: url('<?php echo $home_hero_mobile_url; ?>');"
				></div>
			<?php endif; ?>
			<?php if ( $home_hero_tablet_url ) : ?>
				<div
					class="la-home-hero-image-tablet-shell hidden md:block lg:hidden"
					role="img"
					aria-hidden="true"
					style="--la-hero-tablet-bg: url('<?php echo $home_hero_tablet_url; ?>');"
				></div>
			<?php endif; ?>
			<div class="relative bg-brand-3 p-3.5 md:p-5 lg:p-7">
				<div class="grid gap-3 md:inline-grid md:w-full md:grid-cols-2 md:grid-rows-2 md:gap-3 lg:gap-5 xl:grid-cols-4 xl:grid-rows-1">
					<?php foreach ( (array) get_field( 'home_hero_section_card_details' ) as $item ) : ?>
						<article class="flex translate-y-0 items-center gap-5 rounded-2xl border border-gray-200 bg-white px-5 py-5 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-card-brand-inset">
							<div class="bg-red-light flex h-12 w-12 items-center justify-center rounded-xl">
								<img src="<?php echo esc_url( $item['home_care_hero_card_item_icon'] ); ?>" alt="" class="h-6 w-6 object-contain" />
							</div>
							<div>
								<p class="body-base-600 text-black"><?php echo esc_html( $item['home_care_hero_card_item_title'] ); ?></p>
								<p class="body-base-400 text-gray-500"><?php echo esc_html( $item['home_care_hero_card_item_description'] ); ?></p>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="la-page-shell pt-10 md:pt-10 lg:pt-20">
		<span id="about" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="max-w-[695px]">
			<p class="eyebrow m-0 text-red-600"><?php echo esc_html( get_field( 'home_intro_section_label_text' ) ); ?></p>
			<h2 class="mt-2 mb-5 block max-w-[695px] font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black md:mb-7 md:font-bold md:tracking-normal lg:mb-12 lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_intro_section_title' ) ); ?></h2>
		</div>
		<div class="grid gap-5 md:gap-7 lg:grid-cols-2 lg:gap-12">
			<div class="space-y-7">
				<p class="body-base-400 max-w-[695px] text-gray-700 md:text-gray-500"><?php echo esc_html( get_field( 'home_intro_section_description' ) ); ?></p>
				<div class="rounded-xl border border-red-200 bg-transparent p-6 lg:bg-white">
					<p class="body-base-600 text-lg text-black lg:text-xl lg:leading-7"><?php echo esc_html( get_field( 'home_intro_section_highlight_text' ) ); ?></p>
				</div>
			</div>
			<div class="la-home-intro-meta overflow-hidden rounded-[1.25rem] border border-gray-300 bg-surface-card-soft shadow-none backdrop-blur-[2px]">
				<div class="la-home-intro-meta-row grid grid-cols-[auto_1fr] items-center gap-5 px-5 py-6 md:gap-6 lg:grid-cols-[auto_minmax(0,1fr)] lg:gap-9 lg:px-8 lg:py-10"><p class="body-base-600 shrink-0 text-lg leading-7 tracking-tighter text-gray-600 uppercase">Project title</p><p class="la-home-intro-meta-value body-base-400 justify-self-end max-w-full text-right text-black md:text-right md:text-xl md:leading-8 lg:w-full lg:max-w-none">PCAT for Aged Care</p></div>
				<div class="la-home-intro-meta-row grid grid-cols-[auto_1fr] items-center gap-5 border-t border-gray-200 px-5 py-6 md:gap-6 lg:grid-cols-[auto_minmax(0,1fr)] lg:gap-9 lg:px-8 lg:py-10"><p class="body-base-600 shrink-0 text-lg leading-7 tracking-tighter text-gray-600 uppercase">Funding</p><p class="la-home-intro-meta-value body-base-400 justify-self-end max-w-full text-right text-black md:text-right md:text-xl md:leading-8 lg:w-full lg:max-w-none">The Aged Care Research and Industry Innovation Australia fund (ARIIA)</p></div>
				<div class="la-home-intro-meta-row grid grid-cols-[auto_1fr] items-center gap-5 border-t border-gray-200 px-5 py-6 md:gap-6 lg:grid-cols-[auto_minmax(0,1fr)] lg:gap-9 lg:px-8 lg:py-10"><p class="body-base-600 shrink-0 text-lg leading-7 tracking-tighter text-gray-600 uppercase">Institution</p><p class="la-home-intro-meta-value body-base-400 justify-self-end max-w-full text-right text-black md:text-right md:text-xl md:leading-8 lg:w-full lg:max-w-none">La Trobe University</p></div>
			</div>
		</div>
	</section>

	<section class="border-b border-ink-faint pt-5 pb-10 md:pt-7 lg:pt-12 lg:pb-20">
		<div class="la-page-shell">
			<div class="grid gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-6">
				<?php foreach ( (array) get_field( 'home_intro_card_details' ) as $item ) : ?>
					<article class="bg-surface-card-soft flex translate-y-0 flex-col rounded-2xl border border-gray-200 p-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-la-shadow-3 h-full">
						<div class="bg-red-light mb-4 flex h-12 w-12 items-center justify-center rounded-xl">
							<img src="<?php echo esc_url( $item['home_intro_card_item_icon'] ); ?>" alt="" class="h-6 w-6 object-contain" />
						</div>
						<h3 class="body-base-600 text-black"><?php echo esc_html( $item['home_intro_card_item_title'] ); ?></h3>
						<p class="body-base-400 mt-2 text-gray-500"><?php echo esc_html( $item['home_intro_card_item_description'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="pt-10 pb-5 md:pt-10 md:pb-7 lg:pt-20 lg:pb-12">
		<span id="features" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="la-page-shell">
			<div class="space-y-5 md:space-y-7 lg:space-y-12">
				<div>
					<p class="eyebrow text-red-600"><?php echo esc_html( get_field( 'home_core_features_section_label_text' ) ); ?></p>
					<h2 class="mt-2 font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black md:font-bold md:tracking-normal lg:max-w-xl lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_core_features_section_title' ) ); ?></h2>
				</div>
				<div class="la-core-feature-stage aspect-[4/3] sm:aspect-[1295/718]" data-core-feature-gallery data-reveal-count="9">
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--top inset-x-0 top-0 h-20"></div>
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--right inset-y-0 right-0 w-20"></div>
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--bottom inset-x-0 bottom-0 h-20"></div>
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--left inset-y-0 left-0 w-20"></div>
					<?php
					$core_feature_positions = array(
						array( 'left' => '39.92', 'top' => '3.34', 'width' => '27.03', 'height' => '53.06' ),
						array( 'left' => '11.1', 'top' => '37.5', 'width' => '27.09', 'height' => '57.94' ),
						array( 'left' => '71.89', 'top' => '37.5', 'width' => '27.03', 'height' => '57.94' ),
						array( 'left' => '1.39', 'top' => '-1.49', 'width' => '20.54', 'height' => '32.59' ),
						array( 'left' => '-0.25', 'top' => '40', 'width' => '8.95', 'height' => '53.06' ),
						array( 'left' => '23.32', 'top' => '3.34', 'width' => '16.29', 'height' => '34.54' ),
						array( 'left' => '37.84', 'top' => '54.9', 'width' => '19.1', 'height' => '35.93' ),
						array( 'left' => '59.2', 'top' => '66.5', 'width' => '13.38', 'height' => '25.07' ),
						array( 'left' => '67.49', 'top' => '6.96', 'width' => '24.48', 'height' => '26.32' ),
						array( 'left' => '93.66', 'top' => '-7', 'width' => '7.34', 'height' => '27.86' ),
					);
					?>
					<?php foreach ( (array) get_field( 'home_core_features_section_image_details' ) as $index => $card ) : ?>
						<?php
						$card_motion_style = 'animation:none;';
						$card_image_style  = 'transform:none;';
						$card_position     = isset( $core_feature_positions[ $index ] ) ? $core_feature_positions[ $index ] : array( 'left' => '0', 'top' => '0', 'width' => '20', 'height' => '20' );
						?>
						<article class="absolute z-[5]" style="left:<?php echo esc_attr( $card_position['left'] ); ?>%;top:<?php echo esc_attr( $card_position['top'] ); ?>%;width:<?php echo esc_attr( $card_position['width'] ); ?>%;height:<?php echo esc_attr( $card_position['height'] ); ?>%;">
							<div
								class="la-core-feature-shell <?php echo 0 === $index ? 'la-core-feature-shell--visible' : 'la-core-feature-shell--hidden'; ?> relative h-full w-full overflow-hidden rounded-sm border-[5px] border-white bg-transparent <?php echo $index < 3 ? 'la-core-feature-shell--large' : 'la-core-feature-shell--small'; ?>"
								data-core-feature-card
								data-card-id="core-feature-<?php echo esc_attr( $index ); ?>"
								data-reveal-order="<?php echo esc_attr( 0 === $index ? '-1' : $index - 4 ); ?>"
								data-primary="<?php echo 0 === $index ? 'true' : 'false'; ?>"
							>
								<div class="la-core-feature-clip la-core-feature-clip--r4 relative h-full min-h-0 w-full min-w-0 overflow-hidden rounded-none">
									<div class="la-core-feature-motion <?php echo 0 === $index ? 'la-core-feature-motion--primary' : 'la-core-feature-motion--secondary'; ?> relative h-full w-full" style="<?php echo esc_attr( $card_motion_style ); ?>">
										<img src="<?php echo esc_url( $card['home_core_features_item_image'] ); ?>" alt="" class="la-core-feature-img <?php echo $index < 3 ? 'la-core-feature-img--dashboard' : 'la-core-feature-img--photo'; ?> <?php echo 4 === $index ? 'la-core-feature-img--portrait' : ''; ?> <?php echo 3 === $index ? 'la-core-feature-img--hug' : ''; ?> pointer-events-none absolute inset-0 z-0 box-border h-full w-full max-w-none select-none object-cover object-center" style="<?php echo esc_attr( $card_image_style ); ?>" draggable="false" />
									</div>
								</div>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="border-b border-ink-faint pb-10 md:pb-20">
		<div class="la-page-shell">
			<div class="grid gap-5 md:grid-cols-2 lg:gap-6 xl:grid-cols-3">
				<?php foreach ( (array) get_field( 'home_core_features_card_details' ) as $item ) : ?>
					<article class="group flex translate-y-0 flex-col rounded-2xl border border-gray-200 bg-white p-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-la-shadow-4 h-full">
						<div class="bg-red-light mb-3.5 flex h-12 w-12 items-center justify-center rounded-xl">
							<img src="<?php echo esc_url( $item['home_core_features_card_item_icon'] ); ?>" alt="" class="h-6 w-6 object-contain" />
						</div>
						<h3 class="body-base-600 text-black group-hover:underline group-hover:decoration-brand-1 group-hover:[text-decoration-thickness:13.5%] group-hover:[text-underline-offset:25%]"><?php echo esc_html( $item['home_core_features_card_item_title'] ); ?></h3>
						<p class="body-base-400 mt-3.5 text-gray-500 leading-[26px] md:text-lg md:leading-6 lg:text-base lg:leading-6"><?php echo esc_html( $item['home_core_features_card_item_description'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php $how_it_works_background_images = (array) get_field( 'home_how_it_works_section_background_images' ); ?>
	<section class="la-how-it-works-section py-10 lg:py-20" style="--la-how-it-works-mobile-background-image:url('<?php echo esc_url( $how_it_works_background_images['home_how_it_works_section_mobile_background_image'] ?? '' ); ?>');--la-how-it-works-tablet-background-image:url('<?php echo esc_url( $how_it_works_background_images['home_how_it_works_section_tablet_background_image'] ?? '' ); ?>');--la-how-it-works-desktop-background-image:url('<?php echo esc_url( $how_it_works_background_images['home_how_it_works_section_desktop_background_image'] ?? '' ); ?>');">
		<div class="w-full">
			<span id="how-it-works" class="block scroll-mt-4" aria-hidden="true"></span>
			<div class="relative overflow-hidden" data-how-it-works data-how-marker-ratio="0.72">
				<div class="la-page-shell relative z-10 mb-5 md:mb-7 lg:mb-12 lg:text-center">
					<p class="eyebrow text-brand-1"><?php echo esc_html( get_field( 'home_how_it_works_section_label_text' ) ); ?></p>
					<h2 class="mt-2 font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black md:font-bold md:tracking-normal lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_how_it_works_section_title' ) ); ?></h2>
				</div>
				<div class="la-page-shell relative z-10">
					<div class="la-how-track absolute top-5 bottom-5 w-1 rounded-full bg-red-100 md:top-0 md:bottom-0 xl:left-1/2 xl:top-0 xl:bottom-0 xl:w-1 xl:-translate-x-1/2" data-how-it-works-track aria-hidden="true">
						<div class="la-how-track-fill w-full rounded-full bg-brand-1 transition-[height] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-[height]" data-how-it-works-fill></div>
					</div>
					<div class="la-how-steps space-y-10 py-5 xl:space-y-16 xl:py-0">
						<?php $how_it_works_items = (array) get_field( 'home_how_it_works_section_details' ); ?>
						<?php foreach ( $how_it_works_items as $index => $step ) : ?>
							<?php $is_left = 0 === $index % 2; ?>
							<?php
							$description_width_class = 'xl:max-w-[340px]';
							$step_red_icon           = is_array( $step['home_how_it_work_item_red_icon'] ?? '' ) ? $step['home_how_it_work_item_red_icon']['url'] : $step['home_how_it_work_item_red_icon'];
							$step_white_icon         = is_array( $step['home_how_it_work_item_white_icon'] ?? '' ) ? $step['home_how_it_work_item_white_icon']['url'] : $step['home_how_it_work_item_white_icon'];
							$has_step_icon           = ! empty( $step_red_icon ) || ! empty( $step_white_icon );
							$step_icon_class         = $has_step_icon ? 'bg-white text-brand-1' : 'bg-brand-1 text-white';

							$heading_row_class = $is_left
								? 'flex w-full items-baseline gap-3 font-display text-black xl:flex xl:w-full xl:max-w-[448px] xl:justify-end xl:gap-3 xl:ml-auto xl:text-right'
								: 'flex w-full items-baseline gap-3 font-display text-black xl:inline-grid xl:w-full xl:max-w-[448px] xl:grid-cols-[auto_minmax(0,1fr)] xl:gap-x-3 xl:text-left';
							?>
							<div class="la-how-step-row relative grid grid-cols-[auto_1fr] items-start gap-x-5 <?php echo $index === count( $how_it_works_items ) - 1 ? 'pb-5' : ''; ?> xl:mx-auto xl:w-fit xl:max-w-none xl:grid-cols-[462px_56px_462px] xl:items-center xl:gap-x-14 xl:gap-y-0 xl:pb-0" data-how-it-works-step-row data-how-step-side="<?php echo $is_left ? 'left' : 'right'; ?>">
								<div class="la-how-step-marker relative z-20 col-start-1 row-start-1 flex h-12 w-12 items-center justify-center self-start mt-5 rounded-full border-2 border-brand-1 transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] md:h-[60px] md:w-[60px] md:border-[3px] xl:absolute xl:left-1/2 xl:top-1/2 xl:mt-0 xl:h-14 xl:w-14 xl:-translate-x-1/2 xl:-translate-y-1/2 xl:border-[3px] <?php echo esc_attr( $step_icon_class ); ?>" data-how-it-works-step data-has-icon="<?php echo $has_step_icon ? 'true' : 'false'; ?>" data-filled="false">
									<?php if ( ! empty( $step_red_icon ) ) : ?>
										<img src="<?php echo esc_url( $step_red_icon ); ?>" alt="" class="la-how-step-icon la-how-step-icon--red h-6 w-6 object-contain md:h-[25.7px] md:w-[25.7px] xl:h-[26px] xl:w-[26px]" />
									<?php endif; ?>
									<?php if ( ! empty( $step_white_icon ) ) : ?>
										<img src="<?php echo esc_url( $step_white_icon ); ?>" alt="" class="la-how-step-icon la-how-step-icon--white h-6 w-6 object-contain md:h-[25.7px] md:w-[25.7px] xl:h-[26px] xl:w-[26px]" />
									<?php endif; ?>
								</div>
								<article class="la-how-step-card col-start-2 row-start-1 min-w-0 w-full rounded-lg px-0 py-5 text-left transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform xl:py-4 <?php echo $is_left ? 'xl:col-start-1 xl:pl-0 xl:pr-0 xl:text-right' : 'xl:col-start-3 xl:pl-0 xl:pr-0 xl:text-left'; ?>">
									<div class="<?php echo esc_attr( $heading_row_class ); ?>">
										<span class="shrink-0 text-right font-display text-xl font-light leading-7 tracking-tighter text-gray-500"><?php echo esc_html( $step['home_how_it_work_item_number'] ); ?></span>
										<h4 class="max-w-none font-display text-xl font-bold leading-7 tracking-tighter text-black sm:max-w-none md:text-xl md:leading-8 xl:max-w-none xl:text-2xl xl:leading-8"><?php echo esc_html( $step['home_how_it_work_item_title'] ); ?></h4>
									</div>
									<p class="mt-3 font-display text-lg font-normal leading-6 tracking-normal text-gray-500 xl:mt-[5px] xl:text-base xl:leading-6 <?php echo esc_attr( $description_width_class ); ?> <?php echo $is_left ? 'xl:ml-auto' : ''; ?>"><?php echo esc_html( $step['home_how_it_work_item_description'] ); ?></p>
								</article>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="border-t border-gray-200 py-10 md:py-10 lg:py-20">
		<span id="team" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="la-page-shell">
			<div class="max-w-2xl">
				<p class="eyebrow text-brand-1"><?php echo esc_html( get_field( 'home_team_section_label_text' ) ); ?></p>
				<h2 class="mt-2 mb-0 max-w-[600px] font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black md:font-bold md:tracking-normal lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_team_section_title' ) ); ?></h2>
			</div>
			<div class="mt-5 grid gap-5 md:mt-7 md:grid-cols-2 md:gap-x-5 md:gap-y-5 lg:mt-12 lg:gap-6 xl:grid-cols-3">
				<?php foreach ( (array) get_field( 'home_team_section_details' ) as $member ) : ?>
					<article class="translate-y-0 rounded-2xl border border-gray-200 bg-white px-6 py-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:bg-surface-card-hover hover:shadow-la-shadow-1">
						<div class="flex flex-col gap-2">
							<p class="eyebrow text-brand-1"><?php echo esc_html( $member['home_team_section_member_designation'] ); ?></p>
							<p class="body-base-600 font-bold text-black"><?php echo esc_html( $member['home_team_section_member_name'] ); ?></p>
						</div>
						<p class="body-base-400 mt-3 text-gray-500"><?php echo esc_html( $member['home_team_section_member_bio'] ); ?></p>
						<p class="body-sm-400 mt-4 border-l-2 border-brand-1 pl-4 text-base leading-6 text-gray-500 md:text-base md:leading-6 lg:text-sm lg:leading-5"><?php echo esc_html( $member['home_team_section_member_location'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="border-t border-slate-200 border-b py-10 md:py-10 lg:py-20">
		<div class="la-page-shell">
			<div class="mx-auto max-w-5xl text-center">
				<p class="eyebrow text-red-600"><?php echo esc_html( get_field( 'home_partners_section_label_text' ) ); ?></p>
				<h2 class="mt-2 font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black md:font-bold md:tracking-normal lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_partners_section_title' ) ); ?></h2>
				<p class="mx-auto mt-4 max-w-[550px] font-sans text-base leading-6 font-normal tracking-normal text-gray-500"><?php echo esc_html( get_field( 'home_partners_section_description' ) ); ?></p>
			</div>
			<div class="mt-5 grid gap-5 md:mt-7 md:grid-cols-2 md:gap-5 lg:mt-12 lg:gap-6 xl:grid-cols-3">
				<?php foreach ( (array) get_field( 'home_partners_details' ) as $index => $item ) : ?>
					<article class="group bg-surface-card-hover flex flex-col items-center gap-0 rounded-2xl border border-gray-200 py-[47px] text-center">
						<div class="flex h-20 items-center justify-center pb-[30px]">
							<img src="<?php echo esc_url( $item['home_partner_logo'] ); ?>" alt="" class="w-auto transition-transform duration-300 ease-out group-hover:scale-105" />
						</div>
						<p class="body-base-500 text-center uppercase text-gray-500"><?php echo esc_html( 0 === $index ? 'Host institution' : ( 1 === $index ? 'Funding partner' : 'Healthcare partner' ) ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="la-home-faq-section la-page-shell py-10 md:py-10 lg:py-20">
		<span id="faq" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="la-home-faq-stack space-y-5 md:space-y-7 lg:space-y-12">
			<?php
			$faq_items  = (array) get_field( 'home_faq_section_details' );
			$faq_labels = array();

			foreach ( $faq_items as $item ) {
				$faq_label = $item['home_faq_item_label'];
				$faq_slug  = sanitize_title( $faq_label );

				if ( ! isset( $faq_labels[ $faq_slug ] ) ) {
					$faq_labels[ $faq_slug ] = array(
						'label' => $faq_label,
						'count' => 0,
					);
				}

				$faq_labels[ $faq_slug ]['count']++;
			}
			?>
			<div class="max-w-5xl mx-auto text-center">
				<p class="eyebrow text-red-600"><?php echo esc_html( get_field( 'home_faq_section_label_text' ) ); ?></p>
				<h2 class="mt-2 font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black md:font-bold md:tracking-normal lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_faq_section_title' ) ); ?></h2>
				<p class="mx-auto mt-4 max-w-4xl text-center font-sans text-base leading-6 font-normal tracking-normal text-gray-500"><?php echo esc_html( get_field( 'home_faq_section_description' ) ); ?></p>
			</div>
			<div class="w-full" data-faq-shell>
				<div class="mb-6 flex w-full items-center gap-1 overflow-hidden p-1.5 max-lg:px-0 md:mb-5 lg:mx-auto lg:mb-6 lg:max-w-[1220px] lg:p-0" data-faq-filters>
					<button type="button" class="inline-flex h-11 w-10 shrink-0 cursor-pointer items-center justify-center rounded-full border border-transparent bg-transparent text-black transition-opacity duration-150 hover:opacity-70 disabled:pointer-events-none disabled:m-0 disabled:w-0 disabled:min-w-0 disabled:overflow-hidden disabled:border-0 disabled:p-0 disabled:opacity-0 lg:w-7" data-faq-filter-prev aria-label="<?php esc_attr_e( 'Show previous FAQ categories', 'latrobeweb' ); ?>">
						<span class="rotate-180">
							<?php echo wp_kses( latrobeweb_get_icon_markup( 'chevron-right-small' ), latrobeweb_get_svg_allowed() ); ?>
						</span>
					</button>
					<div class="min-w-0 w-full flex-[1_0_0] overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:flex-auto lg:px-0" data-faq-filter-scroller>
						<div class="flex min-w-max items-center gap-1" role="tablist" aria-label="<?php esc_attr_e( 'FAQ categories', 'latrobeweb' ); ?>">
							<?php
							latrobeweb_component(
								'chip',
								array(
									'label'      => 'All',
									'count'      => (string) count( $faq_items ),
									'class_name' => 'shrink-0 flex-none',
									'pressed'    => true,
									'attributes' => array(
										'data-faq-filter' => 'all',
										'role'            => 'tab',
										'aria-selected'   => 'true',
									),
								)
							);
							?>
							<?php foreach ( $faq_labels as $faq_slug => $faq_label ) : ?>
								<?php
								latrobeweb_component(
									'chip',
									array(
										'label'      => $faq_label['label'],
										'count'      => (string) $faq_label['count'],
										'class_name' => 'shrink-0 flex-none',
										'attributes' => array(
											'data-faq-filter' => $faq_slug,
											'role'            => 'tab',
											'aria-selected'   => 'false',
										),
									)
								);
								?>
							<?php endforeach; ?>
						</div>
					</div>
					<button type="button" class="inline-flex h-11 w-10 shrink-0 cursor-pointer items-center justify-center rounded-full border border-transparent bg-transparent text-black transition-opacity duration-150 hover:opacity-70 disabled:pointer-events-none disabled:opacity-0 lg:relative lg:z-[1] lg:-ml-6 lg:w-7 lg:bg-white" data-faq-filter-next aria-label="<?php esc_attr_e( 'Show more FAQ categories', 'latrobeweb' ); ?>">
						<?php echo wp_kses( latrobeweb_get_icon_markup( 'chevron-right-small' ), latrobeweb_get_svg_allowed() ); ?>
					</button>
				</div>
				<div class="w-full lg:mx-auto lg:max-w-[896px]">
				<div class="overflow-hidden rounded-2xl border border-gray-100 bg-surface-card" data-accordion>
					<?php foreach ( $faq_items as $item ) : ?>
						<div class="border-b border-gray-100 last:border-b-0" data-accordion-item data-faq-categories="<?php echo esc_attr( sanitize_title( $item['home_faq_item_label'] ) ); ?>">
							<button type="button" class="la-accordion-trigger group relative flex w-full items-center justify-start px-5 py-5 text-left md:px-6 md:py-5 lg:px-6 lg:py-5" aria-expanded="false" data-accordion-trigger>
								<span class="body-base-500 text-left text-black group-hover:underline lg:font-medium"><?php echo esc_html( $item['home_faq_item_title'] ); ?></span>
								<svg class="la-accordion-icon absolute right-6 top-1/2 -translate-y-1/2 shrink-0 text-black transition-all duration-200 md:hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path data-accordion-icon-desktop fill-rule="evenodd" clip-rule="evenodd" d="M4.21967 6.21967C4.51256 5.92678 4.98744 5.92678 5.28033 6.21967L8 8.93934L10.7197 6.21967C11.0126 5.92678 11.4874 5.92678 11.7803 6.21967C12.0732 6.51256 12.0732 6.98744 11.7803 7.28033L8.53033 10.5303C8.23744 10.8232 7.76256 10.8232 7.46967 10.5303L4.21967 7.28033C3.92678 6.98744 3.92678 6.51256 4.21967 6.21967Z" fill="currentColor"/></svg>
								<svg class="absolute top-1/2 hidden h-4 w-4 -translate-y-1/2 shrink-0 text-black md:right-5 md:block lg:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path data-accordion-icon-tablet fill-rule="evenodd" clip-rule="evenodd" d="M4.21967 6.21967C4.51256 5.92678 4.98744 5.92678 5.28033 6.21967L8 8.93934L10.7197 6.21967C11.0126 5.92678 11.4874 5.92678 11.7803 6.21967C12.0732 6.51256 12.0732 6.98744 11.7803 7.28033L8.53033 10.5303C8.23744 10.8232 7.76256 10.8232 7.46967 10.5303L4.21967 7.28033C3.92678 6.98744 3.92678 6.51256 4.21967 6.21967Z" fill="currentColor"/></svg>
							</button>
							<div class="overflow-hidden opacity-0 transition-[height,opacity] duration-300 ease-out" aria-hidden="true" data-accordion-panel style="height:0px;">
								<div data-accordion-panel-inner>
									<div class="la-wysiwyg body-base-400 pl-5 pr-5 pb-5 text-left text-gray-600 md:pl-5 md:pr-10 md:pb-5 lg:pl-6 lg:pr-10 lg:pb-5"><?php echo wp_kses_post( $item['home_faq_item_description'] ); ?></div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			</div>
		</div>
	</section>

	<section class="la-home-cta-section" style="--la-cta-background-image:url('<?php echo esc_url( get_field( 'home_cta_section_background_image' ) ); ?>');">
		<div class="la-page-shell text-center">
			<div class="space-y-4 md:space-y-4 lg:space-y-4">
				<h2 class="text-center font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-white md:font-bold md:tracking-normal lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_cta_section_title' ) ); ?></h2>
				<p class="body-base-400 text-center text-gray-400"><?php echo esc_html( get_field( 'home_cta_section_description' ) ); ?></p>
			</div>
			<div class="mt-8 flex justify-center md:mt-7 lg:mt-8">
				<?php
				latrobeweb_component(
					'button',
					array(
						'href'          => get_field( 'home_cta_section_button_link' ),
						'label'         => 'Log in to PCAT',
						'variant'       => 'la-button-primary-dark-icon-left',
						'class_name'    => 'px-5 py-3 lg:px-8 lg:py-4',
						'icon'          => latrobeweb_get_icon_markup( 'lock-small' ),
						'icon_position' => 'before',
						'target'        => '_blank',
						'rel'           => 'noreferrer',
					)
				);
				?>
			</div>
		</div>
	</section>

	<section class="la-page-shell py-10 md:py-10 lg:py-20">
		<span id="contact" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="space-y-5 md:space-y-7 lg:space-y-12">
			<div class="max-w-[695px] text-left">
				<p class="eyebrow text-red-600"><?php echo esc_html( get_field( 'home_contact_section_label_text' ) ); ?></p>
				<h2 class="mt-2 font-display text-[1.875rem] leading-[110%] font-black tracking-tighter text-black md:font-bold md:tracking-normal lg:text-[2.25rem] lg:leading-[110%] lg:font-bold"><?php echo esc_html( get_field( 'home_contact_section_title' ) ); ?></h2>
				<p class="mt-4 max-w-[600px] font-sans text-base leading-6 font-normal tracking-normal text-gray-500"><?php echo esc_html( get_field( 'home_contact_section_description' ) ); ?></p>
			</div>
			<div class="grid gap-5 md:gap-5 lg:grid-cols-[minmax(0,1fr)_minmax(320px,0.95fr)] lg:items-start lg:gap-12">
				<div class="space-y-4 md:space-y-4 lg:space-y-5">
					<?php $contact_details = get_field( 'home_contact_section_details' ); ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'contact', 'label' => 'Email', 'value' => $contact_details['home_contact_section_email'], 'icon' => latrobeweb_get_icon_markup( 'mail' ), 'href' => 'mailto:' . $contact_details['home_contact_section_email'] ) ); ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'contact', 'label' => 'Institution', 'value' => $contact_details['home_contact_section_institution'], 'icon' => latrobeweb_get_icon_markup( 'globe' ) ) ); ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'contact', 'label' => 'Location', 'value' => $contact_details['home_contact_section_location'], 'icon' => latrobeweb_get_icon_markup( 'pin' ) ) ); ?>
				</div>
				<article class="self-start w-full rounded-xl border border-red-200 bg-white px-6 py-6 shadow-none lg:w-[623px]">
					<div class="flex items-center gap-3">
						<div class="flex shrink-0 items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5157 2.17029C12.2265 1.89636 11.7735 1.89636 11.4843 2.17029C9.46752 4.08026 6.74624 5.25059 3.75 5.25059C3.70233 5.25059 3.65473 5.2503 3.60721 5.24971C3.27984 5.24564 2.98767 5.45439 2.88541 5.7654C2.47287 7.02016 2.25 8.36012 2.25 9.75064C2.25 15.6927 6.31406 20.6836 11.8131 22.0989C11.9357 22.1305 12.0643 22.1305 12.1869 22.0989C17.6859 20.6836 21.75 15.6927 21.75 9.75064C21.75 8.36012 21.5271 7.02016 21.1146 5.7654C21.0123 5.45439 20.7202 5.24564 20.3928 5.24971C20.3453 5.2503 20.2977 5.25059 20.25 5.25059C17.2538 5.25059 14.5325 4.08026 12.5157 2.17029ZM15.6103 10.1864C15.8511 9.84936 15.773 9.38095 15.4359 9.14019C15.0989 8.89943 14.6305 8.9775 14.3897 9.31456L11.1543 13.8441L9.53033 12.2202C9.23744 11.9273 8.76256 11.9273 8.46967 12.2202C8.17678 12.5131 8.17678 12.9879 8.46967 13.2808L10.7197 15.5308C10.8756 15.6867 11.0921 15.7661 11.3119 15.7479C11.5316 15.7297 11.7322 15.6158 11.8603 15.4364L15.6103 10.1864Z" fill="#E2231B"/>
							</svg>
						</div>
						<h4 class="font-display text-xl font-bold uppercase leading-7 tracking-tighter text-black md:text-xl md:leading-8 lg:text-2xl lg:leading-8"><?php echo esc_html( get_field( 'home_contact_section_governance_title' ) ); ?></h4>
					</div>
					<p class="body-base-500 mt-5 text-lg leading-7 text-black lg:mt-8 lg:text-xl lg:leading-7"><?php echo esc_html( get_field( 'home_contact_section_governance_description' ) ); ?></p>
				</article>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

