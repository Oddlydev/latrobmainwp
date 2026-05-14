<?php
/**
 * Template Name: Design System
 * Template Post Type: page
 *
 * @package latrobeweb
 */

get_header();

if ( have_posts() ) {
	the_post();
}

$color_groups = array(
	array(
		'label' => 'Brand Colors',
		'items' => array(
			array( 'name' => 'Brand 1', 'value' => '#E2231B', 'class_name' => 'bg-brand-1' ),
			array( 'name' => 'Brand 2', 'value' => '#FFFFFF', 'class_name' => 'bg-brand-2' ),
			array( 'name' => 'Brand 3', 'value' => '#000000', 'class_name' => 'bg-brand-3' ),
		),
	),
	array(
		'label' => 'Secondary Colors',
		'items' => array(
			array( 'name' => 'Brand 4', 'value' => '#ECB95E', 'class_name' => 'bg-brand-4' ),
			array( 'name' => 'Brand 5', 'value' => '#827842', 'class_name' => 'bg-brand-5' ),
			array( 'name' => 'Brand 6', 'value' => '#9B6ABF', 'class_name' => 'bg-brand-6' ),
			array( 'name' => 'Brand 7', 'value' => '#E5B6C7', 'class_name' => 'bg-brand-7' ),
			array( 'name' => 'Brand 8', 'value' => '#ABBEC2', 'class_name' => 'bg-brand-8' ),
			array( 'name' => 'Brand 9', 'value' => '#1C92CC', 'class_name' => 'bg-brand-9' ),
		),
	),
	array(
		'label' => 'Gradients',
		'items' => array(
			array( 'name' => 'BG Gradient - 1', 'value' => 'bg-gradient-1', 'class_name' => 'bg-gradient-1' ),
		),
	),
);

$typography_rows = array(
	array( 'token' => 'H1', 'font' => 'DM Sans', 'weight' => 'Black', 'tailwind' => 'text-6xl', 'line_height' => '110%', 'letter_spacing' => 'tracking-normal', 'usage' => 'Page Titles' ),
	array( 'token' => 'H2', 'font' => 'DM Sans', 'weight' => 'Bold', 'tailwind' => 'text-4xl', 'line_height' => '110%', 'letter_spacing' => 'tracking-normal', 'usage' => 'Page Titles' ),
	array( 'token' => 'H3', 'font' => 'DM Sans', 'weight' => 'Black', 'tailwind' => 'text-3xl', 'line_height' => 'leading-9', 'letter_spacing' => 'tracking-tighter', 'usage' => 'Page Titles' ),
	array( 'token' => 'H4', 'font' => 'DM Sans', 'weight' => 'Bold', 'tailwind' => 'text-2xl', 'line_height' => 'leading-8', 'letter_spacing' => 'tracking-tighter', 'usage' => 'Page Titles' ),
	array( 'token' => 'Eyebrow', 'font' => 'DM Sans', 'weight' => 'Semibold', 'tailwind' => 'text-base', 'line_height' => 'leading-6', 'letter_spacing' => 'tracking-wider', 'usage' => 'A Gentle Reminder That You Still Have A Map' ),
	array( 'token' => 'Body - Base - 600', 'font' => 'DM Sans', 'weight' => 'Semibold', 'tailwind' => 'text-base', 'line_height' => 'leading-6', 'letter_spacing' => 'tracking-normal', 'usage' => 'Text Emphasize - L' ),
	array( 'token' => 'Body - Base - 500', 'font' => 'DM Sans', 'weight' => 'Medium', 'tailwind' => 'text-base', 'line_height' => 'leading-6', 'letter_spacing' => 'tracking-normal', 'usage' => 'Text Emphasize - M' ),
	array( 'token' => 'Body - Base - 400', 'font' => 'DM Sans', 'weight' => 'Normal', 'tailwind' => 'text-base', 'line_height' => 'leading-6', 'letter_spacing' => 'tracking-normal', 'usage' => 'Main Paragraphs, Tags, Notes, Buttons, Small Elements' ),
	array( 'token' => 'Body - Sm - 600', 'font' => 'DM Sans', 'weight' => 'Semibold', 'tailwind' => 'text-sm', 'line_height' => 'leading-5', 'letter_spacing' => 'tracking-normal', 'usage' => 'Text Emphasize - L' ),
	array( 'token' => 'Body - Sm - 500', 'font' => 'DM Sans', 'weight' => 'Medium', 'tailwind' => 'text-sm', 'line_height' => 'leading-5', 'letter_spacing' => 'tracking-normal', 'usage' => 'Text Emphasize - M' ),
	array( 'token' => 'Body - Sm - 400', 'font' => 'DM Sans', 'weight' => 'Normal', 'tailwind' => 'text-sm', 'line_height' => 'leading-5', 'letter_spacing' => 'tracking-normal', 'usage' => 'Main Paragraphs, Tags, Notes, Buttons, Small Elements' ),
	array( 'token' => 'Body - Xs - 600', 'font' => 'DM Sans', 'weight' => 'Semibold', 'tailwind' => 'text-xs', 'line_height' => 'leading-4', 'letter_spacing' => 'tracking-normal', 'usage' => 'Text Emphasize - L' ),
	array( 'token' => 'Body - Xs - 500', 'font' => 'DM Sans', 'weight' => 'Medium', 'tailwind' => 'text-xs', 'line_height' => 'leading-4', 'letter_spacing' => 'tracking-normal', 'usage' => 'Text Emphasize - M' ),
	array( 'token' => 'Body - Xs - 400', 'font' => 'DM Sans', 'weight' => 'Normal', 'tailwind' => 'text-xs', 'line_height' => 'leading-4', 'letter_spacing' => 'tracking-normal', 'usage' => 'Main Paragraphs, Tags, Notes, Buttons, Small Elements' ),
);

