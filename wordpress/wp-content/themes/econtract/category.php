<?php
get_header(); 
$lang = get_locale();
$field = 'chuyen_muc_kien_thuc_'.$lang;
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
if (in_array($cat_id, get_field($field,'option'))) {
?>
<main>
    <section class="box-kienthuc">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-kienthuc">
                        <ul>
                            <?php
                                $lang = get_locale();
                                $field = 'chuyen_muc_kien_thuc_'.$lang;
                                $tax = array(
                                    'taxonomy' => 'category',
                                    'show_count' => true,
                                    'include'     => get_field($field,'option'),
                                );

                                $cats = get_categories($tax);

                                foreach($cats as $cat) {
                            ?>
                            <li class="<?= $cat_id == $cat->term_id ? 'active' : ''; ?>">
                                <a href="<?= get_category_link( $cat->term_id ) ?>">
                                    <?= $cat->name; ?> (<?= $cat->count; ?>)
                                </a>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="form-bar-register text-center">
                        <h4><?php pll_e( 'Đăng ký ngay để nhận thông tin hữu ích mỗi tuần' ); ?></h4>
                        <div class="frm-bar">
                            <?= do_shortcode('[contact-form-7 id="4061" title="Form kiến thức"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?php
                    $posts_per_page = 10;
                    $paged = $_GET['in'] ? $_GET['in'] : 1;

                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => $posts_per_page,
                        'paged'          => $paged,
                        'cat'            => array($cat_id)  
                    );

                    $query = new WP_Query( $args );
                    $count = 0; 
                    if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php if ( $count == 0 ) : ?>
                    <div class="kienthuc-big">
                        <div class="avarta">
                            <div class="avr"><a href="<?php the_permalink(); ?>"><img src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="<?php the_title(); ?>"></a></div>
                        </div>
                        <div class="info">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="desc"><?php the_excerpt(); ?></div>
                            <div class="view-detail">
                                <a href="<?php the_permalink(); ?>">
                                    <span>Xem thêm</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.43 5.92993L20.5 11.9999L14.43 18.0699" stroke="#2E6CF6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.5 12H20.33" stroke="#2E6CF6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                    <?php endif; endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                    <div class="list-kienthuc">
                        <div class="t-kthuc"><?php pll_e( 'Kiến thức dành cho bạn' ); ?> </div>
                        <div class="row">
                            <?php $count = 0; ?>
                            <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <?php if ( $count > 0 ) : ?>
                                <div class="col-md-4">
                                    <div class="item-kthuc">
                                        <div class="avarta"><a href="<?php the_permalink(); ?>"><img src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="<?php the_title(); ?>"></a></div>
                                        <div class="info">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $count++; ?>
                            <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                        <div class="pagination-main">
                            <?php
                                $total_pages = $query->max_num_pages;
                                if ($total_pages > 1){
                                    echo paginate_links(array(
                                        'format' => '?in=%#%',
                                        'current'   => $paged,
                                        'total' => $total_pages,
                                        'prev_text'    => __('<'),
                                        'next_text'    => __('>'),
                                        'type'  => 'list',
                                    ));  
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
} else {
$args = array(
    'post_type' => 'post',
    'orderby'   => 'publish_date',
    'order'     => 'DESC',	
    'posts_per_page' => 15,
    'category__in' => array($cat_id)
); 
?>
<main class="page-price">    
    <section class="box-news-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-price"><?php echo $category->name; ?></div>
                </div>
                <div class="col-md-8">
                    <div class="list-news">
                        <?php 
                            $my_query = new wp_query($args);
                        ?>
                        <?php if ( $my_query->have_posts() ): ?>
                            <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                                <div class="item-news">
                                    <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                    <div class="info">
                                        <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                        <p>
                                            <label><span><?php echo $category->name; ?></span><!-- <span>• <?php echo get_the_date('d/m/Y'); ?></span> --></label>
                                        </p>
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
                            <?php endwhile ?>
                        <?php endif;wp_reset_query(); ?>
                    </div>
                </div>
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
</main>
<?php
}
get_footer();