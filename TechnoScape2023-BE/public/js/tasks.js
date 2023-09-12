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

    //Tasks Verified Join Group
    // TC
    $("#join-group-technoconference").click(function () {
        $("#popup-technoconference").fadeIn();
    });

    $("#popup-close-tc").click(function () {
        $("#popup-technoconference").fadeOut();
    });

    $("#tc-group-a").show();
    $("#tc-group-b").hide();
    $("#tc-group-c").hide();

    $(".menu-tc a").on("click", function () {
        $(".menu-tc li").removeClass("active");
        $(this).parent("li").addClass("active");

        $(".tc-join-group").hide();

        $($(this).attr("href")).show();

        return false;
    });

    // TA
    $("#join-group-technoacademy").click(function () {
        $("#popup-technoacademy").fadeIn();
    });

    $("#popup-close-ta").click(function () {
        $("#popup-technoacademy").fadeOut();
    });

    $("#ta-group-a").show();
    $("#ta-group-b").hide();
    $("#ta-group-c").hide();

    $(".menu-ta a").on("click", function () {
        $(".menu-ta li").removeClass("active");
        $(this).parent("li").addClass("active");

        $(".ta-join-group").hide();

        $($(this).attr("href")).show();

        return false;
    });

    // Hackathon
    $("#join-group-hackathon").click(function () {
        $("#popup-hackathon").fadeIn();
    });

    $("#popup-close-hackathon").click(function () {
        $("#popup-hackathon").fadeOut();
    });

    $("#hackathon-group-a").show();
    $("#hackathon-group-b").hide();
    $("#hackathon-group-c").hide();

    $(".menu-hackathon a").on("click", function () {
        $(".menu-hackathon li").removeClass("active");
        $(this).parent("li").addClass("active");

        $(".hackathon-join-group").hide();

        $($(this).attr("href")).show();

        return false;
    });

});

//calendar
const date = new Date();

const renderCalendar = () => {
    date.setDate(1);

    const monthDays = document.querySelector(".days");

    const lastDay = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDate();

    const prevLastDay = new Date(
        date.getFullYear(),
        date.getMonth(),
        0
    ).getDate();

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDay();

    const nextDays = 7 - lastDayIndex - 1;

    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    document.querySelector(".date h1").innerHTML = months[date.getMonth()];

    //   document.querySelector(".date p").innerHTML = new Date().toDateString();

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        if (
            i === new Date().getDate() &&
            date.getMonth() === new Date().getMonth()
        ) {
            days += `<div class="today">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
        }
    }

    monthDays.innerHTML = days;
    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
    }
};

document.querySelector(".prev").addEventListener("click", () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
});

renderCalendar();