$accordion_items = array(
	array(
		'id'      => 'item-1',
		'title'   => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus, nunc sit amet dignissim sodales, nunc lectus egestas sem, at ornare arcu dolor a tellus. Fusce leo eros, finibus a rutrum tincidunt, congue non mauris.',
	),
	array(
		'id'      => 'item-2',
		'title'   => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus, nunc sit amet dignissim sodales, nunc lectus egestas sem, at ornare arcu dolor a tellus. Fusce leo eros, finibus a rutrum tincidunt, congue non mauris.',
	),
	array(
		'id'      => 'item-3',
		'title'   => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus, nunc sit amet dignissim sodales, nunc lectus egestas sem, at ornare arcu dolor a tellus. Fusce leo eros, finibus a rutrum tincidunt, congue non mauris.',
	),
);

$shadow_rows = array(
	array( 'token' => 'la-shadow-1', 'sample_class' => 'shadow-la-shadow-1' ),
	array( 'token' => 'la-shadow-2', 'sample_class' => 'shadow-la-shadow-2' ),
	array( 'token' => 'la-shadow-3', 'sample_class' => 'shadow-la-shadow-3' ),
	array( 'token' => 'la-shadow-4', 'sample_class' => 'shadow-la-shadow-4' ),
);

$large_icons = array(
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M15 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V7L15 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 13H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 17H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M18 20V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 20V4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 20V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 5.00005C12.0012 4.60008 11.9224 4.20391 11.7682 3.83485C11.614 3.46579 11.3876 3.13128 11.1023 2.851C10.8169 2.57072 10.4784 2.35032 10.1067 2.20278C9.73491 2.05524 9.33739 1.98353 8.93751 1.99186C8.53762 2.0002 8.14344 2.08841 7.77815 2.25132C7.41286 2.41422 7.08383 2.64853 6.81041 2.94045C6.537 3.23238 6.32472 3.57604 6.18606 3.9512C6.04741 4.32637 5.98517 4.72548 6.00301 5.12505C5.41521 5.27619 4.86952 5.5591 4.40724 5.95236C3.94497 6.34562 3.57825 6.83892 3.33486 7.3949C3.09146 7.95087 2.97777 8.55494 3.0024 9.16136C3.02703 9.76778 3.18933 10.3606 3.47701 10.8951C2.97119 11.306 2.57344 11.8343 2.31835 12.434C2.06327 13.0337 1.95857 13.6866 2.01338 14.336C2.06818 14.9854 2.28083 15.6116 2.63282 16.1601C2.98481 16.7085 3.46548 17.1627 4.03301 17.4831C3.96293 18.0253 4.00475 18.5761 4.1559 19.1016C4.30705 19.627 4.56431 20.1159 4.9118 20.538C5.25929 20.9601 5.68962 21.3065 6.17623 21.5558C6.66284 21.8051 7.19539 21.952 7.74099 21.9874C8.28659 22.0228 8.83365 21.946 9.3484 21.7617C9.86315 21.5774 10.3346 21.2895 10.7338 20.9158C11.1329 20.5421 11.4512 20.0906 11.669 19.5891C11.8868 19.0876 11.9994 18.5468 12 18V5.00005Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13C9.83956 12.7047 10.5727 12.167 11.1067 11.455C11.6407 10.743 11.9515 9.88867 12 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.00299 5.125C6.02277 5.60873 6.15932 6.0805 6.40099 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.47699 10.896C3.65993 10.747 3.85569 10.6145 4.06199 10.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.99999 18C5.31082 18.0003 4.63326 17.8226 4.03299 17.484" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 13H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 18H18C18.5304 18 19.0391 18.2107 19.4142 18.5858C19.7893 18.9609 20 19.4696 20 20V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 8V5C16 4.46957 16.2107 3.96086 16.5858 3.58579C16.9609 3.21071 17.4696 3 18 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 13.5C16.2761 13.5 16.5 13.2761 16.5 13C16.5 12.7239 16.2761 12.5 16 12.5C15.7239 12.5 15.5 12.7239 15.5 13C15.5 13.2761 15.7239 13.5 16 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 3.5C18.2761 3.5 18.5 3.27614 18.5 3C18.5 2.72386 18.2761 2.5 18 2.5C17.7239 2.5 17.5 2.72386 17.5 3C17.5 3.27614 17.7239 3.5 18 3.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 21.5C20.2761 21.5 20.5 21.2761 20.5 21C20.5 20.7239 20.2761 20.5 20 20.5C19.7239 20.5 19.5 20.7239 19.5 21C19.5 21.2761 19.7239 21.5 20 21.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 8.5C20.2761 8.5 20.5 8.27614 20.5 8C20.5 7.72386 20.2761 7.5 20 7.5C19.7239 7.5 19.5 7.72386 19.5 8C19.5 8.27614 19.7239 8.5 20 8.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V7L15 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 13H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 17H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M21.73 18L13.73 3.99998C13.5556 3.69218 13.3026 3.43617 12.9969 3.25805C12.6912 3.07993 12.3438 2.98608 11.99 2.98608C11.6362 2.98608 11.2887 3.07993 10.9831 3.25805C10.6774 3.43617 10.4244 3.69218 10.25 3.99998L2.24999 18C2.07367 18.3053 1.98122 18.6519 1.982 19.0045C1.98278 19.3571 2.07677 19.7032 2.25444 20.0078C2.43211 20.3124 2.68714 20.5646 2.99369 20.7388C3.30023 20.9131 3.6474 21.0032 3.99999 21H20C20.3509 20.9996 20.6955 20.9069 20.9993 20.7313C21.303 20.5556 21.5552 20.3031 21.7305 19.9991C21.9058 19.6951 21.998 19.3504 21.9979 18.9995C21.9978 18.6486 21.9054 18.3039 21.73 18Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 9V13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 17H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 13C20 18 16.5 20.5 12.34 21.95C12.1222 22.0238 11.8855 22.0202 11.67 21.94C7.5 20.5 4 18 4 13V5.99996C4 5.73474 4.10536 5.48039 4.29289 5.29285C4.48043 5.10532 4.73478 4.99996 5 4.99996C7 4.99996 9.5 3.79996 11.24 2.27996C11.4519 2.09896 11.7214 1.99951 12 1.99951C12.2786 1.99951 12.5481 2.09896 12.76 2.27996C14.51 3.80996 17 4.99996 19 4.99996C19.2652 4.99996 19.5196 5.10532 19.7071 5.29285C19.8946 5.48039 20 5.73474 20 5.99996V13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H6C4.93913 15 3.92172 15.4214 3.17157 16.1716C2.42143 16.9217 2 17.9391 2 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 21V19C21.9993 18.1137 21.7044 17.2528 21.1614 16.5523C20.6184 15.8519 19.8581 15.3516 19 15.13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 18H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 22H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 22C15.8565 22 17.637 21.2625 18.9497 19.9497C20.2625 18.637 21 16.8565 21 15C21 13.1435 20.2625 11.363 18.9497 10.0503C17.637 8.7375 15.8565 8 14 8H13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 14H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12C8.46957 12 7.96086 11.7893 7.58579 11.4142C7.21071 11.0391 7 10.5304 7 10V6H13V10C13 10.5304 12.7893 11.0391 12.4142 11.4142C12.0391 11.7893 11.5304 12 11 12H9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 6V3C12 2.73478 11.8946 2.48043 11.7071 2.29289C11.5196 2.10536 11.2652 2 11 2H9C8.73478 2 8.48043 2.10536 8.29289 2.29289C8.10536 2.48043 8 2.73478 8 3V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 2H9C8.44772 2 8 2.44772 8 3V5C8 5.55228 8.44772 6 9 6H15C15.5523 6 16 5.55228 16 5V3C16 2.44772 15.5523 2 15 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 4H18C18.5304 4 19.0391 4.21071 19.4142 4.58579C19.7893 4.96086 20 5.46957 20 6V20C20 20.5304 19.7893 21.0391 19.4142 21.4142C19.0391 21.7893 18.5304 22 18 22H6C5.46957 22 4.96086 21.7893 4.58579 21.4142C4.21071 21.0391 4 20.5304 4 20V6C4 5.46957 4.21071 4.96086 4.58579 4.58579C4.96086 4.21071 5.46957 4 6 4H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 7L13.5 15.5L8.5 10.5L2 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 7H22V13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 22V4C6 3.46957 6.21071 2.96086 6.58579 2.58579C6.96086 2.21071 7.46957 2 8 2H16C16.5304 2 17.0391 2.21071 17.4142 2.58579C17.7893 2.96086 18 3.46957 18 4V22H6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 12H4C3.46957 12 2.96086 12.2107 2.58579 12.5858C2.21071 12.9609 2 13.4696 2 14V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 9H20C20.5304 9 21.0391 9.21071 21.4142 9.58579C21.7893 9.96086 22 10.4696 22 11V20C22 20.5304 21.7893 21.0391 21.4142 21.4142C21.0391 21.7893 20.5304 22 20 22H18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 6H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 10H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 14H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 18H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
);

