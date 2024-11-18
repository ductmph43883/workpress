(function ($, app) {



    var homeCls = function () {

        var el = {};



        this.run = function () {

            this.init();

            this.bindEvents();

        };



        this.init = function () {



        };



        this.bindEvents = function () {

            frontJs();

            menu_mobile();

            countdown();   

        };



        var frontJs = function () {

            $('.slide-banner').slick({

                autoplay: true,
                autoplaySpeed: 5000,
                speed: 600,

                arrow: false,

                dots: true,
                fade: true,

                slidesToShow: 1,

                slidesToScroll: 1,

                prevArrow: '',

                nextArrow: '',

                speed: 500,

            });

            $('.slide-tool').slick({

                autoplay: false,

                arrow: false,

                dots: false,

                slidesToShow: 4,

                slidesToScroll: 1,

                prevArrow: '<a href="javascript:void(0)" class="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +

                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +

                    '<path d="M23.5 13L16.5 20L23.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +

                    '</svg>\n</a>',

                nextArrow: '<a href="javascript:void(0)" class="next"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +

                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +

                    '<path d="M16.5 13L23.5 20L16.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +

                    '</svg>\n</a>',

                speed: 500,

                responsive: [

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                            dots: true,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 575,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    }

                ],

            });

            $(".slide-pack").slick({

                autoplay: false,

                arrow: true,

                dots: true,

                slidesToShow: 4,

                centerMode: false,

                prevArrow: '<a href="javascript:void(0)" class="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +

                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +

                    '<path d="M23.5 13L16.5 20L23.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +

                    '</svg>\n</a>',

                nextArrow: '<a href="javascript:void(0)" class="next"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +

                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#B8BCBF"/>\n' +

                    '<path d="M16.5 13L23.5 20L16.5 27" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +

                    '</svg>\n</a>',

                responsive: [

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 575,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    }

                ],

            });

            $(".slide-casestudy").slick({

                autoplay: false,

                arrow: false,

                dots: true,

                slidesToShow: 3,

                slidesToScroll: 3,

                centerMode: false,

                responsive: [

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 575,

                        settings: {

                            slidesToShow: 1.5,
                            infinite: false,
                            slidesToScroll: 1,

                        }

                    }

                ],

            });

            $(".slide-support").slick({

                autoplay: false,

                arrow: false,

                dots: true,

                slidesToShow: 4,

                slidesToScroll: 2,

                centerMode: false,

                responsive: [

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 575,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    }

                ],

            });

            $(".slide-feedback").slick({

                autoplay: false,

                arrow: false,

                dots: true,

                slidesToShow: 2,

                responsive: [

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 575,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    }

                ],

            });

            $(".slide-partner").slick({

                autoplay: false,

                arrow: false,

                dots: true,

                slidesToShow: 6,

                slidesToScroll: 3,

                centerMode: false,

                prevArrow: '',

                nextArrow: '',

                responsive: [

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 4,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 575,

                        settings: {

                            slidesToShow: 2,

                            slidesToScroll: 1,

                        }

                    }

                ],

            });

            $(".slide-partner-home").slick({

                autoplay:true,
                arrow:false,
                autoplaySpeed: 0,
                speed: 6000,

                dots: false,

                slidesToShow: 10,

                slidesToScroll: 1,

                centerMode: true,

                prevArrow: '',

                nextArrow: '',

                responsive: [

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 4,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    },

                ],

            });


            $('.box-trial p label').click(function(){
                $('.box-trial').slideUp(300);
            })

            // var youTubeUrl = $('.iframe-video-support iframe').attr('src');

            $('.list-video-support a').click(function(){
                $('.videoplay .active iframe')[0].src += "?&autoplay=0";  

                var tab_id = $(this).attr('data-tab');

                $('.list-video-support a').removeClass('active');

                $('.iframe-video-support').removeClass('active');

                $(this).addClass('active');

                $("#"+tab_id).addClass('active');
                // console.log($('.iframe-video-support iframe')[0])

                // $('.iframe-video-support iframe').attr('src', '');
                // $('.iframe-video-support iframe').attr('src', youTubeUrl);
                // $('.iframe-video-support iframe').each(function() {
                //     var src = $(this).attr('src');
                //     $(this).attr('src', src + (src.includes('?') ? '&' : '?') + 'autoplay=0');
                // });
                // $('.iframe-video-support iframe')[0].src += "?&autoplay=0";  
            }) 


            $('.list-tab-acc a').click(function(){ 

                var tab_id = $(this).attr('data-tab');

                $('.list-tab-acc a').removeClass('active');

                $('.tab-content').removeClass('active');

                $(this).addClass('active');

                $("#"+tab_id).addClass('active');

            })



            $(window).bind('scroll', function() {

                if ($(window).scrollTop() > 1) {

                    $('.header-top, main').addClass('sstick');

                }

                else {

                    $('.header-top, main').removeClass('sstick');

                }

            });



            if($(window).innerWidth() >= 1024){

                // new WOW().init();

            }

            if($(window).innerWidth() <= 767){
                $(".list-feature .row").slick({
                    autoplay: false,
                    arrow: false,
                    dots: true,
                    slidesToShow: 1,
                    prevArrow: '',
                    nextArrow: '',
                });

                $(".list-benefit .row").slick({
                    autoplay: false,
                    arrow: false,
                    dots: true,
                    slidesToShow: 1,
                    prevArrow: '',
                    nextArrow: '',
                });
            }



            $(".slide-part").slick({

                autoplay: false,

                arrow: true,

                dots: true,

                slidesToShow: 6,

                centerMode: false,

                responsive: [

                    {

                        breakpoint: 1300,

                        settings: {

                            slidesToShow: 5,

                            slidesToScroll: 1,

                            arrow: false,

                        }

                    },

                    {

                        breakpoint: 1023,

                        settings: {

                            slidesToShow: 4,

                            slidesToScroll: 1,

                            arrow: false,

                        }

                    },

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 4,

                            slidesToScroll: 1,

                        }

                    },

                    {

                        breakpoint: 575,

                        settings: {

                            slidesToShow: 3,

                            slidesToScroll: 1,

                        }

                    }

                ],

                prevArrow: '<button class="prev"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +

                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#ECEDEE"/>\n' +

                    '<path d="M23.5 13L16.5 20L23.5 27" stroke="#71787E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +

                    '</svg>\n</button>',

                nextArrow: '<button class="next"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +

                    '<path d="M0 2C0 0.895431 0.895431 0 2 0H38C39.1046 0 40 0.895431 40 2V38C40 39.1046 39.1046 40 38 40H2C0.895431 40 0 39.1046 0 38V2Z" fill="#ECEDEE"/>\n' +

                    '<path d="M16.5 13L23.5 20L16.5 27" stroke="#71787E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +

                    '</svg>\n</button>',

            });





            $('.scoll-price-pg').click(function(e){

                e.preventDefault();

                var target = $($(this).attr('href'));

                if(target.length){

                    var scrollTo = target.offset().top - 103;

                    $('body, html').animate({scrollTop: scrollTo+'px'}, 500);

                }

                $('.clc-scroll').removeClass("active");

                $('.sub-menu-mb, html').removeClass("active");

                $(this).addClass("active");

            });

              var $swiper = $(".swiper-container");
              var $bottomSlide = null;
              var $bottomSlideContent = null;
              var mySwiper = new Swiper(".swiper-container", {
                spaceBetween: 1, 
                slidesPerView: 3,
                centeredSlides: true,
                roundLengths: true,
                loop: true,
                loopAdditionalSlides: 30,
                pagination: '.swiper-pagination', 
                paginationClickable: true,
                slideToClickedSlide: true,
                breakpoints :{
                    1024:{
                      slidesPerView: 1.5,
                    },
                    767:{
                      spaceBetweenSlides: 10,
                      slidesPerView: 1,
                    },
                }
              });



        };



        var countdown = function () {
            var a = 0;
            $(window).scroll(function() {
                if ( $(".number-top").is("#counter") ) {

                var oTop = $('#counter').offset().top - window.innerHeight;

                if (a == 0 && $(window).scrollTop() > oTop) {

                    $('.counter-value').each(function() {

                        var $this = $(this),

                            countTo = $this.attr('data-count');

                        $({

                            countNum: $this.text()

                        }).animate({

                                countNum: countTo

                            },



                            {



                                duration: 1500,

                                easing: 'swing',

                                step: function() {

                                    $this.text(Math.floor(this.countNum));

                                },

                                complete: function() {

                                    // $this.text(this.countNum);
$this.text((this.countNum).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.'));

                                    //alert('finished');

                                }



                            });

                    });

                    a = 1;

                }

                }
            });
        };





        var menu_mobile = function () {

            $('.btn-bar').click(function () {

                $('.menu-mobile, body').addClass('active');

            })

            $('.close-menu').click(function () {

                $('.menu-mobile, body').removeClass('active');

            })

        };

    };





    $(document).ready(function () {

        var homeObj = new homeCls();

        homeObj.run();

        // On resize



    });

}(jQuery, $.app));


    $('#numb-1, #numb-2, #numb-3, #numb-4, #numb-8').on('change', function() {
        total_form();
    });
    
    $('.picksales').click(function(){
        var stt = $(this).data('stt');
        console.log(stt);
        $('#numb-1 option#list'+ stt).prop('selected', true);
        total_form();
    });

    function formatToCurrency(amount){
        return (amount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'); 
    }

    function total_form() {
        const total = Number($('#numb-1').val()) + Number($('#numb-2').val()) + Number($('#numb-3').val()) + Number($('#numb-4').val()) + Number($('#numb-8').val());
        var t = formatToCurrency(total);
        const formattedNumber = total.toLocaleString($('.lang_site').val());
        // console.log(formattedNumber)
        // $('.total_show').text(t.slice(0,-3));
        $('.total_show').text(formattedNumber);
    }
    $('.btn-price').click(function(){
    if($('#inp_mail').val() !== '' && $('#inp_name').val() !== '' && $('#inp_phone').val() !== ''){
        $('.clc-send-mail').click();
        $.ajax({
          type: "POST",
          url: '/wp-admin/admin-ajax.php',
          data : {
              action: "lienhe", 
              mailnhan: 'fpt.econtract@fpt.com.vn', 
              mail: $('#inp_mail').val(), 
              phone: $('#inp_phone').val(), 
              name: $('#inp_name').val(), 
              total: $('.total_show').text(),
              phanmem: $('#numb-1 option:selected').text(),
              banquyen: $('#numb-2 option:selected').text(),
              tichhop: $('#numb-3 option:selected').text(),
              usb: $('#numb-4 option:selected').text(),
              km: $('#numb-8 option:selected').text(),
            //   ekyc: $('#numb-5 option:selected').text(),
            //   sms: $('#numb-6 option:selected').text(),
            //   hsm: $('#numb-7 option:selected').text(),
          },
          success: function (n) {
              // alert('test'); 
            
          },
      });
      }else{
            $('.clc-fail-mail').click();
        }

    });
    

$('.btn-hoptac').click(function(){
    if($('.txt_name').val() !== '' && $('.txt_phone').val() !== '' && $('.txt_email').val() !== ''){
        $('.clc-send-mail').click();
    }
});

$('.button-question').submit(function(event) {
    // $.ajax({
    //     method: $(this).attr('method'),
    //     url: $(this).attr('action'),
    //     data: $(this).serialize(),
    //     // other AJAX settings goes here
    //     // ..
    // }).done(function(response) {
    //     // Process the response here
    // });
    $('.load-search').removeClass('d-none');
    $('.card-quess').remove();
    
    $.ajax({
        type: "POST",
        url: '/wp-admin/admin-ajax.php',
        data : {
            action: "my_repeater_show_more", 
            search: $('.button-question .s').val(),
        },
        success: function (json) {
            const data = JSON.parse(json);
            $('#accordion').append(data.content);
            $('.load-search').addClass('d-none');
        },
    });
    event.preventDefault();
});

$('.select-price').click(function () {
    var key = $(this).data('key');    
    $("#numb-1 option[data-key='" + key + "']").prop("selected", true);
});

jQuery(document).ready(function($) {
  var typingTimer;
  var doneTypingInterval = 500;
  var searchInput = $('#search-input');
  var searchResults = $('#search-results');

  searchInput.hover(function() {
    search();
  });

  searchInput.keyup(function() {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
  });

  function doneTyping() {
    search();
  }

  function search() {
    var searchTerm = searchInput.val();
    $.ajax({
      url: ajaxurl, 
      type: 'POST',
      data: {
        'action': 'search', // tên action được đăng ký trong functions.php
        'search_term': searchTerm // dữ liệu được truyền vào action
      },
      success: function(response) {
        searchResults.html(response);
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  }
});