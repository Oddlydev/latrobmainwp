<?php
/**
 * Template Name: Home
 * Template Post Type: page
 *
 * @package latrobeweb
 */

get_header();

$hero_image_count = 5;


$hero_highlights = array(
	array( 'title' => 'Real-time', 'description' => 'Assessment documentation', 'icon' => 'clipboard' ),
	array( 'title' => 'Secure', 'description' => 'Role-based nurse access', 'icon' => 'mail' ),
	array( 'title' => 'Analytics', 'description' => 'Patient outcome tracking', 'icon' => 'target' ),
	array( 'title' => 'AI-First', 'description' => 'Built for intelligent care', 'icon' => 'document' ),
);

$about_feature_cards = array(
	array( 'title' => 'Research Objective', 'description' => 'Develop and validate an AI-powered screening tool that identifies aged care residents with unmet palliative care needs earlier and more accurately than current practice.', 'icon' => 'target' ),
	array( 'title' => 'Target Population', 'description' => 'Residents of Australian residential aged care facilities, with a focus on those with complex chronic conditions, dementia, and advanced frailty.', 'icon' => 'users' ),
	array( 'title' => 'Methodology', 'description' => 'Mixed-methods approach combining clinical data analysis, machine learning model development, and co-design with aged care staff, residents, and families.', 'icon' => 'microscope' ),
	array( 'title' => 'Expected Outcome', 'description' => 'An AI first evidence based prototype for aged care providers to support policy recommendations for palliative care identification in residential and community settings.', 'icon' => 'clipboard' ),
);

$core_feature_cards = array(
	array( 'id' => 'dashboard-primary', 'src' => latrobeweb_asset_uri( 'images/core-features/1.svg' ), 'alt' => 'PCAT overview dashboard', 'left' => 39.92, 'top' => 3.34, 'width' => 27.03, 'height' => 53.06, 'class' => 'z-[9]', 'shadow' => 'large', 'kind' => 'dashboard', 'primary' => true, 'reveal_order' => -1 ),
	array( 'id' => 'dashboard-secondary', 'src' => latrobeweb_asset_uri( 'images/core-features/2.svg' ), 'alt' => 'PCAT patient list dashboard', 'left' => 11.1, 'top' => 37.5, 'width' => 27.09, 'height' => 57.94, 'class' => 'z-[8]', 'shadow' => 'large', 'kind' => 'dashboard', 'primary' => false, 'reveal_order' => 5 ),
	array( 'id' => 'dashboard-tertiary', 'src' => latrobeweb_asset_uri( 'images/core-features/3.svg' ), 'alt' => 'PCAT patient profile dashboard', 'left' => 71.89, 'top' => 37.5, 'width' => 27.03, 'height' => 57.94, 'class' => 'z-[7]', 'shadow' => 'large', 'kind' => 'dashboard', 'primary' => false, 'reveal_order' => 6 ),
	array( 'id' => 'photo-hug', 'src' => latrobeweb_asset_uri( 'images/core-features/4.png' ), 'alt' => 'Nurse comforting an older patient', 'left' => 1.39, 'top' => -1.49, 'width' => 20.54, 'height' => 32.59, 'class' => 'z-[6]', 'shadow' => 'small', 'kind' => 'photo', 'primary' => false, 'reveal_order' => 0, 'image_class' => 'la-core-feature-img--hug' ),
	array( 'id' => 'photo-portrait', 'src' => latrobeweb_asset_uri( 'images/core-features/5.png' ), 'alt' => 'Portrait of an older patient', 'left' => -0.25, 'top' => 40, 'width' => 8.95, 'height' => 53.06, 'class' => 'z-[5]', 'shadow' => 'small', 'kind' => 'photo', 'primary' => false, 'reveal_order' => 4, 'image_class' => 'la-core-feature-img--portrait' ),
	array( 'id' => 'photo-exam', 'src' => latrobeweb_asset_uri( 'images/core-features/6.png' ), 'alt' => 'Nurse checking an older patient', 'left' => 23.32, 'top' => 3.34, 'width' => 16.29, 'height' => 34.54, 'class' => 'z-[4]', 'shadow' => 'small', 'kind' => 'photo', 'primary' => false, 'reveal_order' => 1 ),
	array( 'id' => 'photo-bench', 'src' => latrobeweb_asset_uri( 'images/core-features/7.png' ), 'alt' => 'Nurse sitting with an older patient outdoors', 'left' => 37.84, 'top' => 54.9, 'width' => 19.1, 'height' => 35.93, 'class' => 'z-[6]', 'shadow' => 'small', 'kind' => 'photo', 'primary' => false, 'reveal_order' => 7 ),
	array( 'id' => 'photo-wheelchair', 'src' => latrobeweb_asset_uri( 'images/core-features/8.png' ), 'alt' => 'Care team supporting an older patient in a wheelchair', 'left' => 59.2, 'top' => 66.5, 'width' => 13.38, 'height' => 25.07, 'class' => 'z-[5]', 'shadow' => 'small', 'kind' => 'photo', 'primary' => false, 'reveal_order' => 8 ),
	array( 'id' => 'photo-smile', 'src' => latrobeweb_asset_uri( 'images/core-features/9.png' ), 'alt' => 'Nurse smiling with an older patient', 'left' => 67.49, 'top' => 6.96, 'width' => 24.48, 'height' => 26.32, 'class' => 'z-[5]', 'shadow' => 'small', 'kind' => 'photo', 'primary' => false, 'reveal_order' => 2 ),
	array( 'id' => 'photo-hands', 'src' => latrobeweb_asset_uri( 'images/core-features/10.png' ), 'alt' => 'Close-up of hands in care support', 'left' => 93.66, 'top' => -7, 'width' => 7.34, 'height' => 27.86, 'class' => 'z-[7]', 'shadow' => 'small', 'kind' => 'photo', 'primary' => false, 'reveal_order' => 3 ),
);

