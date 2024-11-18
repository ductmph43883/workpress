<?php
$cata = get_queried_object();

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
                               $args = array(
                                   'taxonomy' => 'danh-muc-kien-thuc',
                                   'orderby' => 'name',
                                   'order'   => 'ASC',
                                   'show_count' => true,
                                );

                                $cats = get_categories($args);

                                foreach($cats as $cat) {
                            ?>
                            <li class="<?= $cata->term_id == $cat->term_id ? 'active' : ''; ?>">
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
                        <h4>Đăng ký ngay để nhận thông tin hữu ích mỗi tuần</h4>
                        <div class="frm-bar">
                            <div class="item-frm">
                                <input type="text" placeholder="Nh?p email c?a b?n" class="txt_field">
                            </div>
                            <div class="item-frm text-center"> 
                                <input type="submit" value="Ðang ký nh?n tin" class="btn_field">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?php
                    $posts_per_page = 10;
                    $paged = $_GET['in'] ? $_GET['in'] : 1;

                    $args = array(
                        'post_type'      => 'bai-kien-thuc',
                        'posts_per_page' => $posts_per_page,
                        'paged'          => $paged,
                        'tax_query'     => array(
                            array( 
                                'taxonomy'  => 'danh-muc-kien-thuc',
                                'field'     => 'term_id',  
                                'terms'     => $cata->term_id  
                            )
                        )
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
                        <div class="t-kthuc">Kiến thức dành cho bạn</div>
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
get_footer();
