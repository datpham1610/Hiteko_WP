$(document).ready(function() {
    $('#loginModal').modal('show');
    var $status = $('.pagingInfo');
    if ($(window).width() > 1200) {
        $('.document-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
            $('.slick-slide').find('.change').removeClass('col-lg-12');
            $('.slick-slide').find('.change').addClass('col-lg-10 offset-lg-1');
            $('.slick-current').find('.change').removeClass('col-lg-10 offset-lg-1');
            $('.slick-current').find('.change').addClass('col-lg-12');
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.html('<span>' + i + '</span> /' + slick.slideCount);
        });
        $('.document-slider').on('init', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.html('<span>' + i + '</span> /' + slick.slideCount);
        });
    }   else {
        $('.document-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.html('<span>' + i + '</span> /' + slick.slideCount);
        });
        $('.document-slider').on('init', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.html('<span>' + i + '</span> /' + slick.slideCount);
        });
    }
    var $status2 = $('.paginate');
    $('.list-news-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });
    $('.list-news-slider').on('init', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });


    $('.inside-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });
    $('.inside-slider').on('init', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });

    $('.outside-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });
    $('.outside-slider').on('init', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });

    $('.brands-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });
    $('.brands-slider').on('init', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + i + '</span> /' + slick.slideCount);
    });

    $('.employ-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        var a = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + a + '</span> /' + slick.slideCount);
    });
    $('.employ-slider').on('init', function(event, slick, currentSlide, nextSlide) {
        var a = (currentSlide ? currentSlide : 0) + 1;
        $status2.html('<span>' + a + '</span> /' + slick.slideCount);
    });

    if ($(window).width() > 1000) {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var heigtHeader = $('.header .top').height() + $('.header .logo').height() + $('.header .menu').height() + 10;
            if(show_menu2 == false){
                if (scroll > heigtHeader) {
                    $(".header-2").addClass("show");
                } else {
                    $(".header-2").removeClass("show");
                };
            };
        });
    } else {
        $(".header-2").addClass("show");
    }

    $('.header-2 .burger-menu .icon-burger').click(function(){
        $(this).css('opacity',0);
        $(this).css('position','absolute');
        $(this).css('pointer-events','none');
        $(this).parents().find('.close-menu').css('opacity',1);
        $(this).parents().find('.close-menu').css('pointer-events','unset');
        $('.header-2 .menu-mobile').addClass('menu-mobile-show');
        $('body').addClass('hide-body');
    });

    $('.header-2 .burger-menu .close-menu').click(function(){
        $(this).css('opacity',0);
        $(this).css('position','absolute');
        $(this).css('pointer-events','none');
        $(this).parents().find('.icon-burger').css('opacity',1);
        $(this).parents().find('.icon-burger').css('pointer-events','unset');
        $('.header-2 .menu-mobile').removeClass('menu-mobile-show');
        $('body').removeClass('hide-body');
    });

    $(window).scroll(function() {
        if ($('#count-percent').length) {
            var aTop = $('#count-percent').offset().top - 600;
            if ($(this).scrollTop() >= aTop) {
                $('.percent').each(function() {
                    $(this).prop('percent', 0).animate({
                        Counter: $(this).data('value')
                    }, {
                        duration: 1000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).css('opacity', 1);
                            $(this).text(Math.ceil(this.Counter) + '%');
                        }
                    });
                });
            }
        }
    });


    // setTimeout(function(){ console.log($('.slick-current').height()); }, 1000 );
    setTimeout(function() {
        if($(window).width()<=576){
            $('.document-slider').css('min-height', 'unset');
        } else {
            $('.document-slider').css('min-height', $('.slick-current').height());
        }
    }, 1000);

    $('.goTop').click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    })

    $('.projects .section2 .menu ').click(function() {
        $('.projects .section2 .menu ul').addClass('hide');
    });

    $('.realty .section2 .menu ').click(function() {
        $('.realty .section2 .menu ul').addClass('hide');
    });

    $('.news .section2 .menu ').click(function() {
        $('.news .section2 .menu ul').addClass('hide');
    });

    $('.news .section2 .menu2 ').click(function() {
        $('.news .section2 .menu2 ul').addClass('hide');
    });

    $('.single .section2 .menu ').click(function() {
        $('.single .section2 .menu ul').addClass('hide');
    });

    $('.single .section2 .menu2 ').click(function() {
        $('.single .section2 .menu2 ul').addClass('hide');
    });

    $('.business .section2 .menu ').click(function() {
        $('.business .section2 .menu ul').removeClass('hide');
        $(this).find('ul').addClass('hide');
    })

    $('.recruitment .section2 .menu ').click(function() {
        $('.recruitment .section2 .menu ul').addClass('hide');
    });

    $('.recruitment .section2 .menu2 ').click(function() {
        $('.recruitment .section2 .menu2 ul').addClass('hide');
    });

    $('.recruitment .section2 .menu3 ').click(function() {
        $('.recruitment .section2 .menu3 ul').addClass('hide');
    });

    if($(window).width() <= 576){
        $('.projects .section2 .menu').css('top', 0);

        $('.realty .section2 .menu').css('top', 0);

        $('.business .section2 .menu').css('top', 0);
        
    } else {
        $('.projects .section2 .menu').css('top', $('.projects .section2 .title-section').height());

        $('.realty .section2 .menu').css('top', $('.realty .section2 .title-section').height());

        $('.business .section2 .menu').css('top', $('.business .section2 .title-section').height());
    }

    $('.projects .section2 .menu').css('top', $('.projects .section2 .title-section').height());

    $('.realty .section2 .menu').css('top', $('.realty .section2 .title-section').height());

    $('.business .section2 .menu').css('top', $('.business .section2 .title-section').height());

    var image50 = ($('.single-project .section2 .single-project-item .single-image').height()) / 2;
    var image51 = ($('.single-realty .section2 .single-realty-item .single-image').height()) / 2;
    setTimeout(function() {
        if($(window).width() <= 576){
            $('.single-project-slider .slick-next-single').css('top', 'unset');
            $('.single-project-slider .slick-prev-single').css('top', 'unset');
            $('.single-realty-slider .slick-prev-realty').css('top', 'unset');
            $('.single-realty-slider .slick-next-realty').css('top', 'unset');
            $('.single-realty iframe').css('height', ($('.single-realty .section2 .box-blue').height()/2));
            $('.projects .section3 .project-related-slider .slick-prev-related').css('top', 'unset');
            $('.projects .section3 .project-related-slider .slick-next-related').css('top', 'unset');
            $('.single .section3 .single-related-slider .single-next-related').css('top', 'unset');
            $('.single .section3 .single-related-slider .single-prev-related').css('top', 'unset');
        } else {
            $('.single-project-slider .slick-next-single').css('top', image50);
            $('.single-project-slider .slick-prev-single').css('top', image50);
            $('.single-realty-slider .slick-prev-realty').css('top', image51);
            $('.single-realty-slider .slick-next-realty').css('top', image51);
            $('.single-realty iframe').css('height', $('.single-realty .section2  .box-blue').height());
            $('.projects .section3 .project-related-slider .slick-prev-related').css('top', ($('.projects .section3 .project-related-item .blue-blur').height()) / 2);
            $('.projects .section3 .project-related-slider .slick-next-related').css('top', ($('.projects .section3 .project-related-item .blue-blur').height()) / 2);
            $('.single .section3 .single-related-slider .single-next-related').css('top', ($('.single .section3 .single-related-item .blue-blur').height()) / 2);
            $('.single .section3 .single-related-slider .single-prev-related').css('top', ($('.single .section3 .single-related-item .blue-blur').height()) / 2);
        }
    }, 1000);

    var url = window.location.href;
    var id = url.substring(url.lastIndexOf('#') + 1);
    if(url.substring(url.lastIndexOf('#') + 1) != url ) {
        $('#' + id).addClass('show-menu');
        $('#' + id).addClass('show-content');
        if($('#' + id).hasClass('show-menu')){
            $('#menu-1').removeClass('show-menu');
            $('.menu ul').removeClass('hide');
            $('.menu2 ul').addClass('hide');
            $('.news .section2').css('background', 'url(' + hiteko.template_dir + '/assets/images/news-2-background.png) no-repeat bottom/cover');
            $('#content-1').removeClass('show-content'); 
            $('#tab-internal-2').addClass('active');
            $('#tab-internal-1').removeClass('active');
        }
    }

    $('.news .menu  ').click(function() {
        $('.news .menu-left').removeClass('show-menu');
        $('#menu-' + $(this).children().data('new-id')).addClass('show-menu');
        $('.news .section2 .menu2 ul').removeClass('hide');
        $('.news .section2').css('background', 'none')       
        $('.list-news-slider').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
        //$('.list-news-slider').remove();
        $('.list-news-slider').slick();
    });



    $('.news .menu2  ').click(function() {
        $('.news .menu-left').removeClass('show-menu');
        $('#menu-' + $(this).children().data('new-id')).addClass('show-menu');
        $('.news .section2 .menu ul').removeClass('hide');
        $('.news .section2').css('background', 'url('+ hiteko.template_dir+'/assets/images/news-2-background.png) no-repeat bottom/cover');
    });

    $('.recruitment .menu ').click(function() {
        $('.recruitment .menu-left').removeClass('show-menu');
        $('#menu-' + $(this).children().data('new-id')).addClass('show-menu');
        $('.recruitment .section2 .menu2 ul').removeClass('hide');
        $('.recruitment .section2 .menu3 ul').removeClass('hide');
        $('.recruitment .section2').css('background', 'none');
        $('.recruitment .section2 .cv').css('display', 'none');
    });

    $('.recruitment .menu2 ').click(function() {
        $('.recruitment .menu-left').removeClass('show-menu');
        $('#menu-' + $(this).children().data('new-id')).addClass('show-menu');
        $('.recruitment .section2 .menu ul').removeClass('hide');
        $('.recruitment .section2 .menu3 ul').removeClass('hide');
        $('.recruitment .section2 .cv').css('display', 'block')
        $('.recruitment .section2').css('background', 'url(./assets/images/recruitment.png) no-repeat bottom/contain');
    });

    $('.single-recruitment  img').click(function() {
        $('.single-recruitment .section2').css('background', 'url(./assets/images/recruitment.png) no-repeat bottom/contain');
        $('.single-recruitment .section2 .cv').css('display', 'block')
    })

    $('.single .section2 .menu').css('top', $('.single .section2 .title-section').height());
    $('.single .section2 .menu2').css('top', $('.single .section2 .title-section').height());

    $('#login').click(function() {
        $('#loginModal').modal('show');
    });
    $('.login').click(function() {
        $('#loginModal').modal('show');
    });
    $('#login-2').click(function() {
        $('#loginModal').modal('show');
    });

    $('#login-3').click(function() {
        $('#loginModal').modal('show');
    });

    $('.show-login').click(function() {
        $('#loginModal').modal('show');
    });

    $('.file .section3 .tab-title li').click(function() {
        $('.file .section3 .tab-title li').removeClass('active');
        $(this).addClass('active');
        $('.file .section3 .slide').removeClass('active');
        $('#slide-' + $(this).data('id')).addClass('active');
    });

    $('.news .section2 .menu2 ul a').click(function(){
        $('.news .section2 .menu2 ul li').removeClass('active')
        $(this).parent('li').addClass('active');
        $('.news .section2 .business-hide').removeClass('show-for-business');
        $('#business-' + $(this).parent('li').data('business-id')).addClass('show-for-business');
    });


    //Ajax Projects
        $('.projects .section2 .menu ul.hide li').click(function(e){
        $('.projects .section2 .menu ul.hide li').removeClass('active');
        $(this).addClass('active');
        $('.warp-projects').html('');
        $.ajax({
            type:'get',
            url: hiteko.site_url + '/wp-admin/admin-ajax.php',
            data:{
                action:'get_projects',
                post_id: $(this).data('id')
            },
            dataType:'json',
            success: function(data) {
                    $(data).each(function(index, el) {
                        var term = '';
                        $('.warp-projects').append(
                            '<div class="col-md-5 py-md-4" data-aos="fade-up" data-aos-duration="500">'+
                                '<img src="'+ el.thumbnail +'" alt="" class="img-fluid">'+
                            '</div>'+
                            '<div class="col-md-7 py-md-4" data-aos="fade-up" data-aos-duration="500">'+
                                '<div class="project-name">'+
                                    el.title +
                                '</div>'+
                                '<div class="project-address utm-rg">'+
                                    el.name+
                                '</div>'+
                                '<ul class="info-project list-unstyled">'+
                                    el.description+
                                '</ul>'+
                                '"<div class="see-more">'+
                                    '<a href="'+ el.link +'" class="utm-b">Xem thêm</a>'+
                                '</div>'+
                            '</div>'
                        );
                    }); 
            }
        });
    });


    //Ajax News
    $('.news .section2 .menu ul li').click(function(e){
        $('.news .section2 .menu ul li').removeClass('active');
        $(this).addClass('active');
        $('.list-news-slider').html('');
        $.ajax({
            type:'get',
            url: hiteko.site_url + '/wp-admin/admin-ajax.php',
            data:{
                action:'get_news',
                post_id: $(this).data('id')
            },
            dataType:'text',
            success: function(data) {
                console.log(data);
                $('.list-news-slider').html(data);
                $('.list-news-slider').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
                //$('.list-news-slider').remove();
                $('.list-news-slider').slick();
            }
        });
    });

    //Ajax Recruitment
        $('.recruitment .section2 .menu2 ul li').click(function(e){
        $('.recruitment .section2 .menu2 ul li').removeClass('active');
        $(this).addClass('active');
        $('.recruitment .section2 #menu-2').html('');
        $.ajax({
            type:'get',
            url: hiteko.site_url + '/wp-admin/admin-ajax.php',
            data:{
                action:'get_recruitment',
                post_id: $(this).data('id')
            },
            dataType:'json',
            success: function(data) {
                    $(data).each(function(index, el) {
                        var term = '';
                        $('.recruitment .section2 #menu-2').append(
                                '<div class="row">'+
                                    '<div class="col-md-4 pb-md-5">'+
                                        '<div class="thumbnail-2">'+
                                            '<img class="img-fluid" src="'+ el.thumbnail +'">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-8 pb-md-5" >'+
                                        '<div class="heading">'+
                                            '<div class="job">'+
                                                el.name +
                                            '</div>'+
                                            '<div class="range">'+
                                                el.range +
                                            '</div>'+
                                            '<div class="date">'+
                                               el.date +
                                            '</div>'+
                                        '</div>'+
                                        '<div class="body">'+
                                                el.description +
                                        '</div>'+
                                        '<div class="see-more-2">'+
                                            '<a href="'+ el.link +'" class="utm-b" tabindex="0">Xem thêm</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'
                        );
                    }); 
            }
        });
    });

    $('#put-file').change(function(){
        $('label.result').css('display','block');
        $('.noob').css('height','unset');
        $('label.result span').text($('#put-file').val());
    });

    $('.project-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        nextArrow: $('.slicknext'),
        prevArrow: $('.slickprev'),
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.document-slider').slick({
        dots: false,
        arrows: true,
        nextArrow: $('.slick-next'),
        prevArrow: $('.slick-prev'),
        autoplay: true,
        autoplaySpeed: 1500,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '250px',
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    speed: 500,
                    slidesToScroll: 1,
                    centerPadding: '40px',
                    infinite: true,
                    autoplay: true,
                    dots: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '0px',
                    centerMode: false,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '0px',
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '0px',
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.project-related-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        nextArrow: '<img class="slick-next-related" src="'+ hiteko.template_dir +'/assets/images/circle-next.png" />',
        prevArrow: '<img class="slick-prev-related" src="'+ hiteko.template_dir +'/assets/images/circle-prev.png" />',
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.single-project-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        nextArrow: '<img class="slick-next-single" src="'+ hiteko.template_dir +'/assets/images/circle-next.png" />',
        prevArrow: '<img class="slick-prev-single" src="'+ hiteko.template_dir +'/assets/images/circle-prev.png" />',
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.single-realty-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        nextArrow: '<img class="slick-next-realty" src="'+ hiteko.template_dir +'/assets/images/circle-next.png" />',
        prevArrow: '<img class="slick-prev-realty" src="'+ hiteko.template_dir +'/assets/images/circle-prev.png" />',
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.list-news-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: $('.news-next'),
        prevArrow: $('.news-prev'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.single-related-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        nextArrow: '<img class="single-next-related" src="'+ hiteko.template_dir +'/assets/images/circle-next.png" />',
        prevArrow: '<img class="single-prev-related" src="'+ hiteko.template_dir +'/assets/images/circle-prev.png" />',
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.inside-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: $('.inside-next'),
        prevArrow: $('.insdie-prev'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.outside-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: $('.outside-next'),
        prevArrow: $('.outside-prev'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.brands-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: $('.brands-next'),
        prevArrow: $('.brands-prev'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.employ-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: $('.employ-next'),
        prevArrow: $('.employ-prev'),
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    AOS.init();
})