$how_it_works_cards = array(
	array( 'title' => 'Research-Validated Assessments', 'description' => 'Complete structured palliative care assessments built on peer-reviewed methodology. Forms are standardised, auto-timestamped, and designed so no critical clinical indicator is ever overlooked.', 'icon' => 'document' ),
	array( 'title' => 'Risk Flagging & Escalation', 'description' => 'Assessment responses automatically surface risk indicators and suggest appropriate clinical actions. Senior nurses and administrators can filter all patients by risk level, ensuring priority cases are always visible.', 'icon' => 'warning' ),
	array( 'title' => 'AI-First Design', 'description' => 'PCAT is architected from the ground up to integrate AI capabilities - enabling future features like predictive risk scoring, clinical trend analysis, and intelligent decision support.', 'icon' => 'brain' ),
	array( 'title' => 'Trend Monitoring', 'description' => 'Visualise a patient\'s assessment score history and a model-generated 48-hour forecast - giving nurses an early signal of deterioration before it becomes critical.', 'icon' => 'trend' ),
	array( 'title' => 'Multi-Centre Support', 'description' => 'PCAT supports multiple aged care centres under the same programme. Each nurse sees only the patients assigned to their facility, while coordinators retain a cross-centre overview.', 'icon' => 'building' ),
	array( 'title' => 'Secure Access', 'description' => 'Nurses and administrators operate within tailored permission sets. Full audit logging ensures accountability, and all patient data is protected behind authenticated, encrypted access.', 'icon' => 'shield' ),
);

$steps = array(
	array( 'id' => 's1', 'number' => '01', 'title' => 'Log in securely', 'description' => 'Use your PCAT credentials to access the portal. Your assigned facility and patient list load automatically upon sign-in.', 'side' => 'left', 'icon' => 'lock-26' ),
	array( 'id' => 's2', 'number' => '02', 'title' => 'Select your patient', 'description' => 'Browse your patient list filtered by risk level, recent activity, or name. High-priority patients are surfaced immediately.', 'side' => 'right', 'icon' => 'search-26' ),
	array( 'id' => 's3', 'number' => '03', 'title' => 'Complete the assessment', 'description' => 'Work through the structured, research-validated assessment form. Guided prompts ensure every clinical indicator is captured.', 'side' => 'left', 'icon' => 'checklist-26' ),
	array( 'id' => 's4', 'number' => '04', 'title' => 'Review suggested actions', 'description' => 'Based on the assessment responses, PCAT surfaces recommended clinical actions and flags risk indicators.', 'side' => 'right', 'icon' => 'bell-26' ),
	array( 'id' => 's5', 'number' => '05', 'title' => 'View Trends & Predictive Analysis', 'description' => 'Examine an interactive chart showing the patient\'s assessment score history over the past 7 days, alongside a model-generated trend forecast.', 'side' => 'left', 'icon' => 'trend-26' ),
	array( 'id' => 's6', 'number' => '06', 'title' => 'Hand over seamlessly', 'description' => 'At the end of each shift, PCAT compiles an up-to-date summary of each patient\'s status, recent assessments, and outstanding actions.', 'side' => 'right', 'icon' => 'node-26' ),
);

$team_members = array(
	array( 'eyebrow' => 'Principal Investigator', 'title' => 'Prof. Hanan Khalil', 'description' => 'Lead researcher and grant recipient. Professor in the School of Psychology and Public Health, with expertise in evidence synthesis, aged care, and health services research.', 'footer' => 'La Trobe University - School of Psychology and Public Health' ),
	array( 'eyebrow' => 'Project Lead', 'title' => 'Dr. Urooj Raza Khan', 'description' => 'Leading the project management, ensuring seamless execution, cross-functional collaboration, and alignment with grant requirements across all stakeholders.', 'footer' => 'La Trobe University' ),
	array( 'eyebrow' => 'Business Analysis', 'title' => 'Pasindu Galgomuwa', 'description' => 'Bridging the gap between clinical requirements and technical implementation, translating research needs into the platform\'s digital architecture.', 'footer' => 'La Trobe University' ),
	array( 'eyebrow' => 'Co-Investigators', 'title' => 'Research Team', 'description' => 'A multidisciplinary team spanning clinical informatics, palliative medicine, aged care nursing, and health technology design.', 'footer' => 'La Trobe University - ARIIA' ),
	array( 'eyebrow' => 'Clinical Advisors', 'title' => 'Advisory Committee', 'description' => 'Aged care providers, specialists, consumer representatives, and family advocates who co-design and validate PCAT.', 'footer' => 'Partner Organisations' ),
	array( 'eyebrow' => 'Platform Engineering', 'title' => 'ODDLY Global', 'description' => 'Technical partner responsible for the end-to-end platform design, UI/UX architecture, and software engineering of the PCAT application.', 'footer' => 'Technology Partner' ),
);

