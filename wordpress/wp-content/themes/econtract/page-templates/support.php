<?php
/**
 * Template Name: Support
 */

get_header();
?>

    <main>
        <section class="box-banner-bread text-center" style="">
            <div class="container"> 
                <div class="cap-banner-bread">
                    <h2><?php the_field('title_banner') ?></h2>
                    <div class="frm-bread">
                        <div class="item-frm-bread"><input type="text" id="search-input" placeholder="<?php the_field('text_search') ?>" class="txt_field"></div>
                        <div class="hver-search-bread">
                            <div class="list-bread-filter">
                                <ul id="search-results">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="box-support-blog">
            <div class="container">
                <div class="title-price text-center"><?php the_field('title_nghiepvu') ?></div>
                <div class="list-blog-support">
                    <div class="row">
                        <?php
                            $categories = get_categories( array(
                                'taxonomy' => 'huong-dan',   
                                'orderby' => 'ID', 
                            ) ); 

                            $count_course = 1;
                            foreach( $categories as $category ) { 
                        ?>
                        <div class="col-md-3">
                            <div class="item-blog-support">
                                <h3><?= $category->name ?></h3>
                                <ul>
                                    <?php   
                                    $product = array(
                                        'post_type'      => 'bai-huong-dan',
                                        'orderby' => 'publish_date', 
                                        'tax_query'     => array(
                                            array( 
                                                'taxonomy'  => 'huong-dan',
                                                'field'     => 'term_id',  
                                                'terms'     => $category->term_id  
                                            )
                                        )
                                    );
                                    $loop = new WP_Query( $product ); 

                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php
                                        endwhile;
                                        wp_reset_query(); 
                                    ?>  
                                </ul>
                            </div>
                        </div>
                        <?php 
                            }  
                        ?>
                    </div>
                </div> 
            </div>
        </section>
        <section class="box-video-support">
            <div class="container">
                <div class="title-price text-center"><?php the_field('title_video') ?></div>
                <div class="content-video-support">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="videoplay">
                                <?php $count_video = 0; ?>
                                <?php while ( has_sub_field('list_video')) : ?> 
                                    <div class="iframe-video-support <?= $count_video == 0  ? 'active' : ''; ?>" id="vd-<?php echo $count_video++ ?>">
                                        <?php the_sub_field('video') ?>
                                    </div>
                                <?php endwhile; ?>
                            </div> 
                        </div>
                        <div class="col-md-5">
                            <div class="list-video-support">
                                <ul>
                                    <?php $count_title = 0; ?>
                                    <?php while ( has_sub_field('list_video')) : ?> 
                                        <li><a href="javascript:void(0)" data-tab="vd-<?= $count_title ?>" class="<?= $count_title == 0 ? 'active' : ''; ?>" ><?php the_sub_field('title_list_video') ?></a></li>
                                        <?php $count_title++ ?>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php if(get_field( 'option_show_hide' ) == 'Show'){ ?>
            <section class="box-download text-center">
            <div class="container">
                <div class="info-download">
                    <h3><?php the_field('title_download') ?></h3>
                    <div class="desc"><?php the_field('desc_title') ?></div>
                    <div class="btn-tool-download">
                        <!-- <ul>
                            <li><a href="<?php the_field('link_button_1') ?>" class="tool_down">
                                    <span><?php the_field('text_button_1') ?></span>
                                </a></li>
                            <li><a href="<?php the_field('link_button_2') ?>" class="tool_support">
                                    <span><?php the_field('text_button_2') ?></span>
                                    <span></span>
                                </a></li> 
                        </ul> -->
                        <ul>
                            <?php while ( has_sub_field('list_cta_button')) : ?>
                                <li><a href="<?php the_sub_field('link_button_cta') ?>"><?php the_sub_field('text_button_cta') ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php  } ?>
        <?php if(get_field( 'option_show_hide' ) == 'Hide'){ ?>
        <?php  } ?>
        <section class="box-support-cate">
            <div class="container"> 
                <div class="top-answer">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="title-price mb-0"><?php the_field('title_quessiton') ?></div>
                        </div>
                        <div class="col-md-4">
                            <!-- <div class="box-search-quess mb-0">
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
                            </div> -->
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
                        <!-- <div class="load-more text-center"><a href="javascript:void(0)">LOAD MORE</a></div>  -->
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
                    <a href="https://www.fis.com.vn/" target="_blank">
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
<script type="text/javascript">
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<script src="https://www.youtube.com/iframe_api"></script>
<?php
get_footer();
