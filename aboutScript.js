$(document).ready(function () {
    console.log('loaded about page');


    $(document).scroll(function () {
        var top_of_tech_element = $(techHeader).offset().top;
        var bottom_of_tech_element = $(techHeader).offset().top + $(techHeader).outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();
        var top_of_responsive_element = $(responsiveDesign).offset().top;
        var bottom_of_responsive_element = $(responsiveDesign).offset().top + $(responsiveDesign).outerHeight();

        if ((bottom_of_screen > top_of_tech_element) && (top_of_screen < bottom_of_tech_element)) {
            console.log('tech header showing');
            $(techHeader).addClass("tech-active").removeClass("tech-not-active")
            $(".table-row-not-active1").addClass("table-row-active1").removeClass("table-row-not-active1")
            $(".table-row-not-active2").addClass("table-row-active2").removeClass("table-row-not-active2")
        }
        if ((bottom_of_screen > top_of_responsive_element) && (top_of_screen < bottom_of_responsive_element)) {
            $(responsiveDesign).addClass("responsive-design-active")
        }
    })







    // $(document).scroll(function () {
    //     var scrollVal = $(document).scrollTop();
    //     console.log(scrollVal);
    //     if ($(document).scrollTop() > 280) {
    //         $(techHeader).addClass("tech-active").removeClass("tech-not-active")
    //         $(".table-row-not-active1").addClass("table-row-active1").removeClass("table-row-not-active1")
    //         $(".table-row-not-active2").addClass("table-row-active2").removeClass("table-row-not-active2")
    //     }
    //     if ($(document).scrollTop() > 550) {
    //         $(responsiveDesign).addClass("responsive-design-active").removeClass("responsive-design-not-active")
    //     }
    //     if ($(document).scrollTop() > 750) {
    //         $(seo).addClass("active-img")
    //         $(para).addClass("p-active").removeClass("p-not-active")
    //     }
    // })










})