$support_cards = array(
	array( 'label' => 'Host institution', 'logo' => latrobeweb_asset_uri( 'images/la-trobe-university-1.svg' ), 'alt' => 'La Trobe University logo' ),
	array( 'label' => 'Funding partner', 'logo' => latrobeweb_asset_uri( 'images/ariia-logo-1.svg' ), 'alt' => 'ARIIA logo' ),
	array( 'label' => 'Healthcare partner', 'logo' => latrobeweb_asset_uri( 'images/monash-health-logo_dark-1.svg' ), 'alt' => 'Monash Health logo' ),
);

$faq_filters = array(
	array( 'slug' => 'about-pcat', 'label' => 'About PCAT' ),
	array( 'slug' => 'who-its-for', 'label' => "Who it's for" ),
	array( 'slug' => 'using-the-tool', 'label' => 'Using the tool' ),
	array( 'slug' => 'data-privacy-security', 'label' => 'Data, privacy and security' ),
	array( 'slug' => 'implementation-support', 'label' => 'Implementation and support' ),
	array( 'slug' => 'evidence-research', 'label' => 'Evidence and research' ),
	array( 'slug' => 'contact', 'label' => 'Contact' ),
);

$faq_items = array(
	array(
		'title'      => 'What is PCAT?',
		'content'    => 'PCAT (Palliative Care Assessment Toolkit) is an AI-powered, web-based clinical decision-support tool developed by La Trobe University. It helps nurses and frontline staff systematically identify residents who may benefit from palliative care and evaluate their needs using evidence-based assessment frameworks.',
		'categories' => array( 'about-pcat' ),
	),
	array(
		'title'      => 'Who developed PCAT?',
		'content'    => 'PCAT was developed by a research team at La Trobe University\'s School of Psychology and Public Health, led by Professor Hanan Khalil and her team, in partnership with Sunraysia Community Health Services and Monash Health. The digital AI-powered version is funded through an ARIIA (Aged Care Research and Industry Innovation Australia) accelerator grant.',
		'categories' => array( 'about-pcat' ),
	),
	array(
		'title'      => 'What does the "AI-powered" part of PCAT actually do?',
		'content'    => 'The AI component supports clinicians by analysing the information entered during an assessment, prioritising patients by urgency and care needs, prompting users to capture key clinical indicators of decline, and generating structured summaries that support care planning and communication with families and GPs.',
		'categories' => array( 'about-pcat' ),
	),
	array(
		'title'      => 'Which clinical frameworks underpin PCAT?',
		'content'    => 'PCAT integrates well-established palliative care assessment frameworks, including SPICT™ (Supportive and Palliative Care Indicators Tool) and Palliative Care Needs Rounds, to ensure assessments are standardised and evidence-based.',
		'categories' => array( 'about-pcat' ),
	),
	array(
		'title'      => 'Who is PCAT designed for?',
		'content'    => 'PCAT is designed for the aged care workforce as well as community settings - registered nurses, enrolled nurses, personal care workers, clinical managers, and allied health staff working in residential aged care facilities. It is particularly valuable for rural and regional facilities where access to specialist palliative care is limited.',
		'categories' => array( 'who-its-for' ),
	),
	array(
		'title'      => 'Do I need a clinical background to use PCAT?',
		'content'    => 'PCAT is intended for staff with a clinical role. Some sections are suitable for personal care workers to contribute observations, while clinical decision-making sections are designed to be completed by nursing staff or clinical leads.',
		'categories' => array( 'who-its-for' ),
	),
	array(
		'title'      => 'Can GPs, pharmacists, and community palliative care nurses use PCAT?',
		'content'    => 'Yes. PCAT is built around a multidisciplinary approach. GPs, pharmacists and community palliative care teams can contribute to and access assessments to support coordinated care planning.',
		'categories' => array( 'who-its-for' ),
	),
	array(
		'title'      => 'How long does an assessment take?',
		'content'    => 'A typical PCAT assessment is designed to be significantly faster than traditional paper-based palliative care assessments. Most assessments can be completed in around 10-15 minutes, with the AI reducing administrative burden by pre-populating and summarising information.',
		'categories' => array( 'using-the-tool' ),
	),
	array(
		'title'      => 'What outcomes does PCAT help deliver?',
		'content'    => 'PCAT aims to support earlier identification of residents approaching end-of-life, reduce avoidable hospital transfers, improve symptom management, strengthen communication with families, and support more person-centred end-of-life care.',
		'categories' => array( 'using-the-tool' ),
	),
	array(
		'title'      => 'Is PCAT a substitute for clinical judgement?',
		'content'    => 'No. PCAT is a decision-support tool using AI for prediction keeping human-in-the-loop. It guides and prompts clinicians but does not replace clinical judgement, specialist palliative care advice, or shared decision-making with residents and families.',
		'categories' => array( 'using-the-tool' ),
	),
	array(
		'title'      => 'Can assessments be updated over time?',
		'content'    => 'Yes. PCAT supports repeat assessments so care teams can track changes in a resident\'s condition, adjust care plans, and document trajectory of decline over time.',
		'categories' => array( 'using-the-tool' ),
	),
	array(
		'title'      => 'Is resident information kept secure?',
		'content'    => 'Yes. PCAT is built to comply with Australian privacy and health information standards, including the Privacy Act 1988 and relevant aged care data governance requirements. All data is encrypted in transit and at rest.',
		'categories' => array( 'data-privacy-security' ),
	),
	array(
		'title'      => 'Who can see the information I enter?',
		'content'    => 'Access is role-based. Only authorised staff within your facility (and, where applicable, linked multidisciplinary team members such as GPs) can view resident assessments.',
		'categories' => array( 'data-privacy-security' ),
	),
	array(
		'title'      => 'Is resident data used to train the AI?',
		'content'    => 'Identifiable resident data is not used to train commercial AI models. Any model improvement work is conducted under ethics-approved research protocols using de-identified data.',
		'categories' => array( 'data-privacy-security' ),
	),
	array(
		'title'      => 'How does a facility get started with PCAT?',
		'content'    => 'Facilities can register their interest through the La Trobe University PCAT team. Onboarding includes user account setup, staff training on using the tool, and ongoing implementation support.',
		'categories' => array( 'implementation-support' ),
	),
	array(
		'title'      => 'Is there a cost to use PCAT?',
		'content'    => 'During the current research and co-design phase, PCAT is being offered to participating facilities as part of the ARIIA-funded project. Longer-term pricing and licensing arrangements will be communicated as the tool moves towards full rollout.',
		'categories' => array( 'implementation-support' ),
	),
	array(
		'title'      => 'What support is available once we\'re using PCAT?',
		'content'    => 'Participating facilities receive ongoing support from the La Trobe research team and regular check-ins during the implementation period.',
		'categories' => array( 'implementation-support' ),
	),
	array(
		'title'      => 'Is PCAT evidence-based?',
		'content'    => 'Yes. The original PCAT was evaluated in rural aged care facilities and demonstrated measurable improvements in end-of-life care planning, medication availability, and psychological and spiritual support, along with increased staff confidence. The digital AI-powered version builds directly on that evidence base.',
		'categories' => array( 'evidence-research' ),
	),
	array(
		'title'      => 'Can our facility participate in PCAT research?',
		'content'    => 'Yes. La Trobe University welcomes expressions of interest from aged care providers interested in co-design, pilot testing, or implementation research. Contact the research team for more information.',
		'categories' => array( 'evidence-research' ),
	),
	array(
		'title'      => 'Who do I contact for more information?',
		'content'    => 'For enquiries about PCAT, including partnership, implementation, or research collaboration, please contact Professor Hanan Khalil at La Trobe University: <a href="mailto:h.khalil@latrobe.edu.au">h.khalil@latrobe.edu.au</a>.',
		'categories' => array( 'contact' ),
	),
);
?>