$small_icons = array(
	'<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16.6667 3.33337H3.33333C2.41286 3.33337 1.66666 4.07957 1.66666 5.00004V15C1.66666 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5871 16.6667 18.3333 15.9205 18.3333 15V5.00004C18.3333 4.07957 17.5871 3.33337 16.6667 3.33337Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.3333 5.83337L10.8583 10.5834C10.6011 10.7446 10.3036 10.83 10 10.83C9.6964 10.83 9.39894 10.7446 9.14166 10.5834L1.66666 5.83337" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><g clip-path="url(#clip0_10004_1231)"><path d="M10 18.3333C14.6024 18.3333 18.3333 14.6023 18.3333 9.99996C18.3333 5.39759 14.6024 1.66663 10 1.66663C5.39763 1.66663 1.66667 5.39759 1.66667 9.99996C1.66667 14.6023 5.39763 18.3333 10 18.3333Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 1.66663C7.8602 3.91342 6.66667 6.89724 6.66667 9.99996C6.66667 13.1027 7.8602 16.0865 10 18.3333C12.1398 16.0865 13.3333 13.1027 13.3333 9.99996C13.3333 6.89724 12.1398 3.91342 10 1.66663Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.66667 10H18.3333" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_10004_1231"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>',
	'<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16.6667 8.33329C16.6667 12.4941 12.0508 16.8275 10.5008 18.1658C10.3564 18.2744 10.1807 18.3331 9.99999 18.3331C9.81933 18.3331 9.64356 18.2744 9.49916 18.1658C7.94916 16.8275 3.33333 12.4941 3.33333 8.33329C3.33333 6.56518 4.03571 4.86949 5.28595 3.61925C6.53619 2.36901 8.23188 1.66663 9.99999 1.66663C11.7681 1.66663 13.4638 2.36901 14.714 3.61925C15.9643 4.86949 16.6667 6.56518 16.6667 8.33329Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 10.8334C11.3807 10.8334 12.5 9.71409 12.5 8.33337C12.5 6.95266 11.3807 5.83337 10 5.83337C8.61929 5.83337 7.5 6.95266 7.5 8.33337C7.5 9.71409 8.61929 10.8334 10 10.8334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>',
);

