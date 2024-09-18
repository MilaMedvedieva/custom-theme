(function ($, root, undefined) {

    $(document).ready(function () {

        function btnMenu(){
            let hamburger = $(".hamburger");
            let mobileMenu = $(".menu-mobile");
            let body = $("body");
            if (hamburger.length > 0) {
                hamburger.click(function() {
                    $(this).toggleClass('is-active');
                    mobileMenu.toggleClass('is-open');
                    body.toggleClass('overflow-hidden');
                });
            }
        }
        btnMenu();
    });
})(jQuery);

