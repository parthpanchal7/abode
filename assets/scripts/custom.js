$(document).ready(function(){
    $(window).on('scroll', function(){
        var scrollTop = $(this).scrollTop();
        
        if(scrollTop > 200) {
            $('.main-header').addClass('sticky-header');
        }

        else {
            $('.main-header').removeClass('sticky-header');
        }
        
    });

    $('.menu-toggle').click(function() {
        $(this).toggleClass('active');
        $('.main-menu-wrap').toggleClass('menu-collapsed');
        $('html').toggleClass('overflow-hidden');
    });

    $('li.has-submenu').each(function() { 
        $(this).append('<span class="submenu-toggler"><i class="fas fa-chevron-down"></i></span>');
    });

    if ($(window).width() < 768) {
        // Delegate the click event to all `.submenu-toggler` elements
        $(document).on('click', '.submenu-toggler', function(e) {
          e.preventDefault(); // Prevent default action (if it's a link)
          e.stopPropagation(); // Stop event from bubbling up
      
          // Find the closest .has-submenu and toggle its submenu
          let parentItem = $(this).closest('.has-submenu');
      
          // Slide toggle the submenu and toggle 'active' class on parent .has-submenu
          parentItem.toggleClass('active').children('.submenu').slideToggle('medium');
      
          // Close other sibling submenus at the same level
          parentItem.siblings('.has-submenu').removeClass('active').children('.submenu').slideUp();
        });
      
        // Prevent clicks on submenu links from affecting open submenus
        $(document).on('click', '.submenu a', function(e) {
          e.stopPropagation(); // Prevent submenu link clicks from bubbling up
        });
      }
      
      $('.clients-logos').slick({
        slidesToShow: 6,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
      });

      $(".services-tab-container .tab-content").hide();
      $(".services-tab-container .tab-content:first").show();
  
      // Add active class to the first tab
      $(".services-tab-header li:first-child a").addClass("active");
  
      // When a tab is clicked
      $(".services-tab-header a").click(function (e) {
          e.preventDefault();
  
          // Remove active class from all tabs and add to clicked tab
          $(".services-tab-header a").removeClass("active");
          $(this).addClass("active");
  
          // Hide all tab content and show the selected tab content
          $(".services-tab-container .tab-content").hide();
          $($(this).attr("href")).show();
      });

      $('.industries-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
      });

      $('.home-page-testimonial-list').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
      });
      $('.blogs-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
      });


      $(`.right-part .single-menu[data-menu-title="data-consulting"]`).show();
      $('.left-part .single-menu').on('mouseenter', function() {
        
        const title = $(this).data('menu-title');
        $('.right-part .single-menu').hide();
        $(`.right-part .single-menu[data-menu-title="${title}"]`).show();
    });

    $('.faq-question').on('click', function () {
      // Toggle the answer
      $(this).next('.faq-answer').slideToggle(200);

      // Close other answers
      $('.faq-answer').not($(this).next()).slideUp(200);

      // Optionally toggle active class for styling
      $('.faq-question').not($(this)).removeClass('active');
      $(this).toggleClass('active');
  });
});