$footer_links = latrobeweb_get_footer_nav_items();

$svg_allowed = latrobeweb_get_svg_allowed();
?>

<main class="mx-auto flex w-full flex-col space-y-16 px-6 py-10 sm:max-w-[680px] sm:px-0 sm:py-14 lg:max-w-[1295px]">
	<section class="la-hero">
		<div class="la-hero-inner">
			<div class="space-y-3">
				<p class="body-xs-600 inline-flex rounded-full bg-inverse-10 px-3 py-1 uppercase tracking-[0.08em] text-inverse-80">UI Kit</p>
				<h1 class="text-white"><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Colors</h2>
		<div class="la-purple-wrap space-y-6">
			<?php foreach ( $color_groups as $group ) : ?>
				<div class="space-y-4">
					<h4 class="text-black"><?php echo esc_html( $group['label'] ); ?></h4>
					<div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
						<?php foreach ( $group['items'] as $item ) : ?>
							<div class="la-swatch">
								<div class="la-swatch-chip <?php echo esc_attr( $item['class_name'] ); ?>"></div>
								<div class="flex items-center justify-between gap-3 p-4">
									<span class="font-semibold text-black"><?php echo esc_html( $item['name'] ); ?></span>
									<span class="font-mono text-xs text-gray-400"><?php echo esc_html( $item['value'] ); ?></span>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="la-section">
		<div class="la-purple-wrap overflow-hidden bg-white shadow-card">
			<div class="flex items-start justify-between gap-6 bg-black px-6 py-5 text-white lg:px-8">
				<div class="space-y-1">
					<p class="text-xs font-medium leading-5 text-inverse-80">UI KIT for La Trobe University Digital PCAT Web App &amp; Web</p>
					<p class="font-display text-[1.75rem] leading-9 font-bold text-white lg:text-[2.5rem] lg:leading-12">Typography System for PCAT Web Page</p>
				</div>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/la-trobe-university-1.svg' ); ?>" alt="La Trobe University" width="85" height="54" class="h-auto w-[56px] shrink-0 lg:w-[85px]"/>
			</div>
			<div class="overflow-x-auto">
				<table class="w-full min-w-[980px] border-collapse">
					<thead class="bg-slate-50">
						<tr>
							<?php foreach ( array( 'Token', 'Font', 'Weight', 'Tailwind Classes', 'Line Height', 'Letter Spacing', 'Usage' ) as $heading ) : ?>
								<th class="body-xs-600 border-b border-r border-slate-200 px-4 py-4 text-center text-slate-400 last:border-r-0"><?php echo esc_html( $heading ); ?></th>
							<?php endforeach; ?>
						</tr>
					</thead>
					<tbody>
						<?php foreach ( $typography_rows as $row ) : ?>
							<tr class="border-b border-slate-200 last:border-b-0">
								<td class="body-sm-500 border-r border-slate-200 px-4 py-5 text-center text-black"><?php echo esc_html( $row['token'] ); ?></td>
								<td class="body-sm-400 border-r border-slate-200 px-4 py-5 text-center text-black"><?php echo esc_html( $row['font'] ); ?></td>
								<td class="body-sm-400 border-r border-slate-200 px-4 py-5 text-center text-black"><?php echo esc_html( $row['weight'] ); ?></td>
								<td class="body-sm-400 border-r border-slate-200 px-4 py-5 text-center text-black"><?php echo esc_html( $row['tailwind'] ); ?></td>
								<td class="body-sm-400 border-r border-slate-200 px-4 py-5 text-center text-black"><?php echo esc_html( $row['line_height'] ); ?></td>
								<td class="body-sm-400 border-r border-slate-200 px-4 py-5 text-center text-black"><?php echo esc_html( $row['letter_spacing'] ); ?></td>
								<td class="body-sm-400 px-4 py-5 text-center text-black"><?php echo esc_html( $row['usage'] ); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Shadows</h2>
		<div class="la-purple-wrap">
					<div class="overflow-hidden rounded-4xl border border-gray-200 bg-white">
				<div class="grid grid-cols-[160px_minmax(0,1fr)] border-b border-gray-200 bg-slate-50 px-8 py-5 text-sm font-semibold text-slate-500">
					<div>Token</div>
					<div>Sample</div>
				</div>
				<div class="divide-y divide-gray-200">
					<?php foreach ( $shadow_rows as $row ) : ?>
						<div class="grid grid-cols-[160px_minmax(0,1fr)] items-center gap-6 px-8 py-8">
							<p class="body-sm-600 text-black"><?php echo esc_html( $row['token'] ); ?></p>
							<div class="flex justify-start">
								<div class="h-6 w-full max-w-[540px] rounded-md bg-brand-8 <?php echo esc_attr( $row['sample_class'] ); ?>"></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Iconography</h2>
		<div class="la-purple-wrap">
			<div class="space-y-8">
				<div class="flex flex-wrap gap-5">
					<?php foreach ( $large_icons as $icon ) : ?>
						<div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-light px-3 text-la-red-1">
							<?php echo wp_kses( $icon, $svg_allowed ); ?>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="flex flex-wrap gap-5">
					<?php foreach ( $small_icons as $icon ) : ?>
						<div class="flex h-10 w-10 items-center justify-center rounded-xl bg-red-light px-2.5 text-la-red-1">
							<?php echo wp_kses( $icon, $svg_allowed ); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Buttons</h2>
		<div class="la-purple-wrap space-y-6">
				<div class="overflow-hidden rounded-3xl border border-dashed border-violet-300 bg-white p-5 sm:p-7">
				<p class="body-sm-600 mb-6 text-gray-600">Light BG</p>
				<div class="grid gap-8 sm:grid-cols-[260px_minmax(0,1fr)] sm:items-center">
					<p class="body-sm-600 text-black">Primary Light</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-primary-light' ) ); ?></div>
					<p class="body-sm-600 text-black">Primary Light with Right Icon</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-primary-light-icon-right', 'icon' => latrobeweb_get_icon_markup( 'heart' ), 'icon_position' => 'after' ) ); ?></div>
					<p class="body-sm-600 text-black">Primary Light with Left Icon</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-primary-light-icon-left', 'icon' => latrobeweb_get_icon_markup( 'heart' ), 'icon_position' => 'before' ) ); ?></div>
					<p class="body-sm-600 text-black">Secondary Light</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-secondary-light' ) ); ?></div>
				</div>
			</div>
				<div class="overflow-hidden rounded-3xl border border-dashed border-violet-300 bg-black p-5 sm:p-7">
				<p class="body-sm-600 mb-6 text-white">Dark BG</p>
				<div class="grid gap-8 sm:grid-cols-[260px_minmax(0,1fr)] sm:items-center">
					<p class="body-sm-600 text-white">Primary Dark</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-primary-dark' ) ); ?></div>
					<p class="body-sm-600 text-white">Primary Dark with Right Icon</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-primary-dark-icon-right', 'icon' => latrobeweb_get_icon_markup( 'heart' ), 'icon_position' => 'after' ) ); ?></div>
					<p class="body-sm-600 text-white">Primary Dark with Left Icon</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-primary-dark-icon-left', 'icon' => latrobeweb_get_icon_markup( 'heart' ), 'icon_position' => 'before' ) ); ?></div>
					<p class="body-sm-600 text-white">Secondary Dark</p>
					<div class="flex justify-start"><?php latrobeweb_component( 'button', array( 'href' => '#', 'label' => 'Lorem ipsum', 'variant' => 'la-button-secondary-dark' ) ); ?></div>
				</div>
			</div>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Chips</h2>
		<div class="la-purple-wrap space-y-6">
			<div class="rounded-3xl border border-dashed border-violet-300 bg-white p-5 sm:p-7">
			<?php
				latrobeweb_component(
					'chip',
					array(
						'label' => 'Lorem ipsum',
						'count' => '12',
					)
				);
				?>
			</div>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Cards</h2>
		<div class="la-purple-wrap">
			<div class="grid gap-8 md:grid-cols-2">
				<div class="space-y-5">
                                        <h4 class="font-display text-center text-2xl font-bold tracking-tight text-gray-500">Card Type 1</h4>
                                        <article class="flex translate-y-0 items-center gap-5 rounded-2xl border border-gray-200 bg-white px-5 py-5 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-card-brand-inset">
                                                <div class="bg-red-light text-la-red-1 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $large_icons[0], $svg_allowed ); ?></div>
						<div>
							<p class="body-base-600 text-black">Real-time</p>
							<p class="body-base-400 text-gray-500">Assessment documentation</p>
						</div>
					</article>
				</div>
				<div class="space-y-5">
                                        <h4 class="font-display text-center text-2xl font-bold tracking-tight text-gray-500">Card Type 2</h4>
                                        <article class="bg-surface-card-soft flex translate-y-0 flex-col rounded-2xl border border-gray-200 p-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-la-shadow-3">
                                                <div class="bg-red-light text-la-red-1 mb-4 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $large_icons[11], $svg_allowed ); ?></div>
						<h3 class="body-base-600 text-black">Research Objective</h3>
						<p class="body-base-400 mt-2 text-gray-500">Develop and validate an AI-powered screening tool that identifies aged care residents with unmet palliative care needs earlier and more accurately than current practice.</p>
					</article>
				</div>
				<div class="space-y-5">
                                        <h4 class="font-display text-center text-2xl font-bold tracking-tight text-gray-500">Card Type 3</h4>
                                        <article class="group flex translate-y-0 flex-col rounded-2xl border border-gray-200 bg-white p-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-la-shadow-4">
                                                <div class="bg-red-light text-la-red-1 mb-3.5 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $large_icons[4], $svg_allowed ); ?></div>
						<h3 class="body-base-600 text-black group-hover:underline group-hover:decoration-brand-1 group-hover:[text-decoration-thickness:13.5%] group-hover:[text-underline-offset:25%]">Research-Validated Assessments</h3>
						<p class="body-base-400 mt-3.5 text-gray-500 leading-[26px] md:text-lg md:leading-6 lg:text-base lg:leading-6">Complete structured palliative care assessments built on peer-reviewed methodology. Forms are standardised, auto-timestamped, and designed so no critical clinical indicator is ever overlooked.</p>
					</article>
				</div>
				<div class="space-y-5">
                                        <h4 class="font-display text-center text-2xl font-bold tracking-tight text-gray-500">Team Card</h4>
                                        <article class="translate-y-0 rounded-2xl border border-gray-200 bg-white px-6 py-6 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:bg-surface-card-hover hover:shadow-la-shadow-1">
                                                <div class="flex flex-col gap-2">
                                                        <p class="eyebrow text-brand-1">PRINCIPAL INVESTIGATOR</p>
                                                        <p class="body-base-600 font-bold text-black">Prof. Hanan Khalil</p>
						</div>
						<p class="body-base-400 mt-3 text-gray-500">Lead researcher and grant recipient. Professor in the School of Psychology and Public Health, with expertise in evidence synthesis, aged care, and health services research.</p>
						<p class="body-sm-400 mt-4 border-l-2 border-brand-1 pl-4 text-base leading-6 text-gray-500 md:text-base md:leading-6 lg:text-sm lg:leading-5">La Trobe University - School of Psychology and Public Health</p>
					</article>
				</div>
				<div class="space-y-5">
                                        <h4 class="font-display text-center text-2xl font-bold tracking-tight text-gray-500">Card Type 4</h4>
                                        <article class="group flex w-full min-w-0 translate-y-0 items-center gap-4 rounded-2xl border border-gray-200 bg-white px-4 py-4 transition-[transform,box-shadow,background-color] duration-200 ease-out hover:-translate-y-1 hover:shadow-card-spotlight">
                                                <div class="bg-red-light text-la-red-1 flex h-12 w-12 items-center justify-center rounded-xl"><?php echo wp_kses( $small_icons[0], $svg_allowed ); ?></div>
						<div class="space-y-1">
							<p class="eyebrow text-gray-500">EMAIL</p>
                                                        <p class="body-base-500 text-black group-hover:text-brand-1 group-hover:underline group-hover:[text-decoration-thickness:8%] group-hover:[text-underline-offset:25%]">pcat@latrobe.edu.au</p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Accordion</h2>
		<div class="la-purple-wrap p-6 sm:p-8">
			<?php latrobeweb_component( 'accordion', array( 'items' => $accordion_items, 'default_open' => 0 ) ); ?>
		</div>
	</section>

	<section class="la-section">
		<h2 class="text-black">Footer</h2>
		<div class="la-purple-wrap">
                        <footer class="bg-gradient-1 mt-0 border-t border-gray-200">
				<div class="px-6 py-12 lg:px-12 lg:py-12">
					<div class="flex flex-col gap-8 md:gap-8 lg:gap-8">
						<div class="flex flex-col items-center gap-10 text-center md:gap-12 lg:flex-row lg:items-center lg:justify-between lg:gap-5 lg:text-left">
							<?php latrobeweb_site_brand( array( 'subtitle' => 'PCAT Research Programme', 'show_divider' => false ) ); ?>
							<nav class="flex w-full flex-col items-center gap-y-4 md:w-auto md:flex-row md:flex-wrap md:justify-center md:gap-x-5 md:gap-y-3 lg:justify-end lg:gap-x-6" aria-label="<?php esc_attr_e( 'Footer Menu Preview', 'latrobeweb' ); ?>">
								<?php foreach ( $footer_links as $item ) : ?>
                                                                        <a class="body-base-400 text-footer-link inline-block w-full border-b border-transparent py-0 text-center whitespace-nowrap transition-colors duration-200 hover:border-brand-1 md:w-auto lg:body-base-500" href="<?php echo esc_url( $item['url'] ); ?>"><?php echo esc_html( $item['label'] ); ?></a>
								<?php endforeach; ?>
							</nav>
						</div>
						<div class="flex flex-col gap-4 border-t border-footer-divider-soft pt-6 text-center lg:flex-row lg:items-center lg:justify-between lg:gap-3 lg:pt-8 lg:text-left">
                                                        <p class="body-base-400 text-footer-body lg:body-base-500">&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> La Trobe University - PCAT - Palliative Care Assessment Tool</p>
                                                        <p class="body-base-400 text-footer-built lg:body-base-500"><?php esc_html_e( 'Built by', 'latrobeweb' ); ?> <a href="https://oddly.global/" target="_blank" rel="noopener noreferrer" class="body-base-600 text-footer-body inline-block border-b border-transparent transition-colors duration-200 hover:border-brand-1">ODDLY</a></p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</section>
</main>

<?php
get_footer();
