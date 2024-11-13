$(document).ready(function () {
    let isMenuOpen = false;

    // Mobile menu toggle
    $('.mobile-menu-button').on('click', function () {
        isMenuOpen = !isMenuOpen;
        $(this).toggleClass('active');
        $('.nav').toggleClass('active');
        $('body').toggleClass('menu-open');

        // Reset all submenus when closing the menu
        if (!isMenuOpen) {
            $('.mega-menu').removeClass('active');
            $('.arrow').removeClass('active');
        }
    });

    // Handle nav button click on mobile
    $('.nav-button').on('click', function (e) {
        if ($(window).width() <= 1024) {
            e.preventDefault();
            const megaMenu = $(this).closest('.nav-item').find('.mega-menu');
            const arrow = $(this).find('.arrow');

            // Close other open menus
            $('.mega-menu').not(megaMenu).removeClass('active');
            $('.arrow').not(arrow).removeClass('active');

            // Toggle current menu
            megaMenu.toggleClass('active');
            arrow.toggleClass('active');
        }
    });


    // Handle window resize
    $(window).on('resize', function () {
        if ($(window).width() > 1024) {
            // Reset mobile menu states
            isMenuOpen = false;
            $('.nav').removeClass('active');
            $('.mobile-menu-button').removeClass('active');
            $('body').removeClass('menu-open');
            $('.mega-menu').removeClass('active');
            $('.arrow').removeClass('active');
        }
    });

    // Close menu when clicking outside
    $(document).on('click', function (e) {
        if (
            isMenuOpen &&
            !$(e.target).closest('.nav').length &&
            !$(e.target).closest('.mobile-menu-button').length
        ) {
            isMenuOpen = false;
            $('.nav').removeClass('active');
            $('.mobile-menu-button').removeClass('active');
            $('body').removeClass('menu-open');
            $('.mega-menu').removeClass('active');
            $('.arrow').removeClass('active');
        }
    });
});