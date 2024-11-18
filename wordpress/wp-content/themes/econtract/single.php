<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

$category_type = get_the_category();
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
                    <?php
                    if ($category_type[0]) {
                    ?>
                    <li>
                        <a href="/<?php echo get_the_category()[0]->slug  ; ?>"><span><?php echo get_the_category()[0]->name  ; ?></span></a>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </li>
                    <?php
                    }
                    ?>
                    <li>
                        <a href="javascript:void(0)"><span><?php the_title(); ?></span></a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="box-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="detail-content">
                            <div class="detail-top">
                                <h1><?php the_title(); ?></h1>
                                <ul>
                                    <li>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19 11H5V7C5 6.449 5.449 6 6 6H7V7C7 7.55 7.45 8 8 8C8.55 8 9 7.55 9 7V6H15V7C15 7.55 15.45 8 16 8C16.55 8 17 7.55 17 7V6H18C18.551 6 19 6.449 19 7V11ZM16 17H12C11.45 17 11 16.55 11 16C11 15.45 11.45 15 12 15H16C16.55 15 17 15.45 17 16C17 16.55 16.55 17 16 17ZM8 17C7.45 17 7 16.55 7 16C7 15.45 7.45 15 8 15C8.55 15 9 15.45 9 16C9 16.55 8.55 17 8 17ZM18 4H17V3C17 2.45 16.55 2 16 2C15.45 2 15 2.45 15 3V4H9V3C9 2.45 8.55 2 8 2C7.45 2 7 2.45 7 3V4H6C4.346 4 3 5.346 3 7V19C3 20.654 4.346 22 6 22H18C19.654 22 21 20.654 21 19V7C21 5.346 19.654 4 18 4Z" fill="#B8BCBF"/>
                                        </svg>
                                        <span><?php echo get_the_date('d/m/Y'); ?></span>
                                    </li>
                                    <li>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10.5C11.173 10.5 10.5 11.173 10.5 12C10.5 12.827 11.173 13.5 12 13.5C12.827 13.5 13.5 12.827 13.5 12C13.5 11.173 12.827 10.5 12 10.5ZM12 15.5C10.07 15.5 8.5 13.93 8.5 12C8.5 10.07 10.07 8.50001 12 8.50001C13.93 8.50001 15.5 10.07 15.5 12C15.5 13.93 13.93 15.5 12 15.5ZM21.868 11.502C21.229 10.39 17.706 4.81601 11.729 5.00301C6.202 5.14401 2.986 10.014 2.132 11.502C1.956 11.811 1.956 12.189 2.132 12.498C2.762 13.595 6.162 19 12.025 19C12.106 19 12.188 18.999 12.271 18.997C17.798 18.856 21.014 13.986 21.868 12.498C22.044 12.189 22.044 11.811 21.868 11.502Z" fill="#BDBDBD"/>
                                        </svg>
                                        <span><?php echo do_shortcode('[post-views]'); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="detail">
                                <div class="video-news">
                                    <?php the_field('video_popup') ?>
                                </div>
                                <?php the_content(); ?>
                            </div>
                            <div class="tags">
                                <h3>TAGS</h3>
                                <ul>
                                    <?php
                                    $tags = wp_get_post_terms(get_the_ID(), 'post_tag', array("fields" => "all"));
                                    foreach ($tags as $tag) {
                                        echo '<li><a href="'.esc_url( get_tag_link( $tag->term_id ) ).'">' . $tag->name . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-new-bar">
                            <h5><?php pll_e( 'Tin liên quan' ); ?></h5>
                            <div class="list-new-bar">
                                <?php
                                $the_query = new WP_Query( array (
                                        'post__not_in' => array(get_the_ID()),
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand'
                                    )
                                );
                                ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <div class="item-news-bar">
                                        <div class="avarta"><a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid w-100" alt=""></a></div>
                                        <div class="info">
                                            <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                            <p>
                                                <label><span><?php echo get_the_category()[0]->name  ; ?> </span><span>• <?php echo get_the_date('d/m/Y'); ?></span></label>
                                               
                                            </p>
                                            <div class="desc">
                                                <?php echo get_the_excerpt(); ?>
                                            </div>
                                            <div class="readmore">
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <span><?php pll_e( 'Xem thêm' ); ?></span>
                                                    <svg width="35" height="18" viewBox="0 0 35 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L33 9" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                        <path d="M25 1L33 9L25 17" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <?php
        $id_tintuc = array_search(5, array_column($category_type, 'term_id'));
        if ($id_tintuc) {
        ?>
        <section class="box-case-study news-study">
            <div class="container">
                <div class="title-price"><?php pll_e( 'Tin nổi bật' ); ?></div>
                <div class="slide-casestudy dot-circle">
                    <?php
                    $args_nb=array(
                        'cat' => 5,
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        // 'posts_per_page' => 10,
                    );
                    $my_query_nb = new wp_query($args_nb);
                    ?>
                    <?php if ( $my_query_nb->have_posts() ): ?>
                        <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
                            <div class="item-slide">
                                <div class="item-case">
                                    <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                    <div class="info">
                                        <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>
                </div>
                </div>
            </div>
        </section>
        <?php
        }else{
        ?>
        <section class="box-other-support">
            <div class="container">
                <div class="title-other-support"><?php pll_e( 'Tin liên quan' ); ?></div>
                <div class="lsit-other-support">
                    <?php
                        $args_sp=array(
                            'category__not_in' => [5],
                            'post_type' => 'post',
                            'orderby'   => 'publish_date',
                            'order'     => 'DESC',
                             'posts_per_page' => 5,
                        );
                        $my_query_sp = new wp_query($args_sp);
                    ?>
                    <ul>
                        <?php if ( $my_query_sp->have_posts() ): ?>
                            <?php while ($my_query_sp->have_posts()):$my_query_sp->the_post(); ?>
                                <li>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.2" cx="12" cy="12" r="12" fill="#769FFA"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5002 17C10.2442 17 9.98825 16.902 9.79325 16.707C9.40225 16.316 9.40225 15.684 9.79325 15.293L13.0982 11.988L9.91825 8.695C9.53525 8.297 9.54625 7.664 9.94325 7.281C10.3413 6.898 10.9742 6.909 11.3572 7.305L15.2193 11.305C15.5983 11.698 15.5933 12.321 15.2073 12.707L11.2072 16.707C11.0122 16.902 10.7563 17 10.5002 17Z" fill="#2E6CF6"/>
                                    </svg>
                                    <a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></li>
                            <?php endwhile ?>
                        <?php endif;wp_reset_query(); ?>

                    </ul>
                </div>
            </div>
        </section>
        <?php
        }
        ?>
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
 