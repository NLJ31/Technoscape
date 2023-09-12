// Highlight
let highlightSwiper = new Swiper(".highlightSwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    rewind: "true",
    coverflowEffect: {
        rotate: 50,
        stretch: 200,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: "#highlight-swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: "#highlight-swiper-button-next",
        prevEl: "#highlight-swiper-button-prev",
    },
});

$('#highlight-swiper-pagination [aria-label="Go to slide 3"]').click();
let highlightInterval = setInterval(() => {
    $('#highlight-swiper-button-next').click();
}, 5000);



// Speaker
let speakerSwiper = new Swiper(".speakerSwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    rewind: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: "#speaker-swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: "#speaker-swiper-button-next",
        prevEl: "#speaker-swiper-button-prev",
    },
});

$('#speaker-swiper-pagination [aria-label="Go to slide 3"]').click();
let speakerInterval = setInterval(() => {
    $('#speaker-swiper-button-next').click();
}, 5000);


// Navbar Desktop
var lastScrollTop = 0;
$(window).scroll(() => {
    let scrollTop = $(window).scrollTop();
    if ($(window).width() >= 1024) {
        if (scrollTop > lastScrollTop) {
            $("#web-nav").slideUp();
        } else {
            $("#web-nav").slideDown();
        }
    } else {
        if (scrollTop > lastScrollTop) {
            $("#mob-nav").slideUp();
        } else {
            $("#mob-nav").slideDown();
        }
    }
    lastScrollTop = scrollTop;
});

$(document).ready(function () {
    // Navbar Mobile
    $("#navToggler").click(() => {
        $("#navMobile").slideToggle("slow");
    });
    $("#xButtonNav").click(() => {
        $("#navMobile").slideToggle("slow");
    });
});

// Timeline
let currentTimelineDay = 1;
$(".tc-timeline-tab").click(function () {
    $(".tc-timeline-tab").removeClass("tc-timeline-tab-active");
    $(this).addClass("tc-timeline-tab-active");

    if ($(this).attr("id") === "timeline-tab-day-1") {
        if (currentTimelineDay != 1) {
            currentTimelineDay = 1;
            $(".tc-timeline-tab").addClass("pointer-events-none");
            $(".tc-timeline-content").fadeOut();
            setTimeout(() => {
                $("#timeline-content-day-1").fadeIn();
                $(".tc-timeline-tab").removeClass("pointer-events-none");
            }, 350);
        }
    } else if ($(this).attr("id") === "timeline-tab-day-2") {
        if (currentTimelineDay != 2) {
            currentTimelineDay = 2;
            $(".tc-timeline-tab").addClass("pointer-events-none");
            $(".tc-timeline-content").fadeOut();
            setTimeout(() => {
                $("#timeline-content-day-2").fadeIn();
                $(".tc-timeline-tab").removeClass("pointer-events-none");
            }, 350);
        }
    } else {
        if (currentTimelineDay != 3) {
            currentTimelineDay = 3;
            $(".tc-timeline-tab").addClass("pointer-events-none");
            $(".tc-timeline-content").fadeOut();
            setTimeout(() => {
                $("#timeline-content-day-3").fadeIn();
                $(".tc-timeline-tab").removeClass("pointer-events-none");
            }, 350);
        }
    }
});

// FAQ
function openFaq(faqNumber) {
    // let faqQuestion = $('[data-faq-question="' + faqNumber + '"]');
    let faqAnswer = $('[data-faq-answer="' + faqNumber + '"]');
    let faqArrow = $('[data-faq-arrow="' + faqNumber + '"]');

    if (faqAnswer.is(":visible")) {
        faqAnswer.slideUp();
        // faqQuestion.removeClass("bg-[100%_0]");
        $(".tc-faq-arrow").removeClass("rotate-180");
    } else {
        $(".tc-faq-question").removeClass("bg-[100%_0]");
        $(".tc-faq-answer").slideUp();
        $(".tc-faq-arrow").removeClass("rotate-180");

        faqAnswer.slideDown();
        // faqQuestion.addClass("bg-[100%_0]");
        faqArrow.addClass("rotate-180");
    }
}

// media partner
$(document).ready(function () {
    new Splide(".top", {
        type: "loop",
        drag: false,
        perPage: 5,
        arrows: false,
        pagination: false,
        direction: "rtl",
        gap: "1rem",
        autoScroll: {
            speed: 0.1,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    }).mount(window.splide.Extensions);

    new Splide(".bot", {
        type: "loop",
        drag: false,
        perPage: 5,
        arrows: false,
        pagination: false,
        direction: "ltr",
        gap: "1rem",
        autoScroll: {
            speed: 0.1,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    }).mount(window.splide.Extensions);
});

// Share to friends
let shareLinkTimeout;
function shareLink(socialMedia, element){
  navigator.clipboard.writeText(element.dataset.link);
  $('.tc-share-tooltip').fadeOut();

   if (shareLinkTimeout) {
    clearTimeout(shareLinkTimeout);
  }

  $('#'+ socialMedia + '-tooltip').fadeIn();
  shareLinkTimeout = setTimeout(() => {
    $('#'+ socialMedia + '-tooltip').fadeOut();
  }, 2000);
}

// Media Partner
$(document).ready(function () {
    new Splide(".top", {
        type: "loop",
        drag: false,
        perPage: 5,
        arrows: false,
        pagination: false,
        direction: "rtl",
        gap: "1rem",
        autoScroll: {
            speed: 1,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    }).mount(window.splide.Extensions);

    new Splide(".bot", {
        type: "loop",
        drag: false,
        perPage: 5,
        arrows: false,
        pagination: false,
        direction: "ltr",
        gap: "1rem",
        autoScroll: {
            speed: 1,
            pauseOnHover: false,
            pauseOnFocus: false,
        },
    }).mount(window.splide.Extensions);
});

//subscribe
$("form input").on("keypress", function (e) {
    if (e.keyCode == 13) {
        $("#subscribe").click();
        e.preventDefault();
    }
});

$("#subscribe").off("dblclick");

$("#subscribe").on("click", () => {
    console.log("test");
    if (!$("#input-email").val()) {
        alert("Silakan masukkan alamat email Anda!");
        console.log("test");
    } else {
        const regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        const validateEmail = regex.test($("#input-email").val());
        if (!validateEmail) {
            alert("Alamat email yang Anda masukkan tidak valid!");
        } else {
            (async () => {
                let Email = {
                    Email: document.getElementById("input-email").value,
                };

                await fetch("/api/store-email", {
                    method: "POST",
                    body: JSON.stringify(Email),
                    headers: {
                        "Content-type":
                            "application/json; image/png; charset=UTF-8",
                    },
                }).then((res) => {
                    res.json().then((data) => {
                        if (data.code == 200) {
                            alert(
                                "Email berhasil dikirim! Kami akan memberikan update TechnoScape 2023 kepadamu!"
                            );
                        } else if (data.code == 400) {
                            alert("Alamat email yang Anda masukkan sudah ada!");
                        }
                    });
                });
            })();

            return;
        }
    }
});
