<?php
/**
 * Reusable theme component helpers.
 *
 * @package latrobeweb
 */

if ( ! function_exists( 'latrobeweb_asset_uri' ) ) :
	/**
	 * Returns a theme asset URI.
	 *
	 * @param string $path Relative asset path.
	 * @return string
	 */
	function latrobeweb_asset_uri( $path ) {
		return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
	}
endif;

if ( ! function_exists( 'latrobeweb_get_svg_allowed' ) ) :
	/**
	 * Allowed tags for inline SVG output.
	 *
	 * @return array<string, array<string, bool>>
	 */
	function latrobeweb_get_svg_allowed() {
		return array(
			'svg'      => array(
				'xmlns'       => true,
				'width'       => true,
				'height'      => true,
				'viewbox'     => true,
				'fill'        => true,
				'aria-hidden' => true,
				'class'       => true,
			),
			'g'        => array(
				'clip-path' => true,
			),
			'path'     => array(
				'd'               => true,
				'stroke'          => true,
				'stroke-width'    => true,
				'stroke-linecap'  => true,
				'stroke-linejoin' => true,
				'fill'            => true,
				'fill-rule'       => true,
				'clip-rule'       => true,
			),
			'defs'     => array(),
			'clippath' => array(
				'id' => true,
			),
			'rect'     => array(
				'width'  => true,
				'height' => true,
				'fill'   => true,
			),
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_get_theme_icons' ) ) :
	/**
	 * Shared inline icons used across templates/components.
	 *
	 * @return array<string, string>
	 */
	function latrobeweb_get_theme_icons() {
		return array(
			'arrow'      => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M5.5 3L10.5 8L5.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'arrow-left' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M10.5 3L5.5 8L10.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'chevron-right-small' => '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none" aria-hidden="true"><path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'lock-small' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M11 7V4.5C11 2.84315 9.65685 1.5 8 1.5C6.34315 1.5 5 2.84315 5 4.5V7M4.5 14.5H11.5C12.3284 14.5 13 13.8284 13 13V8.5C13 7.67157 12.3284 7 11.5 7H4.5C3.67157 7 3 7.67157 3 8.5V13C3 13.8284 3.67157 14.5 4.5 14.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'heart'      => '<svg class="la-button-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M14 5.5C14 3.84315 12.6009 2.5 10.875 2.5C9.58459 2.5 8.47685 3.25085 8 4.32228C7.52315 3.25085 6.41541 2.5 5.125 2.5C3.39911 2.5 2 3.84315 2 5.5C2 10.3137 8 13.5 8 13.5C8 13.5 14 10.3137 14 5.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'clipboard'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V7L15 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 13H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 17H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'mail'       => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16.6667 3.33337H3.33333C2.41286 3.33337 1.66666 4.07957 1.66666 5.00004V15C1.66666 15.9205 2.41286 16.6667 3.33333 16.6667H16.6667C17.5871 16.6667 18.3333 15.9205 18.3333 15V5.00004C18.3333 4.07957 17.5871 3.33337 16.6667 3.33337Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.3333 5.83337L10.8583 10.5834C10.6011 10.7446 10.3036 10.83 10 10.83C9.6964 10.83 9.39894 10.7446 9.14166 10.5834L1.66666 5.83337" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'globe'      => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><g clip-path="url(#clip0_10004_1231)"><path d="M10 18.3333C14.6024 18.3333 18.3333 14.6023 18.3333 9.99996C18.3333 5.39759 14.6024 1.66663 10 1.66663C5.39763 1.66663 1.66667 5.39759 1.66667 9.99996C1.66667 14.6023 5.39763 18.3333 10 18.3333Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 1.66663C7.8602 3.91342 6.66667 6.89724 6.66667 9.99996C6.66667 13.1027 7.8602 16.0865 10 18.3333C12.1398 16.0865 13.3333 13.1027 13.3333 9.99996C13.3333 6.89724 12.1398 3.91342 10 1.66663Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.66667 10H18.3333" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_10004_1231"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>',
			'pin'        => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16.6667 8.33329C16.6667 12.4941 12.0508 16.8275 10.5008 18.1658C10.3564 18.2744 10.1807 18.3331 9.99999 18.3331C9.81933 18.3331 9.64356 18.2744 9.49916 18.1658C7.94916 16.8275 3.33333 12.4941 3.33333 8.33329C3.33333 6.56518 4.03571 4.86949 5.28595 3.61925C6.53619 2.36901 8.23188 1.66663 9.99999 1.66663C11.7681 1.66663 13.4638 2.36901 14.714 3.61925C15.9643 4.86949 16.6667 6.56518 16.6667 8.33329Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 10.8334C11.3807 10.8334 12.5 9.71409 12.5 8.33337C12.5 6.95266 11.3807 5.83337 10 5.83337C8.61929 5.83337 7.5 6.95266 7.5 8.33337C7.5 9.71409 8.61929 10.8334 10 10.8334Z" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'lock-26'    => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" aria-hidden="true"><path d="M20.3572 11.7854H5.35715C4.17368 11.7854 3.21429 12.7448 3.21429 13.9283V21.4283C3.21429 22.6117 4.17368 23.5711 5.35715 23.5711H20.3572C21.5406 23.5711 22.5 22.6117 22.5 21.4283V13.9283C22.5 12.7448 21.5406 11.7854 20.3572 11.7854Z" stroke="currentColor" stroke-width="2.14286" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.50006 11.7854V7.49972C7.50006 6.07892 8.06447 4.71631 9.06913 3.71165C10.0738 2.70699 11.4364 2.14258 12.8572 2.14258C14.278 2.14258 15.6406 2.70699 16.6453 3.71165C17.6499 4.71631 18.2143 6.07892 18.2143 7.49972V11.7854" stroke="currentColor" stroke-width="2.14286" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'search-26'  => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" aria-hidden="true"><path d="M11.7837 20.3539C16.5168 20.3539 20.3537 16.5169 20.3537 11.7839C20.3537 7.05079 16.5168 3.21387 11.7837 3.21387C7.05066 3.21387 3.21375 7.05079 3.21375 11.7839C3.21375 16.5169 7.05066 20.3539 11.7837 20.3539Z" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.4962 22.4965L17.8898 17.8901" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'checklist-26' => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" aria-hidden="true"><path d="M3.21375 18.2113L5.35625 20.3538L9.64124 16.0688" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.21375 7.49895L5.35625 9.64145L9.64124 5.35645" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9262 6.42725H22.4962" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9262 12.855H22.4962" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9262 19.2827H22.4962" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'bell-26'    => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" aria-hidden="true"><path d="M10.9996 22.4961C11.1877 22.8218 11.4581 23.0922 11.7838 23.2802C12.1095 23.4683 12.479 23.5672 12.855 23.5672C13.2311 23.5672 13.6006 23.4683 13.9262 23.2802C14.2519 23.0922 14.5224 22.8218 14.7104 22.4961" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M23.5675 8.57008C23.5675 6.1062 22.7105 3.9637 21.425 2.14258" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.49442 16.4181C3.35448 16.5714 3.26213 16.7622 3.2286 16.9671C3.19507 17.172 3.22181 17.3822 3.30557 17.5722C3.38933 17.7622 3.52649 17.9238 3.70038 18.0372C3.87426 18.1507 4.07737 18.2112 4.28501 18.2113H21.425C21.6326 18.2114 21.8358 18.1512 22.0098 18.0379C22.1838 17.9246 22.3211 17.7633 22.4051 17.5734C22.4891 17.3836 22.5161 17.1734 22.4828 16.9685C22.4495 16.7635 22.3574 16.5727 22.2177 16.4191C20.793 14.9504 19.2825 13.3896 19.2825 8.57008C19.2825 6.8654 18.6053 5.23054 17.3999 4.02515C16.1945 2.81976 14.5597 2.14258 12.855 2.14258C11.1503 2.14258 9.51547 2.81976 8.31008 4.02515C7.10469 5.23054 6.42751 6.8654 6.42751 8.57008C6.42751 13.3896 4.91597 14.9504 3.49442 16.4181Z" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.28496 2.14258C2.99946 3.9637 2.14246 6.1062 2.14246 8.57008" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'trend-26'   => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" aria-hidden="true"><path d="M23.5675 7.49854L14.4618 16.6042L9.10558 11.2479L2.14246 18.211" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.14 7.49854H23.5675V13.926" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'node-26'    => '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" aria-hidden="true"><path d="M21.425 14.9976H17.14C15.9567 14.9976 14.9975 15.9568 14.9975 17.1401V21.4251C14.9975 22.6083 15.9567 23.5676 17.14 23.5676H21.425C22.6083 23.5676 23.5675 22.6083 23.5675 21.4251V17.1401C23.5675 15.9568 22.6083 14.9976 21.425 14.9976Z" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.56996 2.14258H4.28496C3.10169 2.14258 2.14246 3.10181 2.14246 4.28508V8.57008C2.14246 9.75335 3.10169 10.7126 4.28496 10.7126H8.56996C9.75323 10.7126 10.7125 9.75335 10.7125 8.57008V4.28508C10.7125 3.10181 9.75323 2.14258 8.56996 2.14258Z" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.49872 14.9976V16.0688C7.49872 16.637 7.72445 17.182 8.12624 17.5838C8.52804 17.9856 9.07299 18.2113 9.64122 18.2113H10.7125" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.9975 7.49854H16.0687C16.637 7.49854 17.1819 7.72426 17.5837 8.12606C17.9855 8.52786 18.2112 9.07281 18.2112 9.64104V10.7123" stroke="currentColor" stroke-width="2.1425" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'target'     => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'document'   => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V7L15 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 13H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 17H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'users'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H7C5.93913 15 4.92172 15.4214 4.17157 16.1716C3.42143 16.9217 3 17.9391 3 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.5 11C11.7091 11 13.5 9.20914 13.5 7C13.5 4.79086 11.7091 3 9.5 3C7.29086 3 5.5 4.79086 5.5 7C5.5 9.20914 7.29086 11 9.5 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 21V19C20.9993 18.1137 20.7044 17.2528 20.1614 16.5523C19.6184 15.8519 18.8581 15.3516 18 15.13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15.5 3.13C16.3608 3.3503 17.1235 3.8507 17.6689 4.5523C18.2142 5.25391 18.5102 6.11683 18.5102 7.005C18.5102 7.89317 18.2142 8.75609 17.6689 9.4577C17.1235 10.1593 16.3608 10.6597 15.5 10.88" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'microscope' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 18H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 22H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 22C15.8565 22 17.637 21.2625 18.9497 19.9497C20.2625 18.637 21 16.8565 21 15C21 13.1435 20.2625 11.363 18.9497 10.0503C17.637 8.7375 15.8565 8 14 8H13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 14H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12C8.46957 12 7.96086 11.7893 7.58579 11.4142C7.21071 11.0391 7 10.5304 7 10V6H13V10C13 10.5304 12.7893 11.0391 12.4142 11.4142C12.0391 11.7893 11.5304 12 11 12H9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 6V3C12 2.73478 11.8946 2.48043 11.7071 2.29289C11.5196 2.10536 11.2652 2 11 2H9C8.73478 2 8.48043 2.10536 8.29289 2.29289C8.10536 2.48043 8 2.73478 8 3V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'warning'    => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M21.73 18L13.73 3.99998C13.5556 3.69218 13.3026 3.43617 12.9969 3.25805C12.6912 3.07993 12.3438 2.98608 11.99 2.98608C11.6362 2.98608 11.2887 3.07993 10.9831 3.25805C10.6774 3.43617 10.4244 3.69218 10.25 3.99998L2.24999 18C2.07367 18.3053 1.98122 18.6519 1.982 19.0045C1.98278 19.3571 2.07677 19.7032 2.25444 20.0078C2.43211 20.3124 2.68714 20.5646 2.99369 20.7388C3.30023 20.9131 3.6474 21.0032 3.99999 21H20C20.3509 20.9996 20.6955 20.9069 20.9993 20.7313C21.303 20.5556 21.5552 20.3031 21.7305 19.9991C21.9058 19.6951 21.998 19.3504 21.9979 18.9995C21.9978 18.6486 21.9054 18.3039 21.73 18Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 9V13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 17H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'brain'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 5.00005C12.0012 4.60008 11.9224 4.20391 11.7682 3.83485C11.614 3.46579 11.3876 3.13128 11.1023 2.851C10.8169 2.57072 10.4784 2.35032 10.1067 2.20278C9.73491 2.05524 9.33739 1.98353 8.93751 1.99186C8.53762 2.0002 8.14344 2.08841 7.77815 2.25132C7.41286 2.41422 7.08383 2.64853 6.81041 2.94045C6.537 3.23238 6.32472 3.57604 6.18606 3.9512C6.04741 4.32637 5.98517 4.72548 6.00301 5.12505C5.41521 5.27619 4.86952 5.5591 4.40724 5.95236C3.94497 6.34562 3.57825 6.83892 3.33486 7.3949C3.09146 7.95087 2.97777 8.55494 3.0024 9.16136C3.02703 9.76778 3.18933 10.3606 3.47701 10.8951C2.97119 11.306 2.57344 11.8343 2.31835 12.434C2.06327 13.0337 1.95857 13.6866 2.01338 14.336C2.06818 14.9854 2.28083 15.6116 2.63282 16.1601C2.98481 16.7085 3.46548 17.1627 4.03301 17.4831C3.96293 18.0253 4.00475 18.5761 4.1559 19.1016C4.30705 19.627 4.56431 20.1159 4.9118 20.538C5.25929 20.9601 5.68962 21.3065 6.17623 21.5558C6.66284 21.8051 7.19539 21.952 7.74099 21.9874C8.28659 22.0228 8.83365 21.946 9.3484 21.7617C9.86315 21.5774 10.3346 21.2895 10.7338 20.9158C11.1329 20.5421 11.4512 20.0906 11.669 19.5891C11.8868 19.0876 11.9994 18.5468 12 18V5.00005Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13C9.83956 12.7047 10.5727 12.167 11.1067 11.455C11.6407 10.743 11.9515 9.88867 12 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.00299 5.125C6.02277 5.60873 6.15932 6.0805 6.40099 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.47699 10.896C3.65993 10.747 3.85569 10.6145 4.06199 10.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.99999 18C5.31082 18.0003 4.63326 17.8226 4.03299 17.484" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 13H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 18H18C18.5304 18 19.0391 18.2107 19.4142 18.5858C19.7893 18.9609 20 19.4696 20 20V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 8V5C16 4.46957 16.2107 3.96086 16.5858 3.58579C16.9609 3.21071 17.4696 3 18 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 13.5C16.2761 13.5 16.5 13.2761 16.5 13C16.5 12.7239 16.2761 12.5 16 12.5C15.7239 12.5 15.5 12.7239 15.5 13C15.5 13.2761 15.7239 13.5 16 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 3.5C18.2761 3.5 18.5 3.27614 18.5 3C18.5 2.72386 18.2761 2.5 18 2.5C17.7239 2.5 17.5 2.72386 17.5 3C17.5 3.27614 17.7239 3.5 18 3.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 21.5C20.2761 21.5 20.5 21.2761 20.5 21C20.5 20.7239 20.2761 20.5 20 20.5C19.7239 20.5 19.5 20.7239 19.5 21C19.5 21.2761 19.7239 21.5 20 21.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 8.5C20.2761 8.5 20.5 8.27614 20.5 8C20.5 7.72386 20.2761 7.5 20 7.5C19.7239 7.5 19.5 7.72386 19.5 8C19.5 8.27614 19.7239 8.5 20 8.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'trend'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22 7L13.5 15.5L8.5 10.5L2 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 7H22V13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'building'   => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 22V4C6 3.46957 6.21071 2.96086 6.58579 2.58579C6.96086 2.21071 7.46957 2 8 2H16C16.5304 2 17.0391 2.21071 17.4142 2.58579C17.7893 2.96086 18 3.46957 18 4V22H6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 12H4C3.46957 12 2.96086 12.2107 2.58579 12.5858C2.21071 12.9609 2 13.4696 2 14V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 9H20C20.5304 9 21.0391 9.21071 21.4142 9.58579C21.7893 9.96086 22 10.4696 22 11V20C22 20.5304 21.7893 21.0391 21.4142 21.4142C21.0391 21.7893 20.5304 22 20 22H18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 6H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 10H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 14H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 18H14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
			'shield'     => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 13C20 18 16.5 20.5 12.34 21.95C12.1222 22.0238 11.8855 22.0202 11.67 21.94C7.5 20.5 4 18 4 13V5.99996C4 5.73474 4.10536 5.48039 4.29289 5.29285C4.48043 5.10532 4.73478 4.99996 5 4.99996C7 4.99996 9.5 3.79996 11.24 2.27996C11.4519 2.09896 11.7214 1.99951 12 1.99951C12.2786 1.99951 12.5481 2.09896 12.76 2.27996C14.51 3.80996 17 4.99996 19 4.99996C19.2652 4.99996 19.5196 5.10532 19.7071 5.29285C19.8946 5.48039 20 5.73474 20 5.99996V13Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_get_icon_markup' ) ) :
	/**
	 * Returns an inline icon.
	 *
	 * @param string $name Icon name.
	 * @return string
	 */
	function latrobeweb_get_icon_markup( $name ) {
		$icons = latrobeweb_get_theme_icons();
		return $icons[ $name ] ?? '';
	}
endif;

if ( ! function_exists( 'latrobeweb_render_icon' ) ) :
	/**
	 * Renders an inline icon.
	 *
	 * @param string $name Icon name.
	 * @return void
	 */
	function latrobeweb_render_icon( $name ) {
		$icon = latrobeweb_get_icon_markup( $name );
		if ( $icon ) {
			echo wp_kses( $icon, latrobeweb_get_svg_allowed() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}
endif;

if ( ! function_exists( 'latrobeweb_component' ) ) :
	/**
	 * Renders a component partial from the components directory.
	 *
	 * @param string               $name Component name.
	 * @param array<string, mixed> $args Component arguments.
	 * @return void
	 */
	function latrobeweb_component( $name, $args = array() ) {
		$file = get_template_directory() . '/components/' . $name . '.php';
		if ( file_exists( $file ) ) {
			include $file;
		}
	}
endif;
