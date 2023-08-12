<?php wp_footer(); ?>
    <script>
      jQuery(document).ready(function ($) {

        $("#owl-slider").owlCarousel ({
            navigation: true,
            dots: true,
            nav: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1, 
            animateOut: false, 
            autoplay: 5000,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

        $("#owl-tournaments").owlCarousel ({
            navigation: true,
            dots: true,
            nav: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1, 
            animateOut: false, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

        $(".slick-slider").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            vertical: true,
            autoplay: true,
            autoplaySpeed: 2000,
            verticalSwiping: true
        });

        $('.faq-item').on('click', function() {
          $(this).parent().children('.faq-content').slideToggle(300, function() {
            if($(this).is(':hidden')) {
              $(this).siblings().children().removeClass('active');
            }
            else {
              $(this).siblings().children().addClass('active');
            }
          }); 
          return false;
        });

        $('.menu-mobile-button').on('click', function() {
  			  $('.mobile-menu').toggleClass('active');
          return false;
		    });

        $('.menu-mobile-button').on('click', function() {
  			  $('.modal').toggleClass('active');
          return false;
		    });

        $('.modal').on('click', function() {
  			  $('.mobile-menu').removeClass('active');
          $('.menu-mobile-button').removeClass('active');
          $(this).removeClass('active');
		    });

        $('.menu-mobile-button').on('click', function() {
          $(this).toggleClass('active');
          return false;
		    });

        $('.single-slots-demo-back-play').on('click', function() {
          $('.single-slots-demo-back').removeClass('play');
          $('.single-slots-demo-block').addClass('play');
		    });

        clock();
        
        document.querySelector('.full-btn').addEventListener('click', function(){
          if(document.documentElement.webkitRequestFullscreen) {
            document.querySelector('.demo-iframe').webkitRequestFullscreen();
          }
          else{
            document.documentElement.mozRequestFullScreen();
          }
        });

      });
    </script>
  </body>
</html>
