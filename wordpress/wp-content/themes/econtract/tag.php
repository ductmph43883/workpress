<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */
$noibat = array(
    'post_type' => 'post',
    'orderby'   => 'publish_date',
    'posts_per_page' => 5,
    'order'     => 'DESC',
    'meta_query'    => array(
        array(
            'key'       => 'noi_bat',
            'value'     => 'Có',
            'compare'   => '=',
        ),
    ),
);
$tag = get_queried_object();
get_header();
?>
    <main class="page-price">
        <section class="box-bread">
            <div class="container">
                <ul>
                    <li>
                        <a href="/"><?php pll_e( 'Trang chủ' ); ?></a>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </li>
                    <li><a href="javascript:void(0)"><span><?= $tag->name; ?></span></a></li>
                </ul>
            </div>
        </section>
        <section class="box-news-list">
            <div class="container">
                <div class="row">
                    <?php
                    global $query_string;
                    wp_parse_str( $query_string, $search_args );
                    $search_query = new WP_Query($search_args);
                    $total_results = $search_query->found_posts ? $search_query->found_posts : 0;
                    echo '<div class="col-md-8"><div class="title-price title-tags">Các chủ đề liên quan: '.$tag->name ;
                    echo '</div></div>';
                    if($search_query->have_posts()):
                        ?>
                        <div class="col-md-8">
                            <div class="list-news">
                                <div class="">
                                    <?php
                                    while($search_query->have_posts()):
                                        $search_query->the_post();
                                        ?>
                                        <div class="item-news">
                                            <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                            <div class="info">
                                                <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                                <div class="desc">
                                                    <?php echo get_the_excerpt(); ?>
                                                </div>
                                                <div class="readmore">
                                                    <a href="<?php echo get_the_permalink() ?>">
                                                        <span><?php pll_e( 'Xem thêm' ); ?></span>
                                                        <svg width="35" height="18" viewBox="0 0 35 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L33 9" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                            <path d="M25 1L33 9L25 17" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                    <div class="col-md-4">
                        <div class="side-bar-news text-center">
                            <h4><?php pll_e('Triển khai với Quy trình không chạm - Hợp đồng không giấy','option') ?></h4>
                            <div class="avr-side"><img src="<?php echo get_field('avr_sidebar','option')['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="btn-side"><a href="<?php the_field('link_cta_bar','option') ?>"> <?php pll_e('Dùng ngay') ?></a></div>
                            <div class="side-bott">
                                <ul>
                                    <li><a href="tel:<?php the_field('hotline_bar','option') ?>" class="hotline-side">Hotline <?php the_field('hotline_bar','option') ?></a></li>
                                    <li><?php the_field('email_bar','option') ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner-qc">
            <div class="container">
                <div class="content-qc">
                    <div class="logo-qc"><img src="<?php echo get_field('logo_bott','option')['url'] ?>" class="img-fluid" alt=""></div>
                    <h3><?php pll_e( 'TIÊN PHONG GIẢI PHÁP SỐ HOÁ DOANH NGHIỆP' ); ?></h3>
                    <div class="link-more">
                        <a href="<?php the_field('title_bott_copy2','option') ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.999 12.0054C16.999 12.0034 17 12.0024 17 12.0004C17 11.9674 16.984 11.9404 16.981 11.9084C16.973 11.8124 16.961 11.7164 16.924 11.6264C16.897 11.5584 16.851 11.5044 16.81 11.4444C16.779 11.4004 16.762 11.3494 16.724 11.3094L13.861 8.30943C13.479 7.90943 12.847 7.89543 12.447 8.27643C12.048 8.65743 12.033 9.29043 12.414 9.69043L13.664 11.0004H7.99996C7.44796 11.0004 6.99996 11.4474 6.99996 12.0004C6.99996 12.5524 7.44796 13.0004 7.99996 13.0004H13.586L12.293 14.2934C11.902 14.6834 11.902 15.3164 12.293 15.7074C12.488 15.9024 12.744 16.0004 13 16.0004C13.256 16.0004 13.512 15.9024 13.707 15.7074L16.707 12.7074C16.798 12.6164 16.872 12.5064 16.922 12.3854C16.973 12.2644 16.998 12.1354 16.999 12.0054ZM12 20C7.58896 20 3.99996 16.411 3.99996 12C3.99996 7.58901 7.58896 4.00001 12 4.00001C16.411 4.00001 20 7.58901 20 12C20 16.411 16.411 20 12 20ZM12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12C22 6.486 17.514 2 12 2Z"
                                        fill="white" />
                                </g>
                            </svg>
                            <span><?php pll_e( 'Xem chi tiết' ); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php
get_footer();
