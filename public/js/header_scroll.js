$(document).ready(function () {
    window.addEventListener("scroll", handleScroll);

    $("#ham_menu").click(function () {
        $("#ham_menu").toggleClass("ham_menu_active");
        $("body").toggleClass("no_scroll");
        $(".hm_menu").slideToggle(200);
        $(".hm_menu a").toggleClass("hm_menu_a_show");
    });
    /*
    $("#_bc_icon").click(function(){
        $("._bc_m").slideToggle(200);
    });
    */
});

var lastScrollPos = 0;

function handleScroll() {
    var currentScrollPos = $(window).scrollTop();
    //console.log("pos: "+scrollPos);
    if (currentScrollPos < 15) {
        $("header").removeClass("h_scroll");
    }
    else {
        if (currentScrollPos > lastScrollPos) {
            $("header").addClass("h_scroll");
        }
        else {
            $("header").removeClass("h_scroll");
        }
    }
    lastScrollPos = currentScrollPos;
}