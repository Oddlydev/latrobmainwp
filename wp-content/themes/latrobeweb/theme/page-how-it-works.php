<?php
/**
 * Template Name: How It Works
 * Template Post Type: page
 *
 * @package latrobeweb
 */

get_header();

$steps = array(
	array( 'id' => 's1', 'number' => '01', 'title' => 'Log in securely', 'description' => 'Use your PCAT credentials to access the portal. Your assigned facility and patient list load automatically upon sign-in.', 'side' => 'left', 'icon' => 'lock-26' ),
	array( 'id' => 's2', 'number' => '02', 'title' => 'Select your patient', 'description' => 'Browse your patient list filtered by risk level, recent activity, or name. High-priority patients are surfaced immediately.', 'side' => 'right', 'icon' => 'search-26' ),
	array( 'id' => 's3', 'number' => '03', 'title' => 'Complete the assessment', 'description' => 'Work through the structured, research-validated assessment form. Guided prompts ensure every clinical indicator is captured.', 'side' => 'left', 'icon' => 'checklist-26' ),
	array( 'id' => 's4', 'number' => '04', 'title' => 'Review suggested actions', 'description' => 'Based on the assessment responses, PCAT surfaces recommended clinical actions and flags risk indicators.', 'side' => 'right', 'icon' => 'bell-26' ),
	array( 'id' => 's5', 'number' => '05', 'title' => 'View Trends & Predictive Analysis', 'description' => 'Examine an interactive chart showing the patient\'s assessment score history over the past 7 days, alongside a model-generated trend forecast.', 'side' => 'left', 'icon' => 'trend-26' ),
	array( 'id' => 's6', 'number' => '06', 'title' => 'Hand over seamlessly', 'description' => 'At the end of each shift, PCAT compiles an up-to-date summary of each patient\'s status, recent assessments, and outstanding actions.', 'side' => 'right', 'icon' => 'node-26' ),
);
?>

<main class="mx-auto w-full px-6 py-14 sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
	<section class="py-20">
		<div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 sm:p-10" style="background-image:radial-gradient(rgba(226,35,27,0.045) 1px, transparent 1px);background-size:22px 22px;" data-how-it-works data-how-marker-ratio="0.5">
			<div class="relative z-10 mb-10 text-left lg:text-center">
				<?php latrobeweb_render_section_header( array( 'eyebrow' => 'How It Works', 'title' => 'From login to care record in minutes', 'eyebrow_class' => 'text-brand-1', 'centered' => false, 'class_name' => 'lg:mx-auto lg:text-center' ) ); ?>
			</div>
			<div class="relative z-10">
				<div class="la-how-track absolute top-6 bottom-6 left-5 w-[2px] rounded-full bg-red-100 md:left-[30px] lg:top-0 lg:bottom-0 lg:left-1/2 lg:w-1 lg:-translate-x-1/2" data-how-it-works-track aria-hidden="true">
					<div class="la-how-track-fill w-full rounded-full bg-brand-1 transition-[height] duration-200 ease-out" data-how-it-works-fill></div>
				</div>
					<div class="space-y-8 lg:space-y-16">
						<?php foreach ( $steps as $index => $step ) : ?>
							<?php $is_left = 'left' === $step['side']; ?>
						<div class="la-how-step-row relative grid grid-cols-[auto_1fr] items-start gap-x-4 <?php echo $index === count( $steps ) - 1 ? 'md:pb-5' : ''; ?> lg:grid-cols-[minmax(0,1fr)_56px_minmax(0,1fr)] lg:items-center lg:gap-14 lg:pb-0" data-how-it-works-step-row data-how-step-side="<?php echo $is_left ? 'left' : 'right'; ?>">
							<div class="la-how-step-marker z-20 col-start-1 row-start-1 flex h-10 w-10 items-center justify-center rounded-full border-2 border-brand-1 bg-white text-brand-1 transition-colors duration-200 ease-out md:h-[60px] md:w-[60px] md:border-[3px] md:[&_svg]:h-[25.7px] md:[&_svg]:w-[25.7px] lg:absolute lg:left-1/2 lg:top-1/2 lg:h-14 lg:w-14 lg:-translate-x-1/2 lg:-translate-y-1/2 lg:border-[3px]" data-how-it-works-step>
								<?php echo wp_kses( latrobeweb_get_icon_markup( $step['icon'] ), latrobeweb_get_svg_allowed() ); ?>
							</div>
							<article class="la-how-step-card col-start-2 row-start-1 min-w-0 w-full rounded-lg px-1 py-0.5 text-left transition-transform duration-200 ease-out lg:px-2 lg:py-1 <?php echo $is_left ? 'origin-right hover:-translate-x-2 lg:col-start-1 lg:ml-auto lg:max-w-xl lg:text-right' : 'origin-left hover:translate-x-2 lg:col-start-3 lg:max-w-xl lg:text-left'; ?>">
								<div class="flex items-baseline gap-3 font-display text-black <?php echo $is_left ? 'justify-start lg:justify-end' : 'justify-start'; ?>">
									<span class="text-base font-light leading-6 tracking-[-0.05em] text-gray-500 lg:text-xl lg:leading-7"><?php echo esc_html( $step['number'] ); ?></span>
									<h4 class="break-words text-black"><?php echo esc_html( $step['title'] ); ?></h4>
								</div>
								<p class="mt-2 text-base font-normal leading-6 tracking-normal text-gray-500 lg:mt-3 lg:text-lg"><?php echo esc_html( $step['description'] ); ?></p>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
