<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="modal fade" id="myModal-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="abs-popup abs-m-1"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-1.png" class="img-fluid" alt=""></div>
            <div class="abs-popup abs-m-2"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-2.png" class="img-fluid" alt=""></div>
            <div class="modal-body">
                <div class="content-popup-form">
                    <button type="button" class="close" data-dismiss="modal">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M31.2997 28L41.3167 17.983C42.229 17.0707 42.229 15.596 41.3167 14.6837C40.4043 13.7714 38.9297 13.7714 38.0173 14.6837L28.0003 24.7007L17.9833 14.6837C17.071 13.7714 15.5963 13.7714 14.684 14.6837C13.7717 15.596 13.7717 17.0707 14.684 17.983L24.701 28L14.684 38.017C13.7717 38.9294 13.7717 40.404 14.684 41.3164C15.139 41.7714 15.7363 42 16.3337 42C16.931 42 17.5283 41.7714 17.9833 41.3164L28.0003 31.2994L38.0173 41.3164C38.4723 41.7714 39.0697 42 39.667 42C40.2643 42 40.8617 41.7714 41.3167 41.3164C42.229 40.404 42.229 38.9294 41.3167 38.017L31.2997 28Z" fill="#2E3A59"/>
                        </svg>

                    </button>
                    <h4 class="text-center"><?php pll_e( 'Đăng ký' ); ?></h4>
                     <?php echo do_shortcode( '[contact-form-7 id="2331" title="Đăng ký dùng thử all trang"]' ) ?>
                </div> 
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-primary clc-send-mail" data-toggle="modal" data-target="#myModal" style="display: none;">Open modal</button>
<div class="modal fade modal-mail" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="content-popup text-center">
                    <button type="button" class="close" data-dismiss="modal">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.8285 24L35.4145 15.414C36.1965 14.632 36.1965 13.368 35.4145 12.586C34.6325 11.804 33.3685 11.804 32.5865 12.586L24.0005 21.172L15.4145 12.586C14.6325 11.804 13.3685 11.804 12.5865 12.586C11.8045 13.368 11.8045 14.632 12.5865 15.414L21.1725 24L12.5865 32.586C11.8045 33.368 11.8045 34.632 12.5865 35.414C12.9765 35.804 13.4885 36 14.0005 36C14.5125 36 15.0245 35.804 15.4145 35.414L24.0005 26.828L32.5865 35.414C32.9765 35.804 33.4885 36 34.0005 36C34.5125 36 35.0245 35.804 35.4145 35.414C36.1965 34.632 36.1965 33.368 35.4145 32.586L26.8285 24Z" fill="#2E3A59" />
                        </svg>
                    </button>
                    <div class="avar-popup-mail">
                        <img src="https://channel.mediacdn.vn/2021/9/17/sendmail-16318807952691738132089.png" class="img-fluid" alt="">
                    </div>
                    <h3><?php pll_e( 'Cảm ơn bạn đã đăng ký' ); ?></h3>
                    <p><?php pll_e( 'FPT.eContract sẽ liên hệ trong thời gian sớm nhất.' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer-menu">
        <div class="container">
            <div class="content-menu-ft">
                <div class="ft-logo">
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
                <div class="ft-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </div>
                <div class="ft-social">
                    <ul>
                        <li>
                            <a href="<?php the_field( 'link_gmail' , 'option'); ?>">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM15.9769 11.7476C17.277 11.7476 18.1539 12.3099 18.6539 12.7799L20.6078 10.8693C19.4078 9.7523 17.8462 9.06667 15.9769 9.06667C13.2691 9.06667 10.9306 10.6228 9.79207 12.8877L12.0306 14.6287C12.5922 12.957 14.1461 11.7476 15.9769 11.7476ZM22.6233 16.1541C22.6233 15.584 22.5772 15.168 22.4771 14.7366H15.9769V17.3096H19.7924C19.7155 17.949 19.3001 18.912 18.377 19.5591L20.5617 21.2539C21.8694 20.0444 22.6233 18.2649 22.6233 16.1541ZM12.0383 17.3713C11.8921 16.9399 11.8075 16.4776 11.8075 16C11.8075 15.5224 11.8921 15.0601 12.0306 14.6287L9.79207 12.8877C9.32282 13.8276 9.05358 14.883 9.05358 16C9.05358 17.117 9.32282 18.1724 9.79207 19.1123L12.0383 17.3713ZM15.9769 22.9333C17.8462 22.9333 19.4155 22.317 20.5617 21.2539L18.377 19.5591C17.7924 19.9674 17.0077 20.2524 15.9769 20.2524C14.1461 20.2524 12.5922 19.043 12.0383 17.3713L9.79976 19.1123C10.9383 21.3772 13.2691 22.9333 15.9769 22.9333Z"
                                        fill="#121E28" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field( 'link_facebook' , 'option'); ?>">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM17.6677 25.4077V16.7028H20.0706L20.3891 13.7031H17.6677L17.6718 12.2017C17.6718 11.4193 17.7461 11.0001 18.8698 11.0001H20.372V8H17.9688C15.0821 8 14.066 9.4552 14.066 11.9024V13.7034H12.2667V16.7031H14.066V25.4077H17.6677Z"
                                        fill="#121E28" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field( 'link_youtube' , 'option'); ?>">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM24.1767 12.0488C23.9804 11.2948 23.4021 10.7011 22.6677 10.4996C21.3369 10.1333 16 10.1333 16 10.1333C16 10.1333 10.6631 10.1333 9.33217 10.4996C8.59782 10.7011 8.01949 11.2948 7.82322 12.0488C7.46667 13.4154 7.46667 16.2667 7.46667 16.2667C7.46667 16.2667 7.46667 19.1179 7.82322 20.4845C8.01949 21.2385 8.59782 21.8323 9.33217 22.0339C10.6631 22.4 16 22.4 16 22.4C16 22.4 21.3369 22.4 22.6677 22.0339C23.4021 21.8323 23.9804 21.2385 24.1767 20.4845C24.5333 19.1179 24.5333 16.2667 24.5333 16.2667C24.5333 16.2667 24.5333 13.4154 24.1767 12.0488Z"
                                        fill="#121E28" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.3999 19.1995V13.8662L18.6666 16.533L14.3999 19.1995Z" fill="#121E28" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="item-ft">
                        <h3><?php pll_e( 'LIÊN HỆ TƯ VẤN' ); ?></h3>
                        <div class="info-place">
                            <ul>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-1.png" class="img-fluid" alt="">
                                    <?php while ( has_sub_field('block_1', 'option')) : ?>
                                        <p>
                                            <?php if( get_locale() == 'vi' ):?>
                                                <?php the_sub_field( 'tieu_de'); ?>
                                            <?php else: ?>
                                                <?php the_sub_field( 'tieu_dề_en'); ?>
                                            <?php endif; ?>
                                        </p>
                                    <?php endwhile; ?>
                                </li>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-2.png" class="img-fluid" alt="">
                                    <span></span>
                                    <label><?php the_field( 'block_11', 'option'); ?></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-ft">
                        <h3><?php pll_e( 'HỖ TRỢ KHÁCH HÀNG' ); ?></h3>
                        <div class="info-place">
                            <ul>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-1.png" class="img-fluid" alt="">
                                    <p>
                                        <span><?php pll_e( 'Tổng đài 24/7' ); ?></span>
                                        <label><?php the_field( 'ho_tro_khach_hang_1', 'option'); ?></label>
                                    </p>
                                </li>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-2.png" class="img-fluid" alt="">
                                    <span></span>
                                    <label><?php the_field( 'ho_tro_khach_hang_2', 'option'); ?></label>
                                </li>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-3.png" class="img-fluid" alt="">
                                    <span></span>
                                    <label><?php pll_e( 'address' ); ?></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-ft col-link-ft">
                        <h3><?php pll_e( 'DỊCH VỤ' ); ?></h3>
                        <div class="link-ft">
                            <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'custom-menu', 
                            ) ); 
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-ft">
                        <h3><?php pll_e( 'MỘT SẢN PHẨM CỦA' ); ?></h3>
                        <div class="logo-sp">
                            <img src="<?php the_field( 'logo_footer' , 'option'); ?>" class="img-fluid" alt="<?php pll_e( 'Khách hàng tiêu biểu' ); ?>">
                            <label><?php pll_e( 'Công ty TNHH Hệ thống Thông tin FPT' ); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reserved text-center">
        <div class="container">
            <p>Copyright © 2020 FPT Information System. All rights reserved</p> <a href="https://econtract.fpt.com.vn/wp-content/uploads/2023/07/FPT-IS-Dieu-khoan-dich-vu.pdf" style="color: #2E6CF6;">Điều Khoản Dịch Vụ</a> - <a href="https://econtract.fpt.com.vn/wp-content/uploads/2023/10/ECONTRACT-Chinh-sach-bao-mat-DLCN.pdf" style="color:#2E6CF6;">Chính Sách Bảo Vệ Dữ Liệu Cá Nhân</a>
        </div>
    </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101523018214570");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>
