<?php
/**
* Template Name: Contact
 */

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
                <li><a href="javascript:void(0)"><span><?php the_title(); ?></span></a></li>
            </ul>
        </div>
    </section>
    <section class="box-contact" style="padding-top: 60px">
        <div class="svg-abs svg-4"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-4.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title-form'); ?></div>
            <div class="row">
                <div class="col-md-6">
                    <?php echo do_shortcode( '[contact-form-7 id="2357" title="Form Hỗ trợ"]' ) ?>
                </div>
                <div class="col-md-6 text-center">
                    <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/contact.png" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-info-contact">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="logo"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt=""></div>
                </div>
                <div class="col-md-6">
                    <div class="txt-contact">
                        <ul>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9994 16.92V19.92C22.0006 20.1985 21.9435 20.4741 21.832 20.7293C21.7204 20.9845 21.5567 21.2136 21.3515 21.4018C21.1463 21.5901 20.904 21.7335 20.6402 21.8227C20.3764 21.9119 20.0968 21.945 19.8194 21.92C16.7423 21.5856 13.7864 20.5341 11.1894 18.85C8.77327 17.3146 6.72478 15.2661 5.18944 12.85C3.49942 10.2412 2.44769 7.27097 2.11944 4.17997C2.09446 3.90344 2.12732 3.62473 2.21595 3.3616C2.30457 3.09846 2.44702 2.85666 2.63421 2.6516C2.82141 2.44653 3.04925 2.28268 3.30324 2.1705C3.55722 2.05831 3.83179 2.00024 4.10944 1.99997H7.10944C7.59475 1.9952 8.06524 2.16705 8.43321 2.48351C8.88624 3.83454 9.45791 6.07511 9.89335 7.65085C9.81359 8.02482 9.62831 8.36808 9.35944 8.63997L8.08944 9.90997C9.513 12.4135 11.5859 14.4864 14.0894 15.91L15.3594 14.64C15.6313 14.3711 15.9746 14.1858 16.3486 14.1061C17.6383 14.5064 20.0987 15.1492 21.526 15.5775C21.8431 15.9518 22.0116 16.4295 21.9994 16.92Z" fill="#121E28"/>
                                </svg>
                                <a href="javascript:void(0)"><?php the_field('hotline_contact') ?></a>
                            </li>
                            <?php while ( has_sub_field('thong_tin')) : ?>
                                <li>
                                    <?php the_sub_field('icon_svg') ?>
                                    <span><?php the_sub_field('text_info') ?></span>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <h4><?php the_field('title_social') ?></h4>
                    <div class="sc-contact">
                        <ul> 
                            <?php while ( has_sub_field('social')) : ?>
                                <li>
                                    <li><a href="<?php the_sub_field('link_social') ?>" target="_blank"><img src="<?php echo get_sub_field('icon_social')['url'] ?>" class="img-fluid" alt=""></a></li>
                                </li>
                            <?php endwhile; ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php the_field('maps_iframe') ?>
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
