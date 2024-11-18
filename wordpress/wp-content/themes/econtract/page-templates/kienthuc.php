<?php
/**
 * Template Name: Kienthuc
 */

get_header();
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
                                $args = array(
                                    'taxonomy' => 'category',
                                    'show_count' => true,
                                    'include'     => get_field($field,'option'),
                                );

                                $cats = get_categories($args);

                                foreach($cats as $cat) {
                            ?>
                            <li>
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
                    $bainoibat = get_field('bai_noi_bat');
                    $posts_per_page = 12;
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => $posts_per_page,
                        'paged'          => $paged,
                        'cat'            => get_field($field,'option'),
                        'post__not_in'   => array($bainoibat->ID),
                        'lang'           => $lang,
                    );
                    $query = new WP_Query( $args );
                    ?>
                    <div class="kienthuc-big">
                        <div class="avarta">
                            <div class="avr"><a href="<?php the_permalink($bainoibat->ID); ?>"><img src="<?= get_the_post_thumbnail_url($bainoibat->ID) ?>" class="img-fluid w-100" alt="<?= $bainoibat->post_title; ?>"></a></div>
                        </div>
                        <div class="info">
                            <h2><a href="<?php the_permalink($bainoibat->ID); ?>"><?= $bainoibat->post_title; ?></a></h2>
                            <div class="desc"><?= $bainoibat->post_excerpt; ?></div>
                            <div class="view-detail">
                                <a href="<?php the_permalink($bainoibat->ID); ?>">
                                    <span>Xem thêm</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.43 5.92993L20.5 11.9999L14.43 18.0699" stroke="#2E6CF6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.5 12H20.33" stroke="#2E6CF6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="list-kienthuc">
                        <div class="t-kthuc"><?php pll_e( 'Kiến thức dành cho bạn' ); ?> </div>
                        <div class="row">
                            <?php if ( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="col-md-4">
                                    <div class="item-kthuc">
                                        <div class="avarta"><a href="<?php the_permalink(); ?>"><img src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="<?php the_title(); ?>"></a></div>
                                        <div class="info">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                        <div class="pagination-main">
                            <?php echo paginate_links( array(
                                'total'     => $query->max_num_pages,
                                'current'   => $paged,
                                'prev_text' => '&laquo;',
                                'next_text' => '&raquo;',
                                'type'  => 'list',
                            ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
