$(document).ready(function () {
    $("#accordion").click(function () {
        $(this).toggleClass("active");
        var panel = $(this).next();
        if (panel.is(":visible")) {
            panel.slideUp();
            $("#arrow").animate({ rotate: "0deg" });
        } else {
            panel.slideDown();
            $("#arrow").animate({ rotate: "180deg" });
        }
    });
});

const expandAnnouncement = (e) => {
    $(e).siblings(".content").slideToggle();
    $(e).children().children().eq(1).children().toggleClass("rotate-180");
}