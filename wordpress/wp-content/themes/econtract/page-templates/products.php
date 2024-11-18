<?php
/**
* Template Name: Product
 */

get_header(); 
?>
 
<main class="main-product">
    <section class="prod__banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h1 class="prod__title"><?php the_field('title_banner') ?></h1>
                    <p class="prod__des"><?php the_field('sort_banner') ?></p>
                    <a href="<?php the_field('link_banner') ?>" class="prod__btn"><?php the_field('text_button_banner') ?></a>
                </div>
                <div class="col-lg-7">
                    <div class="prod__banner--img">
                        <img class="w-100" src="<?php echo the_field('avr_banner')['url'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prod__intro section__prod">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="intro__img">
                        <img class="icon_mark" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/product/mark.png" alt="">
                        <img class="w-100" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/product/2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="prod__title"><?php the_field('title_change') ?></h2>
                    <p class="prod__des"><?php the_field('sort_change') ?></p>
                    <a href="<?php the_field('text_button_change_copy') ?>" class="prod__btn"><?php the_field('text_button_change') ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="box-number-counter text-center">
        <div class="container">
            <div class="list-number-counter number-top mb-0" id="counter">
                <div class="row">
                    <?php while ( has_sub_field('danh_sach_number')) : ?>
                        <div class="col-md-4">
                        <div class="item-numb-counter">
                            <div class="number-top-counter mb-0">
                                <div class="top">
                                    <span class="count counter-value" ><?php the_sub_field('number') ?></span>
                                </div>
                                <div class="desc" style="opacity: 0.8">
                                    <?php the_sub_field('nội_dung') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
 
    <section class="box-step section__prod">
        <div class="container">
            <h2 class="prod__title text-center"><?php the_field('title_mng') ?></h2>
            <div class="prod__des text-center"><?php the_field('title_mng_copy') ?></div>

            <div class="list-step">
                <div class="row">
                    <?php $number_step = 1 ?>
                    <?php while ( has_sub_field('block_step')) : ?>
                        <div class="col-md-3"> 
                            <div class="item-step">
                                <span class="numb-step"><?php echo $number_step++ ?></span>
                                <h3 class="text-center"><?php the_sub_field('t_step') ?></h3>
                                <div class="icon-avr"><img src="<?php the_sub_field('img_step')['url'] ?>" class="img-fluid" alt=""></div>
                                <div class="desc">
                                    <?php the_sub_field('content_step') ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="line">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/product/line.svg" alt="">
                </div>
                <div class="text-center my-3">
                    <a href="">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="line2">
                </div>
                <div class="list__function">
                    <div class="row row-40">
                        <?php while ( has_sub_field('block_content_step')) : ?>
                            <div class="col-6 col-md-4 pd-40">
                            <div class="box__fc">
                                <img src="<?php echo the_sub_field('icon_step')['url'] ?>" alt="">
                                <h4><?php the_sub_field('t_icon_step') ?></h4>
                                <p><?php the_sub_field('desc_icon_step') ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="line2" style="margin-top: -30px;">
                </div>
                <div class="text-center">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/product/Done.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section__app section__prod">
        <div class="container">
            <div class="bg__app">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h3 class="prod__title text-white"><?php the_field('title_tn') ?></h3>
                        <?php while ( has_sub_field('list_apps')) : ?>
                            <a href="<?php the_sub_field('link_app') ?>">
                                <img src="<?php the_sub_field('icon_app')['url'] ?>" alt="">
                            </a>
                        <?php endwhile; ?>

                    </div>
                    <div class="col-lg-5">
                        <img class="w-100" src="<?php echo the_field('avarta_tn')['url'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section__tab section__prod">
        <div class="container">
            <h2 class="prod__title text-center">
                <?php the_field('title_hd') ?>
            </h2>
            <div class="wrap__tab">
                <div class="row m-0 flex-rever">
                    <div class="col-md-6 p-0">
                        <div class="tab-content" >
                            <?php $count_ctn = 0; ?>
                            <?php while ( has_sub_field('content_hopdong')) : ?>
                                <div class="tab-pane fade <?php echo ( $count_ctn == 0 ) ? 'show active' : ''; ?>" id="pills-<?php echo $count_ctn++ ?>">
                                    <h2 class="title-tab"><?php the_sub_field('t_hdong') ?></h2>
                                    <div class="list__tab">
                                        <?php the_sub_field('noidung_hopdong') ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <ul class="nav nav-pills d-block"  role="tablist">
                            <?php $count_h = 0; ?>
                            <?php while ( has_sub_field('content_hopdong')) : ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ( $count_h == 0 ) ? 'active' : ''; ?>" id="pills-home-tab" data-toggle="pill" href="#pills-<?php echo $count_h++ ?>" role="tab"><?php the_sub_field('t_hdong') ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-juridical bg-white">
        <div class="container">
            <div class="content-juridical">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo the_field('avr_serc')['url'] ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="info">
                            <h3 class="wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_serc') ?></h3>
                            <ul>
                                <?php while ( has_sub_field('content_serc')) : ?>
                                    <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                                  fill="#2E6CF6" />
                                        </svg>
                                        <span><?php the_sub_field('itme_serc') ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <div class="btn-banner text-uppercase wow fadeInUp wHighlight mt-3 mt-lg-5" data-wow-delay=".2s" >
                            <ul>
                                <li class="p-0 mb-0"><a href="<?php the_field('text_mua_ngay_serc_copy') ?>" class="btn-main-blue" style="min-width: 280px"><?php the_field('text_mua_ngay_serc') ?></a></li>
                                <li class="p-0 mb-0"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal-form" class="btn-main-gray"><?php the_field('text_yeu_cầu_tu_vấn_serc') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> 

    <section class="box-proce">
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_trienkhai') ?></div>
            <div class="content-proce">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-proce">
                            <ul>
                                <?php while ( has_sub_field('content_trienkhai')) : ?>
                                    <li class="wow fadeInUp wHighlight" data-wow-delay=".2s">
                                        <div class="item-proce text-center">
                                            <div class="icon"><img src="<?php echo the_sub_field('icon_tkhai')['url'] ?>" class="img-fluid" alt=""></div>
                                            <div class="info">
                                                <h5><?php the_sub_field('head_tkhai') ?></h5>
                                                <p><?php the_sub_field('head_tkhai_copy') ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avarta wow fadeInRight wHighlight" data-wow-delay=".2s"><img
                                    src="<?php echo the_field('avr_trienkhai')['url'] ?>" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-contact bg-white">
        <div class="container">
            <div class="bg-contact">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <div class="avarta">
                            <img class="w-100" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/product/illus_banner.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_form') ?></div>
                        <div class="desct-titl">
                            <?php the_field('desc_form') ?>
                        </div>

                        <?php echo do_shortcode( '[contact-form-7 id="3434" title="Nhận tư vấn miễn phí"]' ) ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="sc-confirm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><?php the_field('title_train') ?></h4>
                    <p class="text-muted mb-3"><?php the_field('title_train') ?></p>
                    <img class="img-fluid mb-3 mb-md-0" src="<?php the_field('logo_train')['url'] ?>" alt="">
                </div>
                <div class="col-md-6">
                    <div class="list-aa">
                        <div class="row">
                            <?php while ( has_sub_field('list_train')) : ?>
                                <div class="col-4 col-md-4">
                                    <img class="w-100" src="<?php the_sub_field('icon_train')['url'] ?>" alt="">
                                    <h5><?php the_sub_field('t_train') ?></h5>
                                </div>
                            <?php endwhile; ?>
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
