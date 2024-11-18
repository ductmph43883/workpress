<?php
/**
 * econtract functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package econtract
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function econtract_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on econtract, use a find and replace
		* to change 'econtract' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'econtract', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'econtract' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'econtract_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'econtract_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function econtract_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'econtract_content_width', 640 );
}
add_action( 'after_setup_theme', 'econtract_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function econtract_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'econtract' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'econtract' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'econtract_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function econtract_scripts() {
	wp_enqueue_style( 'styles-css', get_template_directory_uri() . '/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION );
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), _S_VERSION );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), _S_VERSION );


    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );
    wp_enqueue_script('private-js', get_template_directory_uri() . '/assets/js/private.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'econtract_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Call Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-call-settings',
        'redirect'      => false
    ));
}

pll_register_string( 'header_login', 'Đăng nhập', 'options', true );

pll_register_string( 'banggia', 'Bảng giá Gói Ký hợp đồng, tài liệu điện tử FPT.eContract', 'options', true );
pll_register_string( 'banggia', 'Chọn mua', 'options', true );
pll_register_string( 'banggia', 'Liên hệ', 'options', true );
pll_register_string( 'banggia', 'Miễn phí', 'options', true );

pll_register_string( 'khachhang', 'Khách hàng tiêu biểu', 'options', true );
pll_register_string( 'khachhang', 'Mua ngay', 'options', true );


pll_register_string( 'footer', 'Công ty TNHH Hệ thống Thông tin FPT', 'options', true );
pll_register_string( 'footer', 'MỘT SẢN PHẨM CỦA', 'options', true );
pll_register_string( 'footer', 'LIÊN HỆ TƯ VẤN', 'options', true );
pll_register_string( 'footer', 'HỖ TRỢ KHÁCH HÀNG', 'options', true );
pll_register_string( 'footer', 'DỊCH VỤ', 'options', true );

pll_register_string( 'after_footer', 'TIÊN PHONG GIẢI PHÁP SỐ HOÁ DOANH NGHIỆP', 'options', true );
pll_register_string( 'after_footer', 'Xem chi tiết', 'options', true );
pll_register_string( 'after_footer', 'Tổng đài 24/7', 'options', true );
pll_register_string( 'address', 'address', 'options', true );

pll_register_string( 'options', 'Đăng ký', 'options', true );
pll_register_string( 'options', 'Trang chủ', 'options', true );
pll_register_string( 'options', 'Dùng ngay', 'options', true );
pll_register_string( 'options', 'Triển khai với Quy trình không chạm - Hợp đồng không giấy', 'options', true );
pll_register_string( 'options', 'Tin nổi bật', 'options', true );
pll_register_string( 'options', 'Tin liên quan', 'options', true );
pll_register_string( 'options', 'Xem thêm', 'options', true );
pll_register_string( 'options', 'Chọn', 'options', true );

pll_register_string( 'Contact', 'Họ và tên', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Nhập email', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Số điện thoại', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Gửi thông tin', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Nội dung yêu cầu tư vấn', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Nhập nội dung cần tư vấn', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Lỗi', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Mời quý khách hàng nhập Tên, Email, Số điện thoại.', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Cảm ơn bạn đã đăng ký', 'Contact Form 7', true );
pll_register_string( 'Contact', 'FPT.eContract sẽ liên hệ trong thời gian sớm nhất.', 'Contact Form 7', true );
pll_register_string( 'Contact', 'Thông tin người đăng ký', 'Contact Form 7', true );


pll_register_string( 'baogia', 'Đang lấy dữ liệu', 'baogia', true );
pll_register_string( 'baogia', 'Tư vấn cho tôi', 'baogia', true );
pll_register_string( 'baogia', 'GỌI', 'baogia', true );

pll_register_string( 'kienthuc', 'Đăng ký ngay để nhận thông tin hữu ích mỗi tuần', 'kienthuc', true );
pll_register_string( 'kienthuc', 'Kiến thức dành cho bạn', 'kienthuc', true );


pll_register_string( 'new', 'Tin FPT.eContract', 'new', true );
pll_register_string( 'new', 'Báo chí nói về FPT.eContract', 'new', true );
pll_register_string( 'new', 'Tin luật mới', 'new', true );

function wpb_custom_new_menu() {
	register_nav_menus( array(
	    'custom-menu' => __( 'Footer' ),
	    'language' => 'languages',
	    'mobile' => 'mobile',
	) );
}
add_action( 'init', 'wpb_custom_new_menu' );



add_action( 'wp_ajax_lienhe', 'lienhe' );
add_action( 'wp_ajax_nopriv_lienhe', 'lienhe' );
function lienhe() {
    $name = (isset($_POST['name'])) ? esc_attr($_POST['name']) : '';
    $email = (isset($_POST['mail'])) ? esc_attr($_POST['mail']) : '';
    $phone = (isset($_POST['phone'])) ? esc_attr($_POST['phone']) : '';
    $total = (isset($_POST['total'])) ? esc_attr($_POST['total']) : '';
    $phanmem = (isset($_POST['phanmem'])) ? esc_attr($_POST['phanmem']) : '';
    $banquyen = (isset($_POST['banquyen'])) ? esc_attr($_POST['banquyen']) : '';
    $tichhop = (isset($_POST['tichhop'])) ? esc_attr($_POST['tichhop']) : '';
    $usb = (isset($_POST['usb'])) ? esc_attr($_POST['usb']) : '';
    $km = (isset($_POST['km'])) ? esc_attr($_POST['km']) : '';
    // $ekyc = (isset($_POST['ekyc'])) ? esc_attr($_POST['ekyc']) : '';
    // $sms = (isset($_POST['sms'])) ? esc_attr($_POST['sms']) : ''; 
    // $hsm = (isset($_POST['hsm'])) ? esc_attr($_POST['hsm']) : '';
    $phone = (isset($_POST['phone'])) ? esc_attr($_POST['phone']) : '';
    $to = $_POST['mailnhan'];
    $subject = 'Khách để lại thông tin trang báo giá';
    $cc = get_field('danh_sach_email','option');

    // global $wpdb;
    // $entry = $wpdb->get_results( "SELECT * FROM wp_cf7_vdata_entry WHERE cf7_id = 1266" );
    // $count = $wpdb->num_rows;
    // $datetime = current_time('mysql');
    // $wpdb->query("INSERT INTO wp_cf7_vdata_entry
    //         (`name`, `cf7_id`, `data_id`, `value`)
    //         VALUES
    //         ('time', 1266, '$count', '$datetime'),
    //         ('total', 1266, '$count', '$total'),
    //         ('phanmem', 1266, '$count', '$phanmem'),
    //         ('banquyen', 1266, '$count', '$banquyen'),
    //         ('tichhop', 1266, '$count', '$tichhop'),
    //         ('usb', 1266, '$count', '$usb'),
    //         ('km', 1266, '$count', '$km'),
    //         ('name', 1266, '$count', '$name'),
    //         ('email', 1266, '$count', '$email'),
    //         ('phone', 1266, '$count', '$phone')");

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: '.$to."\r\n".
    'Cc: '.$cc."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $message = '<html><body>';
    $message .= '<h3>Khách hàng đã để lại liên lạc với thông tin như sau:</h3>';
    $message .= '<h4>Họ và Tên: '.$name.'</h4>';
    $message .= '<h4>SĐT: '.$phone.'</h4>';
    $message .= '<h4>Email: '.$email.'</h4>';
    $message .= '<h4>Phần mềm FPT.eContract: '.$phanmem.'</h4>';
    $message .= '<h4>Bản quyền phần mềm: '.$banquyen.'</h4>';
    $message .= '<h4>Tích hợp phần mềm FPT.eContract: '.$tichhop.'</h4>';
    $message .= '<h4>Chữ ký số USB token: '.$usb.'</h4>';
    $message .= '<h4>Khuyến mại: '.$km.'</h4>';
    $message .= '<p>Xin chân thành cảm ơn,</p>';
    $mes .= '<p>Hợp đồng điện tử FPT.eInvoice.</p>';
    $mes .= '<p>Liên hệ tư vấn:</p>';
    $mes .= '<p>- Tổng đài 24/7: 1900.636.191- ext 1</p>';
    $mes .= '<p>- Miền Bắc: 0934.583.499; 0919.626.829</p>';
    $mes .= '<p>- Miền Nam: 0934.453.466; 0932.991.468</p>';
    $mes .= '<p>- Email: FPT.eContract@fpt.com.vn</p>';
    $mes .= '<p>Hỗ trợ khách hàng:</p>';
    $mes .= '<p>- Tổng đài 24/7: 1900.636.191 - ext 3</p>';
    $mes .= '<p>- Email: customersupport@fpt.com.vn</p>';
    $mes .= '</body></html>';


    if( wp_mail($to, $subject, $message, $headers)){
        echo "mail sent";
    } else {
        echo "mail not sent";
    }

    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $header .= 'From: '.$to."\r\n".
    'X-Mailer: PHP/' . phpversion();

    $mes = '<html><body>';
    $mes .= '<h3>Cảm ơn bạn đã liên lạc. FPT.eContract với thông tin như sau:</h3>';
    $mes .= '<h4>Họ và Tên: '.$name.'</h4>';
    $mes .= '<h4>SĐT: '.$phone.'</h4>';
    $mes .= '<h4>Email: '.$phone.'</h4>';
    $mes .= '<h4>Phần mềm FPT.eContract: '.$phanmem.'</h4>';
    $mes .= '<h4>Bản quyền phần mềm: '.$banquyen.'</h4>';
    $mes .= '<h4>Tích hợp phần mềm FPT.eContract: '.$tichhop.'</h4>';
    $mes .= '<h4>Chữ ký số USB token: '.$usb.'</h4>';
    $mes .= '<h4>Khuyến mại: '.$km.'</h4>';
    $mes .= '<p>Chúng tôi xin phép liên lạc bạn trong thời gian sớm nhất để gởi đến bạn những thông tin mà bạn yêu cầu!</p>';
    $mes .= '<p>Xin chân thành cảm ơn,</p>';
    $mes .= '<p>Hợp đồng điện tử FPT.eContract.</p>';
    $mes .= '<p>Liên hệ tư vấn:</p>';
    $mes .= '<p>- Tổng đài 24/7: 1900.636.191- ext 1</p>';
    $mes .= '<p>- Miền Bắc: 0934.583.499; 0919.626.829</p>';
    $mes .= '<p>- Miền Nam: 0934.453.466; 0932.991.468</p>';
    $mes .= '<p>- Email: FPT.eContract@fpt.com.vn</p>';
    $mes .= '<p>Hỗ trợ khách hàng:</p>';
    $mes .= '<p>- Tổng đài 24/7: 1900.636.191 - ext 3</p>';
    $mes .= '<p>- Email: customersupport@fpt.com.vn</p>';
    $mes .= '</body></html>';

    if( wp_mail($email, 'Xác nhận đăng ký báo giá FPT.eContract', $mes, $header)){
        echo "mail sent";
    } else {
        echo "mail not sent";
    }

    die();
}
// Đăng ký action cho AJAX
add_action('wp_ajax_search', 'search');
add_action('wp_ajax_nopriv_search', 'search');

function search() {
	$search_keyword = sanitize_text_field($_POST['search_term']);
    global $wpdb; 
    $table = $wpdb->prefix . 'posts'; 
    $sql = "SELECT * FROM {$table} WHERE `post_type` = 'bai-huong-dan' AND `post_title`  LIKE '%$search_keyword%'";
    $data = $wpdb->get_results( $sql, ARRAY_A);
    $post_id = array(0);
    if ( $data ) {
        foreach($data as $val) {
            $post_id[] = $val['ID'];
        }
    }
	$args = array(
	    'post_type' => 'bai-huong-dan',
	    'posts_per_page' => -1,
        'post__in'  => $post_id,
	);
	$posts = get_posts($args);

    if (!empty($posts)) {
        $output = '';
        foreach ($posts as $post) {
            $output .= '<li><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
        }
    } else {
        $output = 'No posts found';
    }
    echo $output;
}


add_action('wp_ajax_my_repeater_show_more', 'my_repeater_show_more');
add_action('wp_ajax_nopriv_my_repeater_show_more', 'my_repeater_show_more');

function my_repeater_show_more() {
	$search = $_POST['search'];
	ob_start();
	if (have_rows('list_quess_box','option')) {
		$count_coll = 1; 
		while ( has_sub_field('list_quess_box','option')) :
			if ($search == '') {
			?>
				<div class="card-quess">
					<div class="head-quess">
						<button class="collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $count_coll; ?>" aria-expanded="true">
							<span class="icon"></span>
							<label>
                            <?php
                            if (get_locale() == 'vi') {
                                echo get_sub_field('cau_hoi_item');
                            }else{
                                echo get_sub_field('cau_hoi_item_en');
                            }
                            ?>
                            </label>
						</button>
					</div>
					<div id="collapse-<?php echo $count_coll; ?>" class="collapse" data-parent="#accordion">
						<div class="content-answer">
							<?php
                            if (get_locale() == 'vi') {
                                echo get_sub_field('tra_loi_item');
                            }else{
                                echo get_sub_field('tra_loi_item_en');
                            }
                            ?>
						</div>
					</div>
				</div>	
			<?php 
			$count_coll += 1;
			}else{
				if (get_locale() == 'vi') {
					if (strpos(strtolower(get_sub_field('cau_hoi_item','option')), strtolower($search)) !== false) {	 
				?>
				<div class="card-quess">
					<div class="head-quess">
						<button class="collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $count_coll; ?>" aria-expanded="true">
							<span class="icon"></span>
							<label><?php the_sub_field('cau_hoi_item','option') ?></label>
						</button>
					</div>
					<div id="collapse-<?php echo $count_coll; ?>" class="collapse" data-parent="#accordion">
						<div class="content-answer">
							<?php the_sub_field('tra_loi_item','option') ?>
						</div>
					</div>
				</div>	
			<?php 
					$count_coll += 1;
					}
				}else{
					if (strpos(strtolower(get_sub_field('cau_hoi_item_en','option')), strtolower($search)) !== false) {	 
				?>
				<div class="card-quess">
					<div class="head-quess">
						<button class="collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $count_coll; ?>" aria-expanded="true">
							<span class="icon"></span>
							<label><?php the_sub_field('cau_hoi_item_en','option') ?></label>
						</button>
					</div>
					<div id="collapse-<?php echo $count_coll; ?>" class="collapse" data-parent="#accordion">
						<div class="content-answer">
							<?php the_sub_field('tra_loi_item_en','option') ?>
						</div>
					</div>
				</div>	
			<?php 
					$count_coll += 1;
					}
				}
			}
		endwhile;
	} 
	$content = ob_get_clean();
	
	echo json_encode(array('content' => $content));
	exit;
} 



function fix_url($url) {
    $fixedUrl = str_replace("%2F", "/", $url);
    return $fixedUrl;
}

function redirect_301() {
    $currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $fixedUrl = fix_url($currentUrl);
    
    if ($fixedUrl !== $currentUrl) {
        wp_redirect($fixedUrl, 301);
        exit;
    }
}
add_action('template_redirect', 'redirect_301');



function load_more_posts() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $_POST['posts_per_page'],
        'cat' => json_encode($_POST['cat']),
        'paged' => $_POST['page'],
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Output your post content here
           echo '<div class="item-news">' .
            '<div class="avarta"><a href="' . get_the_permalink() . '"><img src="' . get_the_post_thumbnail_url() . '" class="img-fluid w-100" alt=""></a></div>' .
            '<div class="info">' .
            '<h3><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>' .
            '<div class="desc">' . get_the_excerpt() . '</div>' .
            '<div class="readmore">' .
            '<a href="' . get_the_permalink() . '">' .
            '<span>' . pll__('Xem thêm') . '</span>' .
            '<svg width="35" height="18" viewBox="0 0 35 18" fill="none" xmlns="http://www.w3.org/2000/svg">' .
            '<path d="M1 9L33 9" stroke="#828282" stroke-width="2" stroke-linecap="round"/>' .
            '<path d="M25 1L33 9L25 17" stroke="#828282" stroke-width="2" stroke-linecap="round"/>' .
            '</svg>' .
            '</a>' .
            '</div>' .
            '</div>' .
            '</div>';
        }
    }

    wp_die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');


add_action( 'wp_footer', 'mycustom_wp_footer' );
function mycustom_wp_footer() {
?>
<script type="text/javascript">
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		if ( event.detail.contactFormId == '2331' ) { 
			jQuery('#myModal').modal('show');
			jQuery('#myModal-form').modal('hide');
		}
		if ( event.detail.contactFormId == '2357' ) { 
			jQuery('#myModal').modal('show');
		}
		if ( event.detail.contactFormId == '9' ) { 
			jQuery('#myModal').modal('show');
		}
		if ( event.detail.contactFormId == '2398' ) { 
			jQuery('#myModal').modal('show');
		}
	}, false );
</script>
<?php  }
function wtd_wp_whitespace_fix($input) {
$allowed = false;
$found = false;
foreach (headers_list() as $header) {
    if (preg_match("/^content-type:\\s+(text\\/|application\\/((xhtml|atom|rss)\\+xml|xml))/i", $header)) {
         $allowed = true;
    }
if (preg_match("/^content-type:\\s+/i", $header)) {
    $found = true;
    }
}
if ($allowed || !$found) {
    return preg_replace("/\\A\\s*/m", "", $input);
} else {
        return $input;
}
}
ob_start("wtd_wp_whitespace_fix");
?>



