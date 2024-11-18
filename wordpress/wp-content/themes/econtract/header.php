<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta name="google-site-verification" content="eELxriSj7iI0rSRBIt0LmXOMJdyCJKgmAM-m_8XGH-o" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?= the_field('favicon','option') ?>" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" title="" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">

    <?php wp_head(); ?>
    <?php  the_field('js','option') ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="header-top">
                <div class="container">
                    <div class="info-head">
                        <div class="left">
                            <div class="btn-bar"><a href="javascript:void(0)">
                                    <svg width="24" height="16" viewBox="0 0 24 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.26449 0H22.7352C23.4312 0 24.0005 0.569333 24.0005 1.26533V1.40133C24.0005 2.09733 23.4312 2.66667 22.7352 2.66667H1.26449C0.568488 2.66667 0.000488281 2.09733 0.000488281 1.40133V1.26533C0.000488281 0.569333 0.568488 0 1.26449 0ZM22.7352 6.66667H1.26449C0.568488 6.66667 0.000488281 7.236 0.000488281 7.932V8.068C0.000488281 8.764 0.568488 9.33333 1.26449 9.33333H22.7352C23.4312 9.33333 24.0005 8.764 24.0005 8.068V7.932C24.0005 7.236 23.4312 6.66667 22.7352 6.66667ZM22.7352 13.3333H1.26449C0.568488 13.3333 0.000488281 13.9027 0.000488281 14.5987V14.7347C0.000488281 15.4307 0.568488 16 1.26449 16H22.7352C23.4312 16 24.0005 15.4307 24.0005 14.7347V14.5987C24.0005 13.9027 23.4312 13.3333 22.7352 13.3333Z"
                                            fill="#2E3A59" />
                                    </svg>
                                </a>
							</div>
                            <?php
                            if (get_locale() == 'vi') {
                                echo "<input value='vi-VN' class='lang_site d-none' />";
                            }else{
                                echo "<input value='en-US' class='lang_site d-none' />";
                            }
                            ?>
                            <div class="logo">
                                <?php
                                if (get_locale() == 'vi') {
                                    echo '<a href="/">';
                                }else{
                                    echo '<a href="/en/home">';
                                }
                                ?>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="h-menu">
                                <?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
                            </div>
                        </div>
                        <div class="right">
                            <ul>
                                <li><a href="<?php the_field('link_login','option') ?>" target="_blank"><?php pll_e( 'Đăng nhập' ); ?></a></li>
                                <li class="li-contact">
                                    <?php if( get_locale() == 'vi' ):?>
                                    <a href="/lien-he-fptecontract/" class="right-contact">
                                            Liên hệ
                                    <?php else: ?>
                                    <a href="/en/contact/" class="right-contact">
                                            Contact
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <li class="li-trial">
                                    <a href="/lite/" class="right-trial">
                                        <?php if( get_locale() == 'vi' ):?>
                                            Dùng miễn phí
                                        <?php else: ?>
                                            Trial Free
                                        <?php endif; ?>
                                    </a> 
                                </li>
                                <li>
                                    <div class="translate">
                                        <?php
                                        wp_nav_menu( array( 
                                            'theme_location' => 'language', 
                                        ) ); 
                                        ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-mobile">
                        <div class="info-menu-mb">
                            <div class="close-menu"><a href="javascript:void(0)"><svg width="32" height="32"
                                        viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 16C0 7.16344 7.16344 0 16 0V0C24.8366 0 32 7.16344 32 16V16C32 24.8366 24.8366 32 16 32V32C7.16344 32 0 24.8366 0 16V16Z"
                                            fill="#71787E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.8857 16L23.6097 10.276C24.131 9.75463 24.131 8.91197 23.6097 8.39063C23.0883 7.8693 22.2457 7.8693 21.7243 8.39063L16.0003 14.1146L10.2763 8.39063C9.755 7.8693 8.91233 7.8693 8.391 8.39063C7.86967 8.91197 7.86967 9.75463 8.391 10.276L14.115 16L8.391 21.724C7.86967 22.2453 7.86967 23.088 8.391 23.6093C8.651 23.8693 8.99233 24 9.33367 24C9.675 24 10.0163 23.8693 10.2763 23.6093L16.0003 17.8853L21.7243 23.6093C21.9843 23.8693 22.3257 24 22.667 24C23.0083 24 23.3497 23.8693 23.6097 23.6093C24.131 23.088 24.131 22.2453 23.6097 21.724L17.8857 16Z"
                                            fill="white" />
                                    </svg>
                                </a>
							</div>
                            <?php
							wp_nav_menu(
								array(
									'theme_location' => 'mobile',
								)
							);
							?>
                        </div>
                    </div>
                </div>
            </div>
		<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1195622254438005');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1195622254438005&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
        </header>
		<div class="fix-icon-box">
			<ul>
				<li><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal-form"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fx-1.png" class="img-fluid" alt=""></a></li>
				<li><a href="tel:<?php the_field('hotline_bar','option') ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fx-2.png" class="img-fluid" alt=""></a></li>
			</ul>
            <?php 
            if(get_field('text_qua','option')){
            ?>
			<div class="box-gif">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div> 
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/gif-1.png" class="img-fluid" alt="">
                <span><a href="<?php the_field('link_qua','option') ?>" target="_blank"><?php the_field('text_qua','option') ?></a></span>
			</div>
            <?php 
            }
            ?>
		</div>