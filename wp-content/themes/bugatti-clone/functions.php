<?php
/**
 * Supercar Theme Functions
 *
 * @package Supercar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function child_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add partial refresh support for Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Register Navigation Menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'bugatti-clone' ),
			'footer'  => esc_html__( 'Footer Menu', 'bugatti-clone' ),
		)
	);

	// Load text domain for translation.
	load_theme_textdomain( 'supercar', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );

/**
 * Enqueue Scripts and Styles
 */
function child_theme_scripts() {

    // ==== STYLES (HEAD) ====
    // 1) Revolution Slider settings CSS (local)
    wp_enqueue_style(
        'rs-plugin-settings', get_template_directory_uri() . '/plugins/revslider/rs-plugin-settings.min.css', [], '', 'all'
    );

    // 2) Bootstrap 5.3.8 CSS (CDN)
    wp_enqueue_style(
        'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', [], '5.3.8', 'all'
    );

    // 3) Main style (local)
    wp_enqueue_style(
        'main-style', get_template_directory_uri() . '/assets/css/main-style.min.css', ['bootstrap'], '1.0.0', 'all'
    );

    // 4) Font Awesome v7 (CDN)
    wp_enqueue_style(
        'font-awesome-7', 'https://site-assets.fontawesome.com/releases/v7.0.0/css/all.css', [], '7.0.0', 'all'
    );

    // 6) Vendors CSS
    wp_enqueue_style( 'Eremitage', get_template_directory_uri() . '/assets/vendors/Eremitage.min.css', [], '1.0.0', 'all'
    );
	
    wp_enqueue_style(
        'pe-icon-stroke', get_template_directory_uri() . '/assets/vendors/pe-icon-stroke.min.css', [], '1.2.0', 'all'
    );

	    // 5) Start style (local)
    wp_enqueue_style(
        'style-css', get_template_directory_uri() . '/style.css', ['main-style'], '1.0.0', 'all'
    );

    // ==== SCRIPTS ====

    // jQuery: WP đã có sẵn. Nếu bạn cần file local 'assets/js/jquery/jquery.js' thì **không khuyến nghị** ghi đè.
    // Chỉ làm khi thật cần thiết:
    // wp_deregister_script('jquery');
    // wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery/jquery.js', [], '3.7.1', false);
    // wp_enqueue_script('jquery');

    // 7) Bootstrap Bundle (CDN) — cần Popper, đã có trong bundle
    // Để nó ở header giống bạn đang dùng => $in_footer = false
    wp_enqueue_script(
		'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', [], '5.3.8', false // false => chèn ở HEAD
    );

    // 8) Revolution Slider scripts (local) — phụ thuộc jQuery
    wp_enqueue_script(
        'rbtools', get_template_directory_uri() . '/plugins/revslider/js/rbtools.min.js', ['jquery'], '6.0.0', false // HEAD
    );
    wp_enqueue_script(
        'rs6', get_template_directory_uri() . '/plugins/revslider/js/rs6.min.js', ['jquery', 'rbtools'], '6.0.0', false // HEAD
    );

    // 9) Price range / Bootstrap slider vendor (local)
    wp_enqueue_script(
        'bootstrap-slider', get_template_directory_uri() . '/assets/vendors/price_range/bootstrap-slider.min.js', ['jquery'], '11.0.2', false // HEAD (nếu muốn nhanh hơn có thể để footer = true)
    );

	// Localize script for AJAX or dynamic data if needed
	// wp_localize_script( 'bugatti-main', 'bugattiData', array(
	// 	'root_url' => get_site_url(),
	// 	'theme_url' => get_template_directory_uri(),
	// ));
}
add_action( 'wp_enqueue_scripts', 'child_theme_scripts' );

function theme_enqueue_assets_footer() {
    // ====== STYLES (load ở HEAD như bình thường) ======
    wp_enqueue_style(
        'flexslider2', get_template_directory_uri() . 'assets/vendors/flexslider/flexslider.css', [],'', 'all'
    );

    wp_enqueue_style(
        'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.css', [], '2.3.4', 'all'
    );

    wp_enqueue_style(
        'slickcss', get_template_directory_uri() . '/assets/css/slick.css', [], '1.8.1', 'all'
    );

    // JS Composer (WPBakery) TTA CSS
    wp_enqueue_style(
        'vc-tta', get_template_directory_uri() . '/plugins/js_composer/assets/css/js_composer_tta.min.css', [], '', 'all'
    );

    // ====== SCRIPTS (đưa xuống FOOTER) ======

    // jQuery: dùng bản WordPress cung cấp
    // Nếu các file dưới cần jQuery thì thêm 'jquery' trong deps.

    // flexslider (từ uploads/siteground-optimizer-assets)
    wp_enqueue_script(
        'flexslider-min', get_template_directory_uri() . '/uploads/siteground-optimizer-assets/flexslider-min.min.js', ['jquery'], '2.7.2', true // FOOTER
    );

    // owl carousel
    wp_enqueue_script(
        'owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', ['jquery'], '2.3.4', true
    );

    // Bootstrap (BẠN ĐANG GỌI THÊM BẢN MIN LẺ, KHÔNG PHẢI BUNDLE)
    // Nếu ở nơi khác bạn đã enqueue bootstrap.bundle.min.js thì KHÔNG nên enqueue file này nữa để tránh trùng.
    // Ở đây vẫn theo yêu cầu của bạn:
    wp_enqueue_script(
        'bootstrap-5-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js', [], '5.3.8', true
    );
    // (Tuỳ chọn) thêm integrity/crossorigin cho file trên bằng filter ở phần 2.

    // main.min.js (tối ưu bởi SiteGround Optimizer)
    wp_enqueue_script(
        'main-min', get_template_directory_uri() . '/uploads/siteground-optimizer-assets/main.min.js', ['jquery'], null, true
    );

    // slickjs
    wp_enqueue_script(
        'slickjs', get_template_directory_uri() . '/uploads/siteground-optimizer-assets/slickjs.min.js', ['jquery'], '1.8.1', true
    );

    // easytabs
    wp_enqueue_script(
        'jquery-easytabs', get_template_directory_uri() . '/assets/js/jquery.easytabs.min.js', ['jquery'], '3.2.0', true
    );

    // sticky header (SG Optimizer)
    wp_enqueue_script(
        'sticky-header', get_template_directory_uri() . '/uploads/siteground-optimizer-assets/sticky-header.min.js', ['jquery'], null, true
    );

    // WPBakery: vc-accordion
    wp_enqueue_script(
        'vc-accordion', get_template_directory_uri() . '/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min.js', ['jquery'], '7.0', true
    );

    // WPBakery: vc-tabs
    wp_enqueue_script(
        'vc-tabs', get_template_directory_uri() . '/plugins/js_composer/assets/lib/vc_tabs/vc-tabs.min.js', ['jquery'], '7.0', true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets_footer');

/**
 * Remove generic WP bloat similar to a high-performance theme
 */
function bugatti_cleanup() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
}
add_action( 'init', 'bugatti_cleanup' );
