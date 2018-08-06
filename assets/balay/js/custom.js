// Cache selectors
$(document).on("scroll", onScroll);

$('.page-menu').click(function (e) {
    e.preventDefault();
    $(document).off("scroll");

    $('.page-menu').each(function () {
        $(this).removeClass('page-menu-active');
    })
    $(this).addClass('page-menu-active');

    var target = this.hash,
        menu = target;
    $target = $(target);
    $('html, body').stop().animate({
        'scrollTop': $target.offset().top+2
    }, 500, 'swing', function () {
        window.location.hash = target;
        $(document).on("scroll", onScroll);
    });
})

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    // console.log("scrolltop = "+scrollPos);
    $('.page-menu ').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        // console.log("element = "+refElement);
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $(this).removeClass("page-menu-active");
            currLink.addClass("page-menu-active");
        }
        else{
            currLink.removeClass("page-menu-active");
        }
    });
}