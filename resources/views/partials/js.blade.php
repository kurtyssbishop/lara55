<script>

            (function ($) {
               AOS.init();
                //have bootstrap menu dropdown on hover   
                $('ul.nav li.dropdown').hover(function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown(500);
                }, function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).slideUp(500);
                });
//
//STICKY HEADER MENU 
// $(".navbar").sticky({topSpacing:0,zIndex:100});
// ===== Scroll to Top ==== 
                $(window).scroll(function () {
                    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                        $('#return-to-top').fadeIn(200);    // Fade in the arrow
                    } else {
                        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                    }
                });
                $('#return-to-top').click(function () {      // When arrow is clicked
                    $('body,html').animate({
                        scrollTop: 0                       // Scroll to top of body
                    }, 500);
                });

               $('.zoom-image').hover(function(){
                   
                  $(this).find(".img").removeClass("cjb-remove-grow").addClass('cjb-grow');
                }, function() {
                  $(this).find(".img").addClass("cjb-remove-grow").removeClass('cjb-grow');
                });
                
                @yield("script")
   
            })(jQuery);

        </script>