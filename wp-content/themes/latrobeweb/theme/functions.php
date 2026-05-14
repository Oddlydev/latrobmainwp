<?php
/**
 * latrobeweb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package latrobeweb
 */

if ( ! defined( 'LATROBEWEB_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'LATROBEWEB_VERSION', '0.1.0' );
}

if ( ! defined( 'LATROBEWEB_LOGIN_URL' ) ) {
	define( 'LATROBEWEB_LOGIN_URL', 'https://hzb21crtlga4y8d2dror4g9us.js.wpenginepowered.com/login/' );
}

if ( ! defined( 'LATROBEWEB_FONT_URL' ) ) {
	define( 'LATROBEWEB_FONT_URL', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800;900&display=swap' );
}

if ( ! defined( 'LATROBEWEB_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `latrobeweb_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'LATROBEWEB_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'latrobeweb_asset_version' ) ) :
	/**
	 * Returns a cache-busting version based on file modification time.
	 *
	 * @param string $relative_path File path relative to the theme directory.
	 * @return string
	 */
	function latrobeweb_asset_version( $relative_path ) {
		$file_path = get_template_directory() . '/' . ltrim( $relative_path, '/' );

		if ( file_exists( $file_path ) ) {
			return (string) filemtime( $file_path );
		}

		return LATROBEWEB_VERSION;
	}
endif;

if ( ! function_exists( 'latrobeweb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function latrobeweb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on latrobeweb, use a find and replace
		 * to change 'latrobeweb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'latrobeweb', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'latrobeweb' ),
				'menu-2' => __( 'Footer Menu', 'latrobeweb' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				LATROBEWEB_FONT_URL,
				'style-editor.css?ver=' . rawurlencode( latrobeweb_asset_version( 'style-editor.css' ) ),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'latrobeweb_setup' );

if ( ! function_exists( 'latrobeweb_get_menu_items' ) ) :
	/**
	 * Returns top-level WordPress menu items for a menu location.
	 *
	 * @param string $location Menu location key.
	 * @return array<int, array{id:string,label:string,url:string}>
	 */
	function latrobeweb_get_menu_items( $location ) {
		$locations = get_nav_menu_locations();
		$menu_id   = $locations[ $location ] ?? 0;
		$items     = array();

		if ( $menu_id ) {
			$menu_items = wp_get_nav_menu_items( $menu_id );

			if ( is_array( $menu_items ) ) {
				foreach ( $menu_items as $menu_item ) {
					if ( (int) $menu_item->menu_item_parent !== 0 ) {
						continue;
					}

					$items[] = array(
						'id'    => (string) $menu_item->ID,
						'label' => (string) $menu_item->title,
						'url'   => (string) $menu_item->url,
					);
				}
			}
		}

		return $items;
	}
endif;

if ( ! function_exists( 'latrobeweb_format_article_date' ) ) :
	/**
	 * Formats an article date using UTC semantics for YYYY-MM-DD values.
	 *
	 * @param string|null $raw_date Raw date value.
	 * @return string|null
	 */
	function latrobeweb_format_article_date( $raw_date ) {
		if ( empty( $raw_date ) || ! is_string( $raw_date ) ) {
			return null;
		}

		if ( preg_match( '/^(\d{4})-(\d{2})-(\d{2})/', $raw_date, $matches ) ) {
			$timestamp = gmmktime( 0, 0, 0, (int) $matches[2], (int) $matches[3], (int) $matches[1] );
			return gmdate( 'F j, Y', $timestamp );
		}

		$timestamp = strtotime( $raw_date );
		if ( false === $timestamp ) {
			return null;
		}

		return gmdate( 'F j, Y', $timestamp );
	}
endif;

if ( ! function_exists( 'latrobeweb_render_rich_text_article' ) ) :
	/**
	 * Renders a rich text article block.
	 *
	 * @param array<string, mixed> $args Article arguments.
	 * @return void
	 */
	function latrobeweb_render_rich_text_article( $args = array() ) {
		$title               = $args['title'] ?? '';
		$date                = $args['date'] ?? '';
		$content             = $args['content'] ?? '';
		$date_label          = $args['date_label'] ?? 'Updated';
		$is_rendered_content = ! empty( $args['is_rendered_content'] );
		$formatted_date      = latrobeweb_format_article_date( is_string( $date ) ? $date : '' );

		$allowed_html                 = wp_kses_allowed_html( 'post' );
		$allowed_html['figure']       = array( 'class' => true );
		$allowed_html['figcaption']   = array( 'class' => true );
		$allowed_html['img']['class'] = true;
		$allowed_html['img']['alt']   = true;
		$allowed_html['img']['src']   = true;
		?>
		<div class="la-article-shell">
			<article class="la-article">
				<?php if ( $title || $formatted_date ) : ?>
					<header class="la-article-header">
						<?php if ( $title ) : ?>
							<h1><?php echo esc_html( (string) $title ); ?></h1>
						<?php endif; ?>

						<?php if ( $formatted_date ) : ?>
							<p class="la-article-meta">
								<span><?php echo esc_html( (string) $date_label ); ?></span>
								<span aria-hidden="true" class="la-article-meta-separator"></span>
								<time datetime="<?php echo esc_attr( is_string( $date ) ? $date : '' ); ?>"><?php echo esc_html( $formatted_date ); ?></time>
							</p>
						<?php endif; ?>
					</header>
				<?php endif; ?>
				<div class="la-wysiwyg">
					<?php if ( $is_rendered_content ) : ?>
						<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php else : ?>
						<?php echo wp_kses( (string) $content, $allowed_html ); ?>
					<?php endif; ?>
				</div>
			</article>
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'latrobeweb_render_section_header' ) ) :
	/**
	 * Renders a section header block.
	 *
	 * @param array<string, mixed> $args Header arguments.
	 * @return void
	 */
	function latrobeweb_render_section_header( $args = array() ) {
		$eyebrow       = $args['eyebrow'] ?? '';
		$title         = $args['title'] ?? '';
		$lead          = $args['lead'] ?? '';
		$class_name    = $args['class_name'] ?? '';
		$eyebrow_class = $args['eyebrow_class'] ?? '';
		$title_class   = $args['title_class'] ?? '';
		$lead_class    = $args['lead_class'] ?? '';
		$centered      = ! empty( $args['centered'] );
		?>
		<div class="la-section-heading <?php echo $centered ? 'la-section-heading--center' : 'la-section-heading--left'; ?> <?php echo esc_attr( (string) $class_name ); ?>">
			<?php if ( $eyebrow ) : ?>
				<p class="eyebrow <?php echo esc_attr( (string) $eyebrow_class ); ?>"><?php echo esc_html( (string) $eyebrow ); ?></p>
			<?php endif; ?>
			<?php if ( $title ) : ?>
				<h2 class="la-section-title <?php echo esc_attr( (string) $title_class ); ?>"><?php echo esc_html( (string) $title ); ?></h2>
			<?php endif; ?>
			<?php if ( $lead ) : ?>
				<p class="la-section-lead <?php echo esc_attr( (string) $lead_class ); ?>"><?php echo esc_html( (string) $lead ); ?></p>
			<?php endif; ?>
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'latrobeweb_get_footer_menu_items' ) ) :
	/**
	 * Returns footer menu items from the assigned WordPress menu with a fallback.
	 *
	 * @return array<int, array{label:string,url:string}>
	 */
	function latrobeweb_get_footer_menu_items() {
		$locations    = get_nav_menu_locations();
		$menu_id      = $locations['menu-2'] ?? 0;
		$footer_links = array();

		if ( $menu_id ) {
			$menu_items = wp_get_nav_menu_items( $menu_id );

			if ( is_array( $menu_items ) ) {
				foreach ( $menu_items as $menu_item ) {
					if ( (int) $menu_item->menu_item_parent !== 0 ) {
						continue;
					}

					$url = isset( $menu_item->url ) ? trim( (string) $menu_item->url ) : '';

					if ( '' === $url ) {
						$url = '#';
					} elseif ( '#' === substr( $url, 0, 1 ) ) {
						$url = '#';
					}

					$footer_links[] = array(
						'label' => $menu_item->title,
						'url'   => $url,
					);
				}
			}
		}

		if ( ! empty( $footer_links ) ) {
			return $footer_links;
		}

		$privacy_page = get_page_by_path( 'privacy-policy' );
		$terms_page   = get_page_by_path( 'terms-of-use' );
		$contact_page = get_page_by_path( 'contact' );

		return array(
			array(
				'label' => 'Privacy Policy',
				'url'   => $privacy_page ? get_permalink( $privacy_page ) : '#',
			),
			array(
				'label' => 'Terms of Use',
				'url'   => $terms_page ? get_permalink( $terms_page ) : '#',
			),
			array(
				'label' => 'IT Support',
				'url'   => '#',
			),
			array(
				'label' => 'Contact',
				'url'   => $contact_page ? get_permalink( $contact_page ) : home_url( '/#contact' ),
			),
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_get_footer_nav_items' ) ) :
	/**
	 * Returns footer navigation items.
	 *
	 * @return array<int, array{id:string,label:string,url:string}>
	 */
	function latrobeweb_get_footer_nav_items() {
		$footer_links = latrobeweb_get_footer_menu_items();
		$items        = array();

		foreach ( $footer_links as $index => $item ) {
			$items[] = array(
				'id'    => (string) $index,
				'label' => $item['label'],
				'url'   => $item['url'],
			);
		}

		return $items;
	}
endif;

if ( ! function_exists( 'latrobeweb_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function latrobeweb_posted_on() {
		$time_string = '<time class="published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		printf(
			'<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_posted_by' ) ) :
	/**
	 * Prints HTML with meta information about theme author.
	 */
	function latrobeweb_posted_by() {
		printf(
		/* translators: 1: posted by label, only visible to screen readers. 2: author link. 3: post author. */
			'<span class="sr-only">%1$s</span><span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span>',
			esc_html__( 'Posted by', 'latrobeweb' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_comment_count' ) ) :
	/**
	 * Prints HTML with the comment count for the current post.
	 */
	function latrobeweb_comment_count() {
		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			comments_popup_link( sprintf( __( 'Leave a comment<span class="sr-only"> on %s</span>', 'latrobeweb' ), get_the_title() ) );
		}
	}
endif;

if ( ! function_exists( 'latrobeweb_entry_meta' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function latrobeweb_entry_meta() {
		if ( 'post' === get_post_type() ) {
			latrobeweb_posted_by();
			latrobeweb_posted_on();

			$categories_list = get_the_category_list( __( ', ', 'latrobeweb' ) );
			if ( $categories_list ) {
				printf(
					'<span><span class="sr-only">%1$s</span>%2$s</span>',
					esc_html__( 'Posted in', 'latrobeweb' ),
					$categories_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}

			$tags_list = get_the_tag_list( '', __( ', ', 'latrobeweb' ) );
			if ( $tags_list ) {
				printf(
					'<span><span class="sr-only">%1$s</span>%2$s</span>',
					esc_html__( 'Tags:', 'latrobeweb' ),
					$tags_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}
		}

		if ( ! is_singular() ) {
			latrobeweb_comment_count();
		}

		edit_post_link(
			sprintf(
				wp_kses(
					__( 'Edit <span class="sr-only">%s</span>', 'latrobeweb' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function latrobeweb_entry_footer() {
		if ( 'post' === get_post_type() ) {
			latrobeweb_posted_by();
			latrobeweb_posted_on();

			$categories_list = get_the_category_list( __( ', ', 'latrobeweb' ) );
			if ( $categories_list ) {
				printf(
					'<span><span class="sr-only">%1$s</span>%2$s</span>',
					esc_html__( 'Posted in', 'latrobeweb' ),
					$categories_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}

			$tags_list = get_the_tag_list( '', __( ', ', 'latrobeweb' ) );
			if ( $tags_list ) {
				printf(
					'<span><span class="sr-only">%1$s</span>%2$s</span>',
					esc_html__( 'Tags:', 'latrobeweb' ),
					$tags_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}
		}

		if ( ! is_singular() ) {
			latrobeweb_comment_count();
		}

		edit_post_link(
			sprintf(
				wp_kses(
					__( 'Edit <span class="sr-only">%s</span>', 'latrobeweb' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 */
	function latrobeweb_post_thumbnail() {
		if ( ! latrobeweb_can_show_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>
			<figure>
				<?php the_post_thumbnail(); ?>
			</figure><!-- .post-thumbnail -->
			<?php
		else :
			?>
			<figure>
				<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
			<?php
		endif;
	}
endif;

if ( ! function_exists( 'latrobeweb_comment_avatar' ) ) :
	/**
	 * Returns the HTML markup to generate a user avatar.
	 *
	 * @param mixed $id_or_email The Gravatar to retrieve.
	 * @return string
	 */
	function latrobeweb_get_user_avatar_markup( $id_or_email = null ) {
		if ( ! isset( $id_or_email ) ) {
			$id_or_email = get_current_user_id();
		}

		return sprintf( '<div class="vcard">%s</div>', get_avatar( $id_or_email, latrobeweb_get_avatar_size() ) );
	}
endif;

if ( ! function_exists( 'latrobeweb_discussion_avatars_list' ) ) :
	/**
	 * Displays a list of avatars involved in a discussion for a given post.
	 *
	 * @param array $comment_authors Comment authors to list as avatars.
	 * @return void
	 */
	function latrobeweb_discussion_avatars_list( $comment_authors ) {
		if ( empty( $comment_authors ) ) {
			return;
		}

		echo '<ol>', "\n";
		foreach ( $comment_authors as $id_or_email ) {
			printf(
				"<li>%s</li>\n",
				latrobeweb_get_user_avatar_markup( $id_or_email ) // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			);
		}
		echo '</ol>', "\n";
	}
endif;

if ( ! function_exists( 'latrobeweb_the_posts_navigation' ) ) :
	/**
	 * Wraps `the_posts_pagination` for use throughout the theme.
	 */
	function latrobeweb_the_posts_navigation() {
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => __( 'Newer posts', 'latrobeweb' ),
				'next_text' => __( 'Older posts', 'latrobeweb' ),
			)
		);
	}
endif;

if ( ! function_exists( 'latrobeweb_content_class' ) ) :
	/**
	 * Displays the class names for the post content wrapper.
	 *
	 * @param string|string[] $classes Space-separated string or array of class names.
	 * @return void
	 */
	function latrobeweb_content_class( $classes = '' ) {
		$all_classes = array( $classes, LATROBEWEB_TYPOGRAPHY_CLASSES );

		foreach ( $all_classes as &$class_groups ) {
			if ( ! empty( $class_groups ) ) {
				if ( ! is_array( $class_groups ) ) {
					$class_groups = preg_split( '#\s+#', $class_groups );
				}
			} else {
				$class_groups = array();
			}
		}

		$combined_classes = array_merge( $all_classes[0], $all_classes[1] );
		$combined_classes = array_map( 'esc_attr', $combined_classes );

		echo 'class="' . esc_attr( implode( ' ', $combined_classes ) ) . '"';
	}
endif;

if ( ! function_exists( 'latrobeweb_site_brand' ) ) :
	/**
	 * Renders the shared site brand block.
	 *
	 * @param array<string, mixed> $args Brand options.
	 * @return void
	 */
	function latrobeweb_site_brand( $args = array() ) {
		$defaults = array(
			'title'               => 'PCAT',
			'theme'               => 'dark',
			'show_subtitle'       => true,
			'subtitle'            => 'PCAT Research Programme',
			'subtitle_uppercase'  => true,
			'show_divider'        => true,
			'logo_width_class'    => 'w-[51px]',
			'use_display_font'    => true,
			'title_class_name'    => '',
			'subtitle_class_name' => '',
			'url'                 => home_url( '/' ),
			'class_name'          => '',
		);
		$args = wp_parse_args( $args, $defaults );

		$title               = isset( $args['title'] ) ? (string) $args['title'] : 'PCAT';
		$theme               = isset( $args['theme'] ) ? (string) $args['theme'] : 'dark';
		$show_subtitle       = array_key_exists( 'show_subtitle', $args ) ? (bool) $args['show_subtitle'] : true;
		$subtitle            = isset( $args['subtitle'] ) ? (string) $args['subtitle'] : 'PCAT Research Programme';
		$subtitle_uppercase  = array_key_exists( 'subtitle_uppercase', $args ) ? (bool) $args['subtitle_uppercase'] : true;
		$show_divider        = array_key_exists( 'show_divider', $args ) ? (bool) $args['show_divider'] : true;
		$logo_width_class    = isset( $args['logo_width_class'] ) ? (string) $args['logo_width_class'] : 'w-[51px]';
		$use_display_font    = array_key_exists( 'use_display_font', $args ) ? (bool) $args['use_display_font'] : true;
		$title_class_name    = isset( $args['title_class_name'] ) ? (string) $args['title_class_name'] : '';
		$subtitle_class_name = isset( $args['subtitle_class_name'] ) ? (string) $args['subtitle_class_name'] : '';
		$url                 = isset( $args['url'] ) ? (string) $args['url'] : '';
		$class_name          = isset( $args['class_name'] ) ? (string) $args['class_name'] : '';

		$tag                 = $url ? 'a' : 'div';
		$text_color          = 'dark' === $theme ? 'text-zinc-50' : 'text-white';
		$subtitle_color      = 'dark' === $theme ? 'text-gray-400' : 'text-white/60';
		$border_color        = 'dark' === $theme ? 'border-gray-200' : 'border-white/20';
		$subtitle_case       = $subtitle_uppercase ? 'uppercase tracking-wide' : 'tracking-normal';
		$title_font_class    = $use_display_font ? 'font-display' : '';
		$subtitle_font_class = $use_display_font ? 'font-display' : '';
		?>
		<<?php echo esc_attr( $tag ); ?>
			<?php if ( $url ) : ?>
				href="<?php echo esc_url( $url ); ?>"
			<?php endif; ?>
			class="<?php echo esc_attr( trim( 'la-site-brand ' . $class_name ) ); ?>"
		>
			<img
				src="<?php echo esc_url( latrobeweb_asset_uri( 'images/logo-light.svg' ) ); ?>"
				alt="La Trobe University"
				class="<?php echo esc_attr( trim( 'h-auto shrink-0 ' . $logo_width_class ) ); ?>"
			/>
			<div class="<?php echo esc_attr( trim( 'flex flex-col ' . ( $show_divider ? 'border-l pl-4 ' . $border_color : '' ) ) ); ?>">
				<p class="<?php echo esc_attr( trim( $title_font_class . ' text-base font-semibold leading-4 ' . $text_color . ' ' . $title_class_name ) ); ?>">
					<?php echo esc_html( $title ); ?>
				</p>
				<?php if ( $show_subtitle ) : ?>
					<p class="<?php echo esc_attr( trim( $subtitle_font_class . ' mt-1 text-xs font-medium leading-4 ' . $subtitle_case . ' ' . $subtitle_color . ' ' . $subtitle_class_name ) ); ?>">
						<?php echo esc_html( $subtitle ); ?>
					</p>
				<?php endif; ?>
			</div>
		</<?php echo esc_attr( $tag ); ?>>
		<?php
	}
endif;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function latrobeweb_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'latrobeweb' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'latrobeweb' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'latrobeweb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function latrobeweb_scripts() {
	wp_enqueue_style( 'latrobeweb-fonts', LATROBEWEB_FONT_URL, array(), null );
	wp_enqueue_style( 'latrobeweb-style', get_stylesheet_uri(), array(), latrobeweb_asset_version( 'style.css' ) );
	wp_enqueue_script( 'latrobeweb-script', get_template_directory_uri() . '/js/script.min.js', array(), latrobeweb_asset_version( 'js/script.min.js' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'latrobeweb_scripts' );

/**
 * Enqueue the block editor script.
 */
function latrobeweb_enqueue_block_editor_script() {
	$current_screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;

	if (
		$current_screen &&
		$current_screen->is_block_editor() &&
		'widgets' !== $current_screen->id
	) {
		wp_enqueue_script(
			'latrobeweb-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			latrobeweb_asset_version( 'js/block-editor.min.js' ),
			true
		);
		wp_add_inline_script( 'latrobeweb-editor', "tailwindTypographyClasses = '" . esc_attr( LATROBEWEB_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'latrobeweb_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function latrobeweb_tinymce_add_class( $settings ) {
	$settings['body_class'] = LATROBEWEB_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'latrobeweb_tinymce_add_class' );

/**
 * Limit the block editor to heading levels supported by Tailwind Typography.
 *
 * @param array  $args Array of arguments for registering a block type.
 * @param string $block_type Block type name including namespace.
 * @return array
 */
function latrobeweb_modify_heading_levels( $args, $block_type ) {
	if ( 'core/heading' !== $block_type ) {
		return $args;
	}

	// Remove <h1>, <h5> and <h6>.
	$args['attributes']['levelOptions']['default'] = array( 2, 3, 4 );

	return $args;
}
add_filter( 'register_block_type_args', 'latrobeweb_modify_heading_levels', 10, 2 );

/**
 * Reusable component helpers.
 */
require get_template_directory() . '/inc/components.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
