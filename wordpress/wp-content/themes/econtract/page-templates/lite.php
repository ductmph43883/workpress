<?php
/**
* Template Name: Lite
 */

get_header(); 
?>
<main class="page-price">
    <section class="box-banner-lite">
        <div class="container">
            <div class="content-lite-banner text-center">
                <h1><?php the_field('tieu_de_banner'); ?></h1>
                <div class="desc"><?php the_field('mo_ta_banner'); ?></div>
                <div class="btn-banner-2">
				<ul>
				<li><a href="<?php the_field('link_banner'); ?>" class="btn-main-1"><?php the_field('tieu_de_nut_banner'); ?></a></li>	
				<li><a href="<?php the_field('link_banner_copy'); ?>" class="btn-main-2"><?php the_field('tieu_de_nut_banner_copy'); ?></a></li>	
				</ul>
				</div>
                <div class="avr"><img src="<?php the_field('banner'); ?>" class="img-fluid" alt="<?php the_field('tieu_de_banner'); ?>"></div>
            </div>
        </div>
    </section>
    <section class="box-lite">
        <div class="container-fluid">
            <div class="list-lite">
                <div class="container">
                    <?php while ( has_sub_field('danh_sach_gt')) : ?>
                    <div class="item-lite">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="txt-lite">
                                    <h3><?php the_sub_field('tieu_de'); ?></h3>
                                    <div class="desc">
                                        <?php the_sub_field('noi_dung'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="avarta">
                                    <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/icon-lite.png" alt="<?php the_sub_field('tieu_de'); ?>"></div>
                                    <?php  
                                    if (get_sub_field('video')) {
                                    ?>
                                    <div class="video">
                                    <?php  
                                        echo get_sub_field('video');
                                    ?>
                                    </div>
                                    <?php  
                                    }else{ 
                                        echo '<div class="avr"><img src="'.get_sub_field('anh').'" class="img-fluid" alt="'.get_sub_field('tieu_de').'"></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-table-lite">
        <div class="container">
            <div class="title-price mb-0 text-center"><?php the_field('tieu_de'); ?></div>
            <div class="desc-title text-center"><?php the_field('mo_ta'); ?></div>
            <div class="content-table-lite">
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <div class="top-table text-center">
                                <h3><?php the_field('tieu_de_cot_1'); ?></h3>
                                <p><?php the_field('mo_ta_cot_1'); ?></p>
                                <div class="btn-table-lite">
                                    <a href="<?php the_field('link_1'); ?>"><?php the_field('tieu_de_nut_1'); ?></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="top-table text-center">
                                <h3><?php the_field('tieu_de_cot_2'); ?></h3>
                                <p><?php the_field('mo_ta_cot_2'); ?></p>
                                <div class="btn-table-lite">
                                    <a href="<?php the_field('link_2'); ?>"><?php the_field('tieu_de_nut_2'); ?></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong><?php the_field('tieu_de_hang'); ?></strong></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    <?php while ( has_sub_field('danh_sach')) : ?>
                    <tr>
                        <td><?php the_sub_field('tieu_de'); ?></td>
                        <td class="text-center">
                            <?php  
                            if (get_sub_field('cot_1') == 1) {
                            ?>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.6673 9.33325L12.0007 23.9999L5.33398 17.3333" stroke="#2E6CF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <?php  
                            }elseif (get_sub_field('cot_1') == 2) {
                            ?>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 16H25" stroke="#71787E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <?php  
                            }else{ 
                                echo get_sub_field('cot_1');
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <?php  
                            if (get_sub_field('cot_2') == 1) {
                            ?>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.6673 9.33325L12.0007 23.9999L5.33398 17.3333" stroke="#2E6CF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <?php  
                            }elseif (get_sub_field('cot_2') == 2) {
                            ?>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 16H25" stroke="#71787E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <?php 
                            }else{ 
                                echo get_sub_field('cot_2');
                            }
                            ?>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </section>
    <section class="box-support-cate">
        <div class="container">
            <div class="top-answer">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="title-price mb-0"><?php the_field('title_quessiton') ?></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-search-quess mb-0">
                            <form class="button-question">
                                <input type="text" class="s" placeholder="<?php the_field('text_search_quess') ?>">
                                <input type="submit" class="d-none"/>
                            </form>
                            </button>
                            <button>
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.3337 28C22.3293 28 28.0003 22.3289 28.0003 15.3333C28.0003 8.33769 22.3293 2.66663 15.3337 2.66663C8.33805 2.66663 2.66699 8.33769 2.66699 15.3333C2.66699 22.3289 8.33805 28 15.3337 28Z" stroke="#B8BCBF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29.3337 29.3333L26.667 26.6666" stroke="#B8BCBF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenet-quess">
                <div class="box-quess w-100">
                    <div id="accordion">
                        <div class="row">
                            <?php
                            $count_head = 1;
                            $count_coll = 1;  
                            ?>
                            <?php while ( has_sub_field('list_quess_box','option')) : ?> 
                                <div class="col-md-6">
                                    <div class="card-quess">
                                        <div class="head-quess">
                                            <button class="collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $count_head++ ?>" aria-expanded="true">
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
                                        <div id="collapse-<?php echo $count_coll++ ?>" class="collapse" data-parent="#accordion">
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
                                </div>
                            <?php endwhile; ?>  
                        </div>
                        <a class="load-search d-none"><h2 id="title-bg"><span><?php pll_e( 'Đang lấy dữ liệu' ); ?> </span></h2></a>
                    </div> 
                </div>
            </div> 
        </div>
    </section>
</main>
<?php
get_footer();