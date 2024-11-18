<?php
/**
 * Template Name: Home
 */ 

get_header();
?>
<main>
    <section class="box-banner">
        <div class="container"> 
            <div class="slide-banner">
                <?php while ( has_sub_field('danh_sach_slide')) : ?>
                    <div class="item-slide">
                        <div class="item-banner">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="txt-banner">
                                        <h3 class="wow fadeInDown wHighlight d-none" data-wow-delay=".2s"><?php the_sub_field('title_blue') ?></h3>
                                        <h2 class="wow fadeInDown wHighlight" data-wow-delay=".2s"><?php the_sub_field( 'title_slide'); ?></h2>
                                        <div class="desc wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_sub_field( 'desc_slide'); ?></div>
                                        <div class="btn-banner wow fadeInUp wHighlight" data-wow-delay=".3s">
                                            <ul>
                                                <li><a href="<?php the_sub_field( 'link_dung_thử'); ?>" class="btn-main-blue"><?php the_sub_field( 'button_dung_thử'); ?></a></li>
                                                <li><a href="<?php the_sub_field( 'link_slide'); ?>" class="btn-main-gray"><?php the_sub_field( 'button_cta'); ?></a></li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="avar text-center wow fadeInRight wHighlight" data-wow-delay=".2s"><img src="<?php echo get_sub_field( 'avr_slide' )['url']; ?>" class="img-fluid" alt=""></div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="box-trial">
        <div class="container">
            <p>
                <span><?php the_field( 'title_dung_thu'); ?></span>
                <a href="<?php the_field( 'link_dung_thu'); ?>" target="_blank"><?php the_field( 'dung_thu_link'); ?></a>
                <label>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4141 12L17.7071 7.70701C18.0981 7.31601 18.0981 6.68401 17.7071 6.29301C17.3161 5.90201 16.6841 5.90201 16.2931 6.29301L12.0001 10.586L7.70713 6.29301C7.31613 5.90201 6.68413 5.90201 6.29313 6.29301C5.90213 6.68401 5.90213 7.31601 6.29313 7.70701L10.5861 12L6.29313 16.293C5.90213 16.684 5.90213 17.316 6.29313 17.707C6.48813 17.902 6.74413 18 7.00013 18C7.25613 18 7.51213 17.902 7.70713 17.707L12.0001 13.414L16.2931 17.707C16.4881 17.902 16.7441 18 17.0001 18C17.2561 18 17.5121 17.902 17.7071 17.707C18.0981 17.316 18.0981 16.684 17.7071 16.293L13.4141 12Z" fill="white"/>
                    </svg>
                </label>
            </p>
        </div>
    </section>
	    <section class="box-benefit">
        <div class="container">
            <div class="title-price text-center"> <?php the_field('title_loi_dung') ?></div>
            <div class="list-benefit text-center">
                <div class="row">
                    <?php while ( has_sub_field('danh_sach_loi_dung')) : ?>
                    <div class="col-md-3">
                        <div class="item-benn">
                            <div class="avr"><img src="<?php the_sub_field('icon') ?>" class="img-fluid" alt="<?php the_sub_field('content') ?>"></div>
                            <div class="info"><?php the_sub_field('content') ?></div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
	    <section class="box-feature-hot">
        <div class="container">
            <div class="title-price text-center">
                <p><?php the_field( 'title_tinh_nang'); ?></p>
                <div class="desc-title"><?= nl2br(get_field( 'tinh_nang_mota')); ?></div>
            </div>
            <div class="list-feature text-center">
                <div class="row">
                    <?php while ( has_sub_field('danh_sach_tinh_nang')) : ?>
                    <div class="col-md-3">
                        <div class="item-feature">
                            <div class="avarta">
                                <div class="avr"><img src="<?php the_sub_field('icon') ?>" class="img-fluid" alt="<?php the_sub_field('title_ctn') ?>"></div>
                            </div>
                            <div class="info">
                                <h4><?= nl2br(get_sub_field('title_ctn')); ?></h4>
                                <div class="desc"><?php the_sub_field('content') ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="col-md-12">
                        <div class="btn-banner">
                            <a href="<?php the_field( 'link_timhieu'); ?>" class="btn-main-gray"><?php the_field( 'tieu_de_timhieu'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-video">
        <div class="container"> 
            <div class="content-video">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="txt-video">
                            <h3 class="desc wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_video') ?></h3>
                            <div class="info-txt-video">
                                <?php while ( has_sub_field('content_video')) : ?>
                                    <div class="item-txt-video wow fadeInUp wHighlight" data-wow-delay=".2s">
                                        <div class="icon"><img src="<?php echo get_sub_field( 'icon_video' )['url']; ?>" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <h4><?php the_sub_field('title_ctn_video') ?></h4>
                                            <ul>
                                                <?php while ( has_sub_field('content_ctn_video')) : ?>
                                                    <li><?php the_sub_field('item_video') ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iframe-video">
                            <svg width="72" height="71" viewBox="0 0 72 71" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.92091 0H71.2069V70.1684H13.2936C5.59452 70.1684 -0.30822 63.252 0.8159 55.5478L8.92091 0Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M71.2938 0H8.33082L0.140632 55.528C-0.996619 63.2384 4.90835 70.1684 12.6155 70.1684H71.2938V53.8224H22.654C16.3728 53.8224 11.6062 48.0989 12.6731 41.8378L15.1601 27.2426C15.9975 22.3286 20.2112 18.7382 25.1411 18.7382H46.3111C52.5053 18.7382 57.2388 24.3284 56.2868 30.5194C55.5218 35.4934 51.2876 39.1615 46.3111 39.1615H30.3714C28.6299 39.1615 27.2181 37.7336 27.2181 35.9721C27.2181 34.2106 28.6299 32.7826 30.3714 32.7826H46.3111C48.1789 32.7826 49.7681 31.4058 50.0552 29.539C50.4126 27.2153 48.636 25.1171 46.3111 25.1171H25.1411C23.2809 25.1171 21.6909 26.4719 21.3749 28.3261L18.8879 42.9213C18.4853 45.2838 20.2839 47.4434 22.654 47.4434H71.2938V0Z"
                                    fill="#3981F3" />
                            </svg>
                            <?php  the_field('iframe_video'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-number-counter text-center">
        <div class="container">
            <div class="list-number-counter number-top mb-0" id="counter">
                <div class="row">
                    <?php while ( has_sub_field('number_bot')) : ?>
                    <div class="col-md-3">
                        <div class="item-numb-counter">
                            <div class="number-top-counter mb-0">
                                <div class="top">
                                    <span class="count counter-value" data-count="<?php the_sub_field('con_so') ?>"></span> <?php the_sub_field('don_vi') ?>
                                </div>
                                <div class="desc">
                                    <?= nl2br(get_sub_field('desc')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="box-feedback">
        <div class="container">
            <div class="title-price text-center">
                <?php the_field('title_fbb') ?>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php while ( has_sub_field('danh_sach_feedback' ) ) : ?>
                        <div class="swiper-slide">
                            <div class="item-slide">
                                <div class="item-feed">
                                    <div class="icon-fb"><img src="<?php the_sub_field( 'avr_fb' ); ?>" class="img-fluid" alt="<?php the_sub_field( 'name_fb' ); ?>"></div>
                                    <div class="info">
                                        <div class="desc">
                                            <?php the_sub_field( 'content_fb' ); ?>
                                        </div>
                                        <div class="fb-bott text-right">
                                            <h6><?php the_sub_field( 'name_fb' ); ?></h6>
                                            <label><?php the_sub_field( 'cd_fb' ); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="box-part">
        <div class="slide-partner-home">
            <?php while ( has_sub_field('img_kh','option') ) : ?>
                <div class="item-slide">
                    <div class="item-partner"><a href="javascript:void(0)"><img src="<?php the_sub_field('list_img_kh','option')['url'] ?>" class="img-fluid" alt=""></a></div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="box-story-success dot-circle">
        <div class="container">
            <div class="title-price text-center"><?= get_field('chuyen_muc')->name; ?></div>
            <div class="slide-casestudy">
                <?php 
                    $args_succ=array(
                        'cat' => get_field('chuyen_muc')->term_id, 
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        // 'posts_per_page' => 10,   
                    );   
                    $my_query_succ = new wp_query($args_succ);
                ?>
                <?php if ( $my_query_succ->have_posts() ): ?>
                    <?php while ($my_query_succ->have_posts()):$my_query_succ->the_post(); ?>
                        <div class="item-slide">
                            <div class="item-case">
                                <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="><?php echo get_the_title(); ?>"></a></div>
                                <div class="info">
                                    <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php endif;wp_reset_query(); ?>
            </div>
        </div> 
    </section>

    <section class="box-juridical">
        <div class="container">
            <div class="content-juridical">
                <div class="icon wow fadeInUp wHighlight" data-wow-delay=".2s"><img src="<?php echo get_field('avr_phaply')['url'] ?>" class="img-fluid" alt=""></div>
                <div class="info">
                    <h3 class="wow fadeInUp wHighlight" data-wow-delay=".2s"><?php echo the_field('title_ply') ?></h3>
                    <ul>
                        <?php while ( has_sub_field('content_ply' ) ) : ?>
                            <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span><?php the_sub_field( 'item_ply' ); ?></span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="box-news-gift">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="t-title-gift"><?= get_field('khoi_trai')->name; ?></div>
                    <?php 
                        $args_gift=array(
                            'cat' => get_field('khoi_trai')->term_id, 
                            'post_type' => 'post',
                            'orderby'   => 'publish_date',
                            'order'     => 'DESC',
                            'posts_per_page' => 1,   
                        );   
                        $my_query_gift = new wp_query($args_gift);
                    ?>
                    <?php if ( $my_query_gift->have_posts() ): ?>
                        <?php while ($my_query_gift->have_posts()):$my_query_gift->the_post(); ?>
                            <div class="item-card-box">
                                <div class="avarta">
                                    <div class="avr"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>"></a></div>
                                </div>
                                <div class="info">
                                    <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                </div>
                            </div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>
                </div>
                <div class="col-md-8">
                    <div class="list-card-box">
                        <div class="t-title-gift"><?= get_field('khoi_phai')->name; ?></div>
                        <div class="row">
                            <?php 
                                $args_news=array(
                                    'cat' => get_field('khoi_phai')->term_id, 
                                    'post_type' => 'post',
                                    'orderby'   => 'publish_date',
                                    'order'     => 'DESC',
                                    'posts_per_page' => 2,   
                                );   
                                $my_query_news = new wp_query($args_news);
                            ?>
                            <?php if ( $my_query_news->have_posts() ): ?>
                                <?php while ($my_query_news->have_posts()):$my_query_news->the_post(); ?>
                                    <div class="col-md-6">
                                        <div class="item-card-box">
                                            <div class="avarta">
                                                <div class="avr"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>"></a></div>
                                            </div>
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
            </div>
        </div>
    </section>

    <section class="box-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/contact.png" class="img-fluid" alt=""></div>
                </div>
                <div class="col-md-6">
                    <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_contact') ?></div>
                    <div class="desct-titl">
                        <?php the_field('title_contact_copy') ?>
                    </div>
                    <?= do_shortcode('[contact-form-7 id="4054" title="Nhận tư vấn miễn phí"]' ) ?>
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
