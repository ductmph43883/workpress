<?php
/**
 * Template Name: Quotation
 */

get_header();
?>
<!-- <?php include('wp-content/themes/wp-bootstrap-starter/breadcrumb.php') ?> -->


<main class="page-price">
    <section class="box-bread">
        <div class="container">
            <ul>
                <li>
                    <a href="/"><?php pll_e( 'Trang chủ' ); ?></a>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 12L10 8L6 4" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span><?php the_title(); ?> </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="box-price">
        <div class="container">
            <div class="box-price-1">
                <div class="title-price text-center"><h1><?php pll_e( 'Bảng giá Gói Ký hợp đồng, tài liệu điện tử FPT.eContract' ); ?></h1></div>
                <div class="list-package-price">
                    <div class="slide-pack">
                        <?php $key = 0; ?>
                            <?php while ( has_sub_field('danh_sach_slide', 'option') ) : ?>
                            <div class="item-slide">
                                <div class="item-pack text-center">
                                    <div class="name-pack"><?php the_sub_field( 'ten_goi' ); ?></div>
                                    <div class="desc">
                                        <?php if( get_locale() == 'vi' ):?>
                                        <p><?php the_sub_field( 'desc_pack' ); ?></p>
                                        <?php else: ?>
                                        <p><?php the_sub_field( 'desc_pack_en' ); ?></p>
                                        <?php endif; ?>
                                        <div class="price-pack">
                                            <?php 
                                            if( get_locale() == 'vi' ){
                                                $donvi = 'đ';
                                            }else{
                                                $donvi = 'vnd';
                                            }
                                            ?>
                                            <?php
                                                $price_pack = get_sub_field('price_pack');
                                                if($price_pack == ''){
                                                    echo pll_e( 'Liên hệ' );
                                                }else if($price_pack == 0){
                                                    echo pll_e( 'Miễn phí' );
                                                }else{
                                                    if( get_locale() == 'vi' ):
                                                        echo number_format( (int) $price_pack, 0, '', '.').'<span>'.$donvi.'</span>';
                                                    else:
                                                        echo number_format( (int) $price_pack, 0, '', ',').'<span>'.$donvi.'</span>';
                                                    endif;
                                                }
                                            ?>
                                        </div>
                                        <div class="btn-pack">
                                            <?php 
                                            if( get_sub_field( 'link_vi' ) ){
                                                if( get_locale() == 'vi' ){
                                            ?>
                                                <a href="<?= get_sub_field( 'link_vi' ); ?>" class="select-price">
                                            <?php 
                                                }else{
                                            ?>
                                                <a href="<?= get_sub_field( 'link_en' ); ?>" class="select-price">
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                            <a href="#price-scroll" class="select-price" data-key="<?= $key; ?>">
                                            <?php 
                                            }
                                            ?>
                                                <?php pll_e( 'Chọn mua' ); ?>
                                                <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.07084 5.14251C9.71818 5.53091 9.71818 6.46909 9.07085 6.85749L2.0145 11.0913C1.34797 11.4912 0.5 11.0111 0.5 10.2338L0.5 1.76619C0.5 0.988896 1.34797 0.508783 2.0145 0.908698L9.07084 5.14251Z" fill="#2E6CF6"/>
                                                </svg>
                                            </a>
													</a>
											</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $key++ ; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
				</section>
    <section class="box-form-price" id="price-scroll">
        <div class="container">
            <div class="content-form-price">
                <div class="abs-price abs-1">
                    <img src="https://channel.mediacdn.vn/2021/9/16/abs-price-1631741689180324235847.png" class="img-fluid" alt="">
                </div>
                <div class="abs-price abs-2">
                    <img src="https://channel.mediacdn.vn/2021/9/16/abs-price-1631741689180324235847.png" class="img-fluid" alt="">
                </div>
                <div class="title-form">
                    <h2><?php the_field('title_form_dk') ?></h2>
                </div>
                <div class="list-item-form">
                    <div class="item-form">
                        <?php while ( has_sub_field('thong_tin_nguoi_dang_ky') ) : ?>
                        <div class="row">
                            <div class="col-md-12 lab-mb-0">
                                <label><?php the_sub_field('title_thongtin') ?></label>
                            </div>
                            <div class="col-md-6">
                                <div class="inp_field">
                                    <input type="text" placeholder="<?php the_sub_field('txt_name_tt') ?>" id="inp_name" name="firstname" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="ul_field">
                                    <li>
                                        <div class="inp_field">
                                            <input type="text" placeholder="<?php the_sub_field('txt_phone_tt') ?>" id="inp_phone" name="mobilephone" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inp_field">
                                            <input type="email" placeholder="<?php the_sub_field('text_email_tt') ?>" id="inp_mail" name="email" required>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="item-form"> 
                        <div class="row">
                            <div class="col-md-6">
                                <label><?php the_field('title_form_dk_econtract'); ?></label>
                                <div class="inp_field select_field">
                                    <select name="goiphanmem_econtract" class="numb_money" id="numb-1">
                                        <option value="0"><?php pll_e( 'Chọn' ); ?></option>
                                        <?php $key_1 = 0; ?>
                                            <?php while ( has_sub_field('danh_sach_slide', 'option') ) : ?>
                                                <?php if(!get_sub_field( 'link_vi' )) : ?>
                                                <option id="list<?= $key_1; ?>" data-key="<?= $key_1; ?>" value="<?php the_sub_field( 'price_pack' ); ?>"><?php the_sub_field( 'ten_goi' ); ?> - 
                                                    <?php get_locale() == 'vi' ? the_sub_field( 'desc_pack' ) : the_sub_field( 'desc_pack_en' ); ?>
                                                </option>
                                                <?php endif;?>
                                            <?php  $key_1++; ?>
                                        <?php endwhile; ?>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <?php while ( has_sub_field('banquyen') ) : ?>
                                <label><?php the_sub_field('title_banquyen') ?></label>
                                <div class="inp_field select_field">
                                    <select name="banquyen_econtract" class="numb_money" id="numb-2">
                                        <?php while ( has_sub_field('choose_banquyen') ) : ?>
                                            <option value="<?php the_sub_field( 'gia_banquyen' ); ?>"><?php the_sub_field( 'ten_banquyen' ); ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-md-6">
                                <?php while ( has_sub_field('tichhop_fptecontract') ) : ?>
                                <label><?php the_sub_field('title_tichhop') ?></label>
                                <div class="inp_field select_field">
                                    <select name="tichhop_econtract" class="numb_money" id="numb-3">
                                        <?php while ( has_sub_field('choose_tichhop') ) : ?>
                                            <option value="<?php the_sub_field( 'gia_tichhop' ); ?>"><?php the_sub_field( 'ten_tichhop' ); ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="col-md-6">
                                <ul class="ul_field">
                                    <li>
                                        <?php while ( has_sub_field('chuky_usb_token') ) : ?>
                                        <label><?php the_sub_field('title_chuky') ?></label>
                                        <div class="inp_field select_field">
                                            <select name="chukyso_econtract" class="numb_money" id="numb-4">
                                                <?php while ( has_sub_field('choose_chuky') ) : ?>
                                                    <option value="<?php the_sub_field( 'gia_chuky' ); ?>"><?php the_sub_field( 'ten_chuky' ); ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <?php endwhile; ?>
                                    </li>
                                    <li>
                                        <?php while ( has_sub_field('km_form') ) : ?>
                                        <label><?php the_sub_field('title_km') ?></label>
                                        <div class="inp_field select_field"> 
                                            <select name="khuyenmai_econtract" class="numb_money" id="numb-8">
                                                <?php while ( has_sub_field('choose_km') ) : ?>
                                                    <option value="<?php the_sub_field( 'gia_km' ); ?>"><?php the_sub_field( 'ten_km' ); ?></option>
                                                <?php endwhile; ?>
                                            </select> 
                                        </div>
                                        <?php endwhile; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item-form"><div class="line-form"></div></div><div class="item-form"><div class="row"><div class="col-md-6"><label>Chữ ký số USB token</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-4"><option value="0">Chọn</option><option value="1827000">FPT.CA Token Ký mới 1 năm</option><option value="2739000">FPT.CA Token Ký mới 2 năm</option><option value="3107000">FPT.CA Token Ký mới 3 năm</option><option value="1277000">FPT.CA Token  Gia hạn 1 năm</option><option value="2189000">FPT.CA Token  Gia hạn 2 năm</option><option value="2907000">FPT.CA Token  Gia hạn 3 năm</option></select></div></div><div class="col-md-6"><label>Xác thực người ký bằng eKYC</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-5"><option value="0">Liên hệ</option><option value="">K1 - Xác thực eKYC trích xuất CMT/CCDC - 2.000 vnd/lần</option><option value="">K2 - Xác thực eKYC  nhận dạng khuôn mặt - 2.500 vnd/lần</option></select></div></div></div></div><div class="item-form"><div class="row"><div class="col-md-6"><label>Xác thực người ký bằng SMS OTP</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-6"><option value="0">Chọn</option><option value="1100000">Xác thực bằng SMS OTP - O1 - Gói 500 lần ký </option><option value="2090000">Xác thực bằng SMS OTP - O2 - Gói 1.000 lần ký </option><option value="3850000">Xác thực bằng SMS OTP - O3 - Gói 2.000 lần ký </option><option value="7700000">Xác thực bằng SMS OTP - O4 - Gói 5.000 lần ký </option><option value="11000000">Xác thực bằng SMS OTP - O5 - Gói 5.000 lần ký </option></select></div></div><div class="col-md-6"><label>Chữ ký số HSM</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-7"><option value="0">Liên hệ</option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P1 - Gói 500 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P2 - Gói 1.000 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P3 - Gói 2.000 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P4 - Gói 5.000 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P5 - Gói 10.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S1 - Gói 500 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S2 - Gói 1.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S3 - Gói 2.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S4 - Gói 5.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S5 - Gói 10.000 lần ký </option></select></div></div></div></div> -->
                    <div class="item-form">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="price-form">
                                    <li class="field_money">
                                        <?php while ( has_sub_field('total_money') ) : ?>
                                            <label class="mb-0"><?php the_sub_field('title_money') ?></label>
                                        <?php endwhile; ?>
                                    </li>
                                    <li>
                                        <label class="mb-0 total_show">0 <?= $donvi; ?></label>
                                    </li>
                                    <!-- <li><label class="mb-0"><input type="number" name="sum" id="sum" class="form-control" readonly />đ</label></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>           
					</div>
<a href="http://econtract.fpt.com.vn/wp-content/uploads/2023/11/02qdtt10_chinhsachbaovedulieucanhan_vi-1-20231116065730-pgbax-2.pdf" style="color: #2E6CF6;"> > Chính sách Bảo mật dữ liệu cá nhân</a>

<div class="item-form">
    <div class="row">
        <div class="col-md-6">
            <ul class="price-button">
                <?php while (has_sub_field('cta_button')) : ?>
                    <li>
                        <form method="POST" action="" id="myForm" onsubmit="return validateForm();">
                            <input type="checkbox" name="agreement" id="agreement">
                            <label for="agreement">Tôi đồng ý với chính sách Bảo mật dữ liệu cá nhân</label>
                            <br>
                            <input type="submit" id="submit_button" value="<?php the_sub_field('cta_dang_ky') ?>" class="btn-price">
                        </form>
                    </li>
                    <li>
                        <div class="hotline-price">
                            <a href="tel:<?php the_sub_field('hotline_bar') ?>"><?php the_sub_field('cta_tu_van') ?></a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var agreementCheckbox = document.getElementById("agreement");
        if (!agreementCheckbox.checked) {
            alert("Vui lòng tích chọn đồng ý với chính sách Bảo mật !");
            return false;
        }
    }
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['agreement'])) {
        // Ô checkbox đã được chọn
        // Thực hiện các hành động hoặc xử lý ở đây

        // Ví dụ:
        echo "";
    } else {
        // Ô checkbox không được chọn
        // Xử lý lỗi hoặc hiển thị thông báo cho người dùng

        // Ví dụ:
        echo "Vui lòng tích chọn đồng ý với chính sách Bảo mật !";
    }
}
?>
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
        <button type="button" class="btn btn-primary clc-fail-mail" data-toggle="modal" data-target="#myfail" style="display: none;">Open modal</button>
        <div class="modal fade modal-mail" id="myfail">
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
                            <h3><?php pll_e( 'Lỗi' ); ?></h3>
                            <p><?php pll_e( 'Mời quý khách hàng nhập Tên, Email, Số điện thoại.' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-srv-price">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="txt-srv">
                        <ul>
                            <?php while ( has_sub_field('content_price')) : ?>
                                <li>
                                    <div class="icon">
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                        </svg>
                                    </div> 
                                    <div class="i-text"><?php the_sub_field('desc_ctn_price') ?></div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="avar-srv text-center">
                        <img src="<?php echo get_field('avr_content_price')['url'] ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if(get_field('trang_thai') === 'Hiện') : 
    ?>
    <section class="box-price-sale">
        <div class="container">
            <div class="title-price">
                <h2><?php the_field('title_sale') ?></h2>
            </div>
            <div class="list-sale">
                <?php while ( has_sub_field('list_sale')) : ?>
                    <div class="item-sale">
                        <div class="avarta">
                            <a href="<?php the_sub_field('link_sale') ?>">
                                <img src="<?php echo get_sub_field('avr_sale')['url'] ?>" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="info">
                            <h3>
                                <a href="<?php the_sub_field('link_sale') ?>"><?php the_sub_field('title_news_sale') ?></a>
                            </h3>
                            <div class="price-sale">
                                <ul>
                                    <li>
                                        <span><?php the_sub_field('gia_moi') ?></span>
                                    </li>
                                    <li>
                                        <del><?php the_sub_field('gia_cu') ?></del>
                                    </li>
                                </ul>
                            </div>
                            <div class="desc">
                                <?php the_sub_field('desc_sale') ?>
                            </div>
                            <div class="btn-pack readmore">
                                <a href="#price-scroll" class="clc-scoll-form scoll-price-pg">CHỌN MUA</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php
    endif; 
    ?>
    <section class="box-tuvan" style="background: url(<?php echo get_field('banner_ht')['url'] ?>);background-size: cover;">
        <div class="container">
            <div class="content-tvan">
                <div class="logo">
                    <img src="<?php echo get_field('logo_banner')['url'] ?>" class="img-fluid" alt="">
                </div>
                <div class="title-tvan"><?php the_field('title_ht') ?></div>
                <div class="desc"><?php the_field('desc_ht') ?></div>
                <!-- <div class="btn-van">
                    <ul>
                        <li>
                            <a href="/lien-he/" class="tv-1">Tư vấn cho tôi</a>
                        </li>
                        <li> 
                            <a href="tel:<?php the_field('hotline') ?>" class="tv-2">GỌi tư vấn</a>
                        </li>
                    </ul>
                </div> -->
                <div class="form-congtacvien">
                    <div class="title-ctv"><?php pll_e('Thông tin người đăng ký') ?></div>
                    <div class="i-form-ctv">
                    <?php echo do_shortcode( '[contact-form-7 id="2398" title="Mail Hợp Tác Trang Bảng Gía"]' ) ?>
                    </div>
                </div>

                <!-- <div class="tvan-more">
                    <a href="<?php the_field('link_more_banner') ?>">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6654 14.007C20.6654 14.0044 20.6667 14.003 20.6667 14.0004C20.6667 13.9564 20.6454 13.9204 20.6414 13.8777C20.6307 13.7497 20.6147 13.6217 20.5654 13.5017C20.5294 13.411 20.4681 13.339 20.4134 13.259C20.3721 13.2004 20.3494 13.1324 20.2987 13.079L16.4814 9.07902C15.9721 8.54569 15.1294 8.52702 14.5961 9.03502C14.0641 9.54303 14.0441 10.387 14.5521 10.9204L16.2187 12.667H8.66673C7.93073 12.667 7.33339 13.263 7.33339 14.0004C7.33339 14.7364 7.93073 15.3337 8.66673 15.3337H16.1147L14.3907 17.0577C13.8694 17.5777 13.8694 18.4217 14.3907 18.943C14.6507 19.203 14.9921 19.3337 15.3334 19.3337C15.6747 19.3337 16.0161 19.203 16.2761 18.943L20.2761 14.943C20.3974 14.8217 20.4961 14.675 20.5627 14.5137C20.6307 14.3524 20.6641 14.1804 20.6654 14.007ZM14.0001 24.6665C8.11873 24.6665 3.33339 19.8811 3.33339 13.9998C3.33339 8.11847 8.11873 3.33314 14.0001 3.33314C19.8814 3.33314 24.6667 8.11847 24.6667 13.9998C24.6667 19.8811 19.8814 24.6665 14.0001 24.6665ZM14.0001 0.666504C6.64808 0.666504 0.666748 6.64784 0.666748 13.9998C0.666748 21.3518 6.64808 27.3332 14.0001 27.3332C21.3521 27.3332 27.3334 21.3518 27.3334 13.9998C27.3334 6.64784 21.3521 0.666504 14.0001 0.666504Z" fill="white" />
                        </svg>
                        <span>XEM CHI TIẾT</span>
                    </a>
                </div> -->
            </div>
        </div>
    </section>
    <section class="box-quesstion">
        <div class="container">
            <div class="title-price">
                <h2><?php the_field('title_quess') ?></h2>
            </div>
            <div class="contenet-quess">
                <div class="left">
                    <div class="box-search-quess">
                        <form class="button-question">
                            <input type="text" class="s" placeholder="<?php the_field('title_search'); ?>">
                            <input type="submit" class="d-none"/>
                        </form>
                        <button>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33336 13.3333C3.33336 7.81833 7.81836 3.33333 13.3334 3.33333C18.8484 3.33333 23.3334 7.81833 23.3334 13.3333C23.3334 18.8483 18.8484 23.3333 13.3334 23.3333C7.81836 23.3333 3.33336 18.8483 3.33336 13.3333ZM29.5117 27.155L23.8533 21.495C25.6083 19.2383 26.6667 16.41 26.6667 13.3333C26.6667 5.98167 20.685 0 13.3333 0C5.98167 0 0 5.98167 0 13.3333C0 20.685 5.98167 26.6667 13.3333 26.6667C16.41 26.6667 19.2383 25.6083 21.495 23.8533L27.155 29.5117C27.48 29.8367 27.9067 30 28.3333 30C28.76 30 29.1867 29.8367 29.5117 29.5117C30.1633 28.86 30.1633 27.8067 29.5117 27.155Z" fill="#2E3A59"/>
                            </svg>
                        </button>
                    </div>
                    <div class="box-quess"> 
                        <div id="accordion">
                            <?php
                            $count_head = 1;
                            $count_coll = 1;  
                            ?>
                            <?php while ( has_sub_field('list_quess_box','option')) : ?> 
                                <div class="card-quess">
                                    <div class="head-quess">
                                        <button class="<?php echo $count_head == 1 ? null : 'collapsed'; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $count_head++ ?>" aria-expanded="true">
                                            <span class="icon"></span>
                                            <label>
                                            <?php
                                            if (get_locale() == 'vi') {
                                                echo get_sub_field('cau_hoi_item');
                                            }else{
                                                echo get_sub_field('cau_hoi_item_en');
                                            }
                                            ?>
                                            </label>
                                        </button>
                                    </div>
                                    <div id="collapse-<?php echo $count_coll++ ?>" class="collapse <?php echo $count_coll == 2 ? 'show' : null; ?>" data-parent="#accordion">
                                        <div class="content-answer">
                                            <?php
                                            if (get_locale() == 'vi') {
                                                echo get_sub_field('tra_loi_item');
                                            }else{
                                                echo get_sub_field('tra_loi_item_en');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>  
                            <a class="load-search d-none"><h2 id="title-bg"><span><?php pll_e( 'Đang lấy dữ liệu' ); ?> </span></h2></a>
                        </div>
                    </div> 
                </div>
                <div class="right"> 
                    <div class="contact-quess"> 
                        <div class="titl-quess"><?php the_field('title_contact_price') ?></div>
                        <div class="desc"><?php the_field('desc_contact_price') ?></div>
                        <div class="hotline-bn text-center">
                            <p><?php the_field('hotline_contact_price_1') ?></p>
                            <p><?php the_field('hotline_contact_price_2') ?></p>
                        </div>
                        <div class="btn-quss">
                            <ul>
                                <li>
                                    <a href="<?php the_field('linktuvan_price') ?>" class="quess-1"><?php pll_e('Tư vấn cho tôi' ); ?></a>
                                </li>
                                <li>
                                    <a class="quess-2" href="tel:<?php the_field('numb_hotline_price') ?>"><?php the_field('GỌI' ); ?> <?php the_field('numb_hotline_price') ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="bn-quess text-center">
                            <img src="<?php echo get_field('avarta_contact_price')['url'] ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-part">
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php pll_e( 'Khách hàng tiêu biểu' ); ?></div>
            <div class="slide-partner dot-circle wow fadeInUp wHighlight" data-wow-delay=".2s">
                <?php 
                    $array = get_field('img_kh','option');
                ?>
                <?php foreach (array_chunk($array, 2) as $chunk): ?>
                    <div class="item-slide">
                        <?php foreach ($chunk as $key => $value): ?>
                            <div class="item-partner"><a href=""><img src="<?= $value['list_img_kh'] ?>" class="img-fluid" alt=""></a></div>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?> 
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
