(function($) {
	jQuery(document).ready(function() {
	    // desktop multilevel menu
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
            });
            return false;
        });;
        //sticky header
        jQuery(window).scroll(function() {
            if ($(this).scrollTop() > 50){  
                $('#menu_area').addClass("sticky");
            }
            else{
                $('#menu_area').removeClass("sticky");
            }
        });

        $('#cookie-notice').addClass('slide-up');

        $('#close-notice, #accept-cookie').click(function(e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });

        $(".accordion-list .panel:first-of-type > h4").addClass('active');
        $(".accordion-list .panel:first-of-type > .panel__content").css('display', 'block');
        $(".accordion-list .panel > h4").on("click", function (e) {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this)
                    .siblings(".accordion-list .panel .panel__content")
                    .slideUp(200);
            } else {
                $(".accordion-list .panel > h4").removeClass("active");
                $(this).addClass("active");
                $(".accordion-list .panel .panel__content").slideUp(200);
                $(this)
                    .siblings(".accordion-list .panel .panel__content")
                    .slideDown(200);
            }
            e.preventDefault();
        });
        
        $('#city-reviews-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: false,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000,
                        dots: true,
                        arrows: false,
                    }
                },

                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: false,
                        infinite: false,
                        dots: true,
                        arrows: false,
                    }
                },
            ]
        });

        $('.testimonials-list').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
        });        

    // Menu
    $('#top__mobile a').click(function(){
        $('.main-menu-sidebar').addClass("menu-active");
        $('.menu-overlay').addClass("active-overlay");
        $(this).toggleClass('open');
    });

    // Menu
    $('.close-menu-btn').click(function(){
        $('.main-menu-sidebar').removeClass("menu-active");
        $('.menu-overlay').removeClass("active-overlay");
    });

        $(function() {
    
        var menu_ul = $('.nav-links > li.has-menu  ul'),
            menu_a  = $('.nav-links > li.has-menu  small');
        
        menu_ul.hide();
        
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
            }
        });
        
        });
        
    $(".nav-links > li.has-menu  small ").attr("href","javascript:;");

    var $menu = $('#menu');

    $(document).mouseup(function (e) {
      if (!$menu.is(e.target) // if the target of the click isn't the container...
      && $menu.has(e.target).length === 0) // ... nor a descendant of the container
      {
        $menu.removeClass('menu-active');
        $('.menu-overlay').removeClass("active-overlay");
      }
    });        

        $(document).on('click', 'ready-to-move .rtm-link', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top-100
            }, 500);
        });

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#go-to-top').addClass('on');
            } else {
                jQuery('#go-to-top').removeClass('on');
            }
        });
        jQuery('#go-to-top').click(function() {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
        });
        $(".date-picker-input").datepicker({
            minDate: '0'
        });
        $('.selectpicker').selectpicker();
        // modal script
        setTimeout(function() {
            jQuery('.modal-overlay').addClass('show');
        }, 1000);
        $('.zebra_tooltips_below').click(function(e){
            var myEm = $(this).attr('data-my-element');
            var modal = $('.modal-overlay[data-my-element = '+myEm+'], .modal[data-my-element = '+myEm+']');
            e.preventDefault();
            modal.addClass('active');
            $('html').addClass('fixed');
        });
        $('.close-modal').click(function(){
            var modal = $('.modal-overlay, .modal');
            $('html').removeClass('fixed');
            modal.removeClass('active');
        });
        $(document).ready(function(){ 
            $("#top-search a").click(function(e) { 
                e.preventDefault();
                $(".search-div, .search-overlay").fadeIn();
            });
            $(".search-div .close-search").click(function(e) { 
                e.preventDefault();
                $(".search-div, .search-overlay").fadeOut(); 
            });
        });


        $(function() {
            $('.quote-cta--single a.btn-cta').click(function() {
              if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html, body').animate({
                    scrollTop: target.offset().top - 100
                  }, 1000);
                  return false;
                }
              }
            });
          });   	 
          
          $('.blog-text a').attr("target","_blank");

        
        $('.testimonial-morebtn').click(function(e) {
            e.preventDefault();
            $(this).text(function(i, t) {
                return t == 'read less' ? 'read more' : 'read less';
            }).prev('.testimonial-moretext').toggleClass('show').prev('.testimonial-dots').toggle()
        });
    });
      
})(jQuery);
