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
        
        $('#city-reviews-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
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
        $('.testimonial-morebtn').click(function(e) {
            e.preventDefault();
            $(this).text(function(i, t) {
                return t == 'read less' ? 'read more' : 'read less';
            }).prev('.testimonial-moretext').toggleClass('show').prev('.testimonial-dots').toggle()
        });
    });
})(jQuery);
