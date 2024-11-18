<?php
/**
 * Template Name: Sản phẩm
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
                            <li><a href="" class="active">Hợp đồng điện tử (6)</a></li>
                            <li><a href="">Hợp đồng lao động (6)</a></li>
                            <li><a href="">Tài chính/ Ngân hàng</a></li>
                            <li><a href="">Bảo hiểm</a></li>
                            <li><a href="">Giáo dục</a></li>
                            <li><a href="">Du lịch</a></li>
                            <li><a href="">Đa ngành</a></li>
                        </ul>
                    </div> 
                    <div class="form-bar-register text-center">
                        <h4>Đăng ký ngay để nhận thông tin hữu ích mỗi tuần</h4>
                        <div class="frm-bar">
                            <div class="item-frm">
                                <input type="text" placeholder="Nhập email của bạn" class="txt_field">
                            </div>
                            <div class="item-frm text-center"> 
                                <input type="submit" value="Đăng ký nhận tin" class="btn_field">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="kienthuc-big">
                        <div class="avarta">
                            <div class="avr"><a href=""><img src="http://econtract.test/wp-content/uploads/2022/06/ung-dung-eKYC-1.jpeg" class="img-fluid w-100" alt=""></a></div>
                        </div>
                        <div class="info">
                            <h2><a href="">[Quà tặng] Tặng gói ký 50 hợp đồng kèm 50 lần chứng thực hợp đồng bởi Bộ Công thương</a></h2>
                            <div class="desc">Hợp đồng điện tử đang dần trở thành một xu hướng chung và ngày càng được sử dụng rộng rãi. Theo sách trắng Thương mại điện tử 2021, có 33% doanh nghiệp được Bộ Công Thương khảo sát đã</div>
                            <div class="view-detail">
                                <a href="">
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
                        <div class="t-kthuc">Kiến thức dành cho bạn</div>
                        <div class="row">
                            <?php
                            for ($i=0; $i <= 11 ; $i++) { ?>
                                <div class="col-md-4">
                                    <div class="item-kthuc">
                                        <div class="avarta"><a href=""><img src="http://econtract.test/wp-content/uploads/2022/06/ung-dung-eKYC-1.jpeg" class="img-fluid w-100" alt=""></a></div>
                                        <div class="info">
                                            <h3><a href="">Nhựa Bình Minh sử dụng hợp đồng điện tử FPT eContract</a></h3>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                        <div class="pagination-main">
                            <ul>
                                <li><a href="" class="active">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