<main class="overflow-hidden bg-gray-50 lg:bg-white">
	<section id="top" class="scroll-mt-24">
		<div class="la-home-hero-shell">
			<img
				src="<?php echo esc_url( latrobeweb_asset_uri( 'images/hero-images/hero-light-1.png' ) ); ?>"
				data-random-hero
				data-storage-key="latrobeweb-home-hero-desktop"
				data-image-count="<?php echo esc_attr( $hero_image_count ); ?>"
				data-image-template="<?php echo esc_attr( latrobeweb_asset_uri( 'images/hero-images/hero-light-%d.png' ) ); ?>"
				alt=""
				aria-hidden="true"
				class="la-home-hero-image-desktop absolute hidden lg:block"
			/>
			<div aria-hidden="true" class="la-home-hero-accent-right"></div>
			<div aria-hidden="true" class="la-home-hero-accent-left"></div>
			<div aria-hidden="true" class="la-home-hero-wash"></div>
			<div aria-hidden="true" class="la-home-hero-top-fade"></div>
                        <div class="relative z-10 px-6 pt-10 pb-0 md:px-10 md:pt-10 md:pb-0 lg:max-w-[616px] lg:pr-10 lg:pt-[11.0625rem] lg:pb-[11.0625rem] lg:pl-[9.375rem]">
				<div class="w-full">
					<p class="body-xs-500 md:body-base-500 inline-flex max-w-full items-center gap-2 whitespace-normal rounded-full border border-gray-300 bg-white px-4 py-2 text-black shadow-sm">
						<span class="la-hero-status-dot h-2.5 w-2.5 rounded-full bg-green-500"></span>
						<?php echo esc_html( get_field( 'home_hero_section_label_text' ) ); ?>
					</p>
					<div class="mt-5 space-y-4 md:mt-5 md:space-y-5 lg:mt-12 lg:space-y-6">
						<h1 class="la-home-hero-title">
							<span class="block whitespace-nowrap"><?php echo esc_html( get_field( 'home_hero_section_title' ) ); ?></span>
							<span class="mt-1 block whitespace-nowrap text-brand-1 md:mt-0 md:inline lg:block"><?php echo esc_html( get_field( 'home_hero_section_title_highlighted_text' ) ); ?></span>
						</h1>
						<p class="body-base-400 max-w-full pt-0 text-gray-600 md:w-full md:max-w-full md:pt-0 lg:w-[616px] lg:max-w-[616px] lg:pt-0">
							<?php echo esc_html( get_field( 'home_hero_section_description' ) ); ?>
						</p>
					</div>
				</div>
				<div class="la-home-hero-cta">
					<?php
					latrobeweb_component(
						'button',
						array(
							'href'          => get_field( 'home_hero_section_button_one_link' ),
							'label'         => 'Access PCAT Tool',
							'variant'       => 'la-button-primary-light-icon-right',
							'class_name'    => 'la-button-home',
							'icon'          => latrobeweb_get_icon_markup( 'arrow' ),
							'icon_position' => 'after',
						)
					);
					latrobeweb_component(
						'button',
						array(
							'href'       => get_field( 'home_hero_section_button_two_link' ),
							'label'      => 'Learn more',
							'variant'    => 'la-button-secondary-light',
							'class_name' => 'la-button-home',
						)
					);
					?>
				</div>
			</div>
			<div class="relative overflow-hidden md:hidden">
				<img
					src="<?php echo esc_url( latrobeweb_asset_uri( 'images/hero-images/mobile/hero-light-1.png' ) ); ?>"
					data-random-hero
					data-storage-key="latrobeweb-home-hero-mobile"
					data-image-count="<?php echo esc_attr( $hero_image_count ); ?>"
					data-image-template="<?php echo esc_attr( latrobeweb_asset_uri( 'images/hero-images/mobile/hero-light-%d.png' ) ); ?>"
					alt=""
					aria-hidden="true"
					class="block h-auto w-full object-cover object-center"
				/>
			</div>
			<div class="relative hidden overflow-hidden md:block lg:hidden">
				<img
					src="<?php echo esc_url( latrobeweb_asset_uri( 'images/hero-images/tablet/hero-ligh-tab-1.png' ) ); ?>"
					data-random-hero
					data-storage-key="latrobeweb-home-hero-tablet"
					data-image-count="<?php echo esc_attr( $hero_image_count ); ?>"
					data-image-template="<?php echo esc_attr( latrobeweb_asset_uri( 'images/hero-images/tablet/hero-ligh-tab-%d.png' ) ); ?>"
					alt=""
					aria-hidden="true"
					class="block h-auto w-full object-cover object-center"
				/>
			</div>
			<div class="relative bg-brand-3 p-3.5 md:p-5 lg:p-7">
                                <div class="grid gap-3 md:inline-grid md:w-full md:grid-cols-2 md:grid-rows-2 md:gap-3 lg:gap-5 xl:grid-cols-4 xl:grid-rows-1">
					<?php foreach ( $hero_highlights as $item ) : ?>
						<?php latrobeweb_component( 'card', array( 'variant' => 'type-1', 'icon' => latrobeweb_get_icon_markup( $item['icon'] ), 'title' => $item['title'], 'description' => $item['description'] ) ); ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="mx-auto w-full px-6 pt-10 sm:max-w-[680px] sm:px-0 md:pt-10 lg:max-w-[1295px] lg:pt-20">
		<span id="about" class="block scroll-mt-4" aria-hidden="true"></span>
		<?php
		latrobeweb_render_section_header(
			array(
				'eyebrow'       => get_field( 'home_intro_section_label_text' ) ?: 'About the project',
				'title'         => get_field( 'home_intro_section_title' ) ?: 'Identifying palliative care needs - earlier, and with confidence',
				'eyebrow_class' => 'm-0 text-red-600',
				'title_class'   => 'mb-5 block max-w-[695px] md:mb-7 lg:mb-12 mt-2',
				'class_name'    => 'max-w-[695px]',
			)
		);
		?>
                <div class="grid gap-5 md:gap-7 lg:grid-cols-2 lg:gap-12">
                        <div class="space-y-7">
				<p class="body-base-400 max-w-[695px] text-gray-700 md:text-gray-500"><?php echo esc_html( get_field( 'home_intro_section_description' ) ); ?></p>
				<div class="rounded-xl border border-red-200 bg-transparent p-6 lg:bg-white">
					<p class="body-base-600 text-lg text-black lg:text-xl lg:leading-7"><?php echo esc_html( get_field( 'home_intro_section_highlight_text' ) ); ?></p>
				</div>
			</div>
			<div class="overflow-hidden rounded-[1.25rem] border border-gray-300 bg-surface-card-soft shadow-none backdrop-blur-[2px]">
                                <div class="grid grid-cols-[132px_minmax(0,1fr)] items-center gap-9 px-5 py-6 md:grid-cols-[180px_minmax(0,1fr)] lg:grid-cols-[auto_minmax(0,1fr)] lg:px-8 lg:py-10"><p class="body-base-600 text-lg leading-7 tracking-tighter text-gray-600 uppercase">Project title</p><p class="body-base-400 w-full justify-self-end text-right text-black md:text-xl md:leading-8">PCAT for Aged Care</p></div>
                                <div class="grid grid-cols-[132px_minmax(0,1fr)] items-center gap-9 border-t border-gray-200 px-5 py-6 md:grid-cols-[180px_minmax(0,1fr)] lg:grid-cols-[auto_minmax(0,1fr)] lg:px-8 lg:py-10"><p class="body-base-600 text-lg leading-7 tracking-tighter text-gray-600 uppercase">Funding</p><p class="body-base-400 w-full justify-self-end text-right text-black md:text-xl md:leading-8">The Aged Care Research and Industry Innovation Australia fund (ARIIA)</p></div>
                                <div class="grid grid-cols-[132px_minmax(0,1fr)] items-center gap-9 border-t border-gray-200 px-5 py-6 md:grid-cols-[180px_minmax(0,1fr)] lg:grid-cols-[auto_minmax(0,1fr)] lg:px-8 lg:py-10"><p class="body-base-600 text-lg leading-7 tracking-tighter text-gray-600 uppercase">Institution</p><p class="body-base-400 w-full justify-self-end text-right text-black md:text-xl md:leading-8">La Trobe University</p></div>
			</div>
		</div>
	</section>

	<section class="border-b border-ink-faint pt-5 pb-0 md:pt-7 md:pb-10 lg:pt-12 lg:pb-20">
		<div class="mx-auto w-full px-6 sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
			<div class="grid gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-6">
				<?php foreach ( $about_feature_cards as $item ) : ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'type-2', 'class_name' => 'h-full', 'icon' => latrobeweb_get_icon_markup( $item['icon'] ), 'title' => $item['title'], 'description' => $item['description'] ) ); ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="pt-10 pb-5 md:pt-10 md:pb-7 lg:pt-20 lg:pb-12">
		<span id="features" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="mx-auto w-full px-6 sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
			<div class="space-y-5 md:space-y-7 lg:space-y-12">
				<?php latrobeweb_render_section_header( array( 'eyebrow' => 'Core Features', 'title' => "Everything nurses need, nothing they don't", 'eyebrow_class' => 'text-red-600', 'title_class' => 'lg:max-w-xl' ) ); ?>
				<div class="la-core-feature-stage aspect-[4/3] sm:aspect-[1295/718]" data-core-feature-gallery data-reveal-count="9">
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--top inset-x-0 top-0 h-20"></div>
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--right inset-y-0 right-0 w-20"></div>
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--bottom inset-x-0 bottom-0 h-20"></div>
					<div aria-hidden="true" class="la-core-feature-glow la-core-feature-glow--left inset-y-0 left-0 w-20"></div>
					<?php foreach ( $core_feature_cards as $card ) : ?>
						<article class="absolute <?php echo esc_attr( $card['class'] ); ?>" style="left:<?php echo esc_attr( $card['left'] ); ?>%;top:<?php echo esc_attr( $card['top'] ); ?>%;width:<?php echo esc_attr( $card['width'] ); ?>%;height:<?php echo esc_attr( $card['height'] ); ?>%;">
							<div
								class="la-core-feature-shell <?php echo $card['primary'] ? 'la-core-feature-shell--visible' : 'la-core-feature-shell--hidden'; ?> relative h-full w-full overflow-hidden rounded-sm border-[5px] border-white bg-transparent <?php echo 'large' === $card['shadow'] ? 'la-core-feature-shell--large' : 'la-core-feature-shell--small'; ?>"
								data-core-feature-card
								data-card-id="<?php echo esc_attr( $card['id'] ); ?>"
								data-reveal-order="<?php echo esc_attr( $card['reveal_order'] ); ?>"
								data-primary="<?php echo $card['primary'] ? 'true' : 'false'; ?>"
							>
								<div class="la-core-feature-clip la-core-feature-clip--r4 relative h-full min-h-0 w-full min-w-0 overflow-hidden rounded-none">
									<div class="la-core-feature-motion <?php echo $card['primary'] ? 'la-core-feature-motion--primary' : 'la-core-feature-motion--secondary'; ?> relative h-full w-full">
										<img src="<?php echo esc_url( $card['src'] ); ?>" alt="<?php echo esc_attr( $card['alt'] ); ?>" class="la-core-feature-img <?php echo 'photo' === $card['kind'] ? 'la-core-feature-img--photo' : 'la-core-feature-img--dashboard'; ?> <?php echo isset( $card['image_class'] ) ? esc_attr( $card['image_class'] ) : ''; ?> pointer-events-none absolute inset-0 z-0 box-border h-full w-full max-w-none select-none object-cover object-center" draggable="false" />
									</div>
								</div>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="border-b border-ink-faint pb-0 md:pb-20">
		<div class="mx-auto w-full px-6 sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
			<div class="grid gap-5 md:grid-cols-2 lg:gap-6 xl:grid-cols-3">
				<?php foreach ( $how_it_works_cards as $item ) : ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'type-3', 'class_name' => 'h-full', 'icon' => latrobeweb_get_icon_markup( $item['icon'] ), 'title' => $item['title'], 'description' => $item['description'] ) ); ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="la-how-it-works-section pt-10 pb-0 md:py-10 lg:py-20">
		<div class="mx-auto w-full px-6 sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
			<span id="how-it-works" class="block scroll-mt-4" aria-hidden="true"></span>
			<div class="relative overflow-hidden" data-how-it-works data-how-marker-ratio="0.72">
				<?php latrobeweb_render_section_header( array( 'eyebrow' => 'How It Works', 'title' => 'From login to care record in minutes', 'eyebrow_class' => 'text-brand-1', 'centered' => true, 'class_name' => 'relative z-10 mb-5 sm:mb-7 lg:mb-12' ) ); ?>
				<div class="relative z-10">
					<div class="la-how-track absolute top-6 bottom-6 left-6 w-0.5 rounded-full bg-red-100 md:top-5 md:bottom-5 md:left-5 lg:left-1/2 lg:top-6 lg:bottom-6 lg:w-1 lg:-translate-x-1/2" data-how-it-works-track aria-hidden="true">
						<div class="la-how-track-fill w-full rounded-full bg-brand-1 transition-[height] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-[height]" data-how-it-works-fill></div>
					</div>
					<div class="space-y-10 md:space-y-10 lg:space-y-16">
						<?php foreach ( $steps as $index => $step ) : ?>
							<?php $is_left = 'left' === $step['side']; ?>
							<div class="la-how-step-row relative grid grid-cols-[auto_1fr] items-center gap-x-5 lg:mx-auto lg:w-fit lg:grid-cols-[462px_168px_462px] lg:items-center lg:gap-0" data-how-it-works-step-row data-how-step-side="<?php echo $is_left ? 'left' : 'right'; ?>">
								<div class="la-how-step-marker z-20 col-start-1 row-start-1 flex h-12 w-12 items-center justify-center rounded-full border-2 border-brand-1 bg-white text-brand-1 transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] [&_svg]:h-6 [&_svg]:w-6 md:h-10 md:w-10 md:[&_svg]:h-5 md:[&_svg]:w-5 lg:absolute lg:left-1/2 lg:top-1/2 lg:h-14 lg:w-14 lg:-translate-x-1/2 lg:-translate-y-1/2 lg:border-[3px] lg:[&_svg]:h-[26px] lg:[&_svg]:w-[26px]" data-how-it-works-step>
									<?php echo wp_kses( latrobeweb_get_icon_markup( $step['icon'] ), latrobeweb_get_svg_allowed() ); ?>
								</div>
								<article class="la-how-step-card col-start-2 row-start-1 min-w-0 w-full rounded-lg px-0 py-0 text-left transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform lg:py-5 <?php echo $is_left ? 'lg:col-start-1 lg:pl-5 lg:pr-0 lg:text-right' : 'lg:col-start-3 lg:pl-0 lg:pr-5 lg:text-left'; ?>">
									<div class="flex w-full items-baseline gap-3 font-display text-black lg:inline-grid lg:w-auto lg:grid-cols-[auto_minmax(0,1fr)] lg:gap-x-3 <?php echo $is_left ? 'lg:ml-auto lg:text-right' : 'lg:text-left'; ?>">
										<span class="shrink-0 text-right font-display text-xl font-light leading-7 tracking-tighter text-gray-500"><?php echo esc_html( $step['number'] ); ?></span>
										<h4 class="font-display text-xl font-bold leading-7 tracking-tighter text-black md:text-xl md:leading-8 lg:text-2xl lg:leading-8"><?php echo esc_html( $step['title'] ); ?></h4>
									</div>
									<p class="mt-3 font-display text-lg font-normal leading-6 tracking-normal text-gray-500 <?php echo $is_left ? 'lg:ml-auto' : ''; ?>"><?php echo esc_html( $step['description'] ); ?></p>
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
		<div class="mx-auto w-full px-6 sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
			<?php latrobeweb_render_section_header( array( 'eyebrow' => 'Research team', 'title' => 'The people behind PCAT', 'eyebrow_class' => 'text-brand-1', 'title_class' => 'mb-0 max-w-[600px]', 'class_name' => 'max-w-2xl' ) ); ?>
                        <div class="mt-5 grid gap-5 md:mt-7 md:grid-cols-2 md:gap-x-5 md:gap-y-5 lg:mt-12 lg:gap-6 xl:grid-cols-3">
				<?php foreach ( $team_members as $member ) : ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'team', 'eyebrow' => $member['eyebrow'], 'title' => $member['title'], 'description' => $member['description'], 'footer' => $member['footer'] ) ); ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="border-t border-slate-200 border-b py-10 md:py-10 lg:py-20">
		<div class="mx-auto w-full px-6 sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
			<?php latrobeweb_render_section_header( array( 'eyebrow' => 'Funding & Governance', 'title' => 'Supported by', 'lead' => 'PCAT is supported by La Trobe University, Aged Care Research and Industry Innovation Australia (ARIIA) and Monash Health.', 'eyebrow_class' => 'text-red-600', 'lead_class' => 'mx-auto mt-4 max-w-[550px] text-center', 'centered' => true, 'class_name' => 'max-w-5xl' ) ); ?>
                        <div class="mt-5 grid gap-5 md:mt-7 md:grid-cols-2 md:gap-5 lg:mt-12 lg:gap-6 xl:grid-cols-3">
                                <?php foreach ( $support_cards as $item ) : ?>
                                        <article class="group bg-surface-card-hover flex flex-col items-center gap-0 rounded-2xl border border-gray-200 py-[47px] text-center">
                                                <div class="flex h-20 items-center justify-center pb-[30px]">
                                                        <img src="<?php echo esc_url( $item['logo'] ); ?>" alt="<?php echo esc_attr( $item['alt'] ); ?>" class="w-auto transition-transform duration-300 ease-out group-hover:scale-105" />
                                                </div>
                                                <p class="body-base-500 text-center uppercase text-gray-500"><?php echo esc_html( $item['label'] ); ?></p>
                                        </article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="la-home-faq-section mx-auto w-full px-6 py-10 sm:max-w-[680px] sm:px-0 md:py-10 lg:max-w-[1295px] lg:py-20">
		<span id="faq" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="la-home-faq-stack space-y-5 md:space-y-7 lg:space-y-12">
			<?php latrobeweb_render_section_header( array( 'eyebrow' => 'FAQ', 'title' => 'Common Questions', 'lead' => 'Everything you need to know before logging in.', 'eyebrow_class' => 'text-red-600', 'lead_class' => 'mx-auto mt-4 max-w-4xl text-center', 'centered' => true, 'class_name' => 'max-w-5xl' ) ); ?>
			<div class="w-full" data-faq-shell>
				<div class="mb-6 flex w-full items-center gap-1 overflow-hidden p-1.5 max-lg:px-0 md:mb-7 lg:mx-auto lg:mb-6 lg:max-w-[1220px] lg:p-0" data-faq-filters>
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
							<?php foreach ( $faq_filters as $filter ) : ?>
								<?php
								latrobeweb_component(
								'chip',
								array(
									'label'      => $filter['label'],
									'count'      => '0',
									'class_name' => 'shrink-0 flex-none',
									'attributes' => array(
										'data-faq-filter' => $filter['slug'],
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
				<?php latrobeweb_component( 'accordion', array( 'items' => $faq_items, 'default_open_id' => '__none__', 'class_name' => 'w-full lg:mx-auto lg:max-w-[896px]' ) ); ?>
			</div>
		</div>
	</section>

	<section class="la-home-cta-section" style="--la-cta-background-image:url('<?php echo esc_url( latrobeweb_asset_uri( 'images/black-section-bg.png' ) ); ?>');">
		<div class="mx-auto w-full px-6 text-center sm:max-w-[680px] sm:px-0 lg:max-w-[1295px]">
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
						'class_name'    => 'la-button-home',
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

	<section class="mx-auto w-full px-6 py-10 sm:max-w-[680px] sm:px-0 md:py-10 lg:max-w-[1295px] lg:py-20">
		<span id="contact" class="block scroll-mt-4" aria-hidden="true"></span>
		<div class="space-y-5 md:space-y-7 lg:space-y-12">
			<?php latrobeweb_render_section_header( array( 'eyebrow' => get_field( 'home_contact_section_label_text' ), 'title' => get_field( 'home_contact_section_title' ), 'lead' => get_field( 'home_contact_section_description' ), 'eyebrow_class' => 'text-red-600', 'lead_class' => 'max-w-[600px] pt-4', 'class_name' => 'max-w-[695px]' ) ); ?>
                        <div class="grid gap-5 md:gap-5 lg:grid-cols-[minmax(0,1fr)_minmax(320px,0.95fr)] lg:items-start lg:gap-12">
				<div class="space-y-4 md:space-y-4 lg:space-y-5">
					<?php latrobeweb_component( 'card', array( 'variant' => 'contact', 'label' => 'Email', 'value' => 'pcat@latrobe.edu.au', 'icon' => latrobeweb_get_icon_markup( 'mail' ), 'href' => 'mailto:pcat@latrobe.edu.au' ) ); ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'contact', 'label' => 'Institution', 'value' => 'latrobe.edu.au', 'icon' => latrobeweb_get_icon_markup( 'globe' ) ) ); ?>
					<?php latrobeweb_component( 'card', array( 'variant' => 'contact', 'label' => 'Location', 'value' => 'Melbourne, Victoria', 'icon' => latrobeweb_get_icon_markup( 'pin' ) ) ); ?>
				</div>
                                <article class="self-start w-full rounded-xl border border-red-200 bg-white px-6 py-6 shadow-none lg:w-[623px]">
                                        <div class="flex items-center gap-3">
                                                <div class="text-brand-1 flex h-6 w-6 shrink-0 items-center justify-center"><?php latrobeweb_render_icon( 'shield' ); ?></div>
						<h4 class="font-display text-xl font-bold uppercase leading-7 tracking-tighter text-black md:text-xl md:leading-8 lg:text-2xl lg:leading-8"><?php echo esc_html( get_field( 'home_contact_section_governance_title' ) ); ?></h4>
					</div>
					<p class="body-base-500 mt-5 text-lg leading-7 text-black lg:mt-8 lg:text-xl lg:leading-7"><?php echo esc_html( get_field( 'home_contact_section_governance_description' ) ); ?></p>
				</article>
			</div>
		</div>
	</section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
	const heroImages = document.querySelectorAll('[data-random-hero]');

	heroImages.forEach(function (image) {
		const storageKey = image.getAttribute('data-storage-key');
		const template = image.getAttribute('data-image-template');
		const imageCount = Number.parseInt(image.getAttribute('data-image-count') || '0', 10);

		if (!storageKey || !template || imageCount < 1) {
			return;
		}

		const previousIndex = Number.parseInt(window.localStorage.getItem(storageKey) || '', 10);
		let nextIndex = 1;

		if (imageCount > 1) {
			do {
				nextIndex = Math.floor(Math.random() * imageCount) + 1;
			} while (nextIndex === previousIndex);
		}

		image.src = template.replace('%d', String(nextIndex));
		window.localStorage.setItem(storageKey, String(nextIndex));
	});
});
</script>

<?php
get_footer();

