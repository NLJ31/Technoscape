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

// Background Hero
$(document).ready(function () {
    const $background = $(".bg-hero");
    let xPosition = 0;
    let yPosition = 0;
    setInterval(function () {
        xPosition += 1;
        yPosition -= 1;
        $background.css("background-position", `${xPosition}px ${yPosition}px`);
    }, 10);
});

// Timeline
$(document).ready(function () {
    $("#timeline-technoconference").show();
    $("#timeline-technoacademy").hide();
    $("#timeline-hackathon").hide();

    $(".menu a").on("click", function () {
        $(".menu li").removeClass("active");
        $(this).parent("li").addClass("active");

        $(".timeline").hide();

        $($(this).attr("href")).show();

        return false;
    });
});

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

// Ask Us
$("form input").on("keypress", function (e) {
    if (e.keyCode == 13) {
        $("#submit").click();
        e.preventDefault();
    }
});

$("#submit").off("dblclick");

$("#submit").on("click", () => {
    // Nama Lengkap
    let isInputNameValidated = false;
    if (!$("#contact-name").val()) {
        $("#contact-name-validation").show();
        $("#contact-name-validation").text("Nama Anda tidak boleh kosong!");
        $("#contact-name").removeClass("border-none");
        isInputNameValidated = false;
    } else {
        $("#contact-name-validation").hide();
        $("#contact-name-validation").text("");
        $("#contact-name").addClass("border-none");
        isInputNameValidated = true;
    }

    // Email
     const regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
     const validateEmail = regex.test($("#contact-email").val());
     let isInputEmailValidated = false;
    if (!$("#contact-email").val()) {
        $("#contact-email-validation").show();
        $("#contact-email-validation").text("Email Anda tidak boleh kosong!");
        $("#contact-email").removeClass("border-none");
        isInputEmailValidated = false
    } else if (!validateEmail) {
        $("#contact-email-validation").show();
        $("#contact-email-validation").text("Email Anda tidak valid!");
        $("#contact-email").removeClass("border-none");
        isInputEmailValidated = false
    } else {
        $("#contact-email-validation").hide();
        $("#contact-email-validation").text("");
        $("#contact-email").addClass("border-none");
        isInputEmailValidated = true;
    }

    // Pesan
    let isInputMessageValidated = false;
    if (!$("#contact-message").val()) {
        $("#contact-message-validation").show();
        $("#contact-message-validation").text("Pesan Anda tidak boleh kosong!");
        $("#contact-message").removeClass("border-none");
        isInputMessageValidated = false;
    } else {
        $("#contact-message-validation").hide();
        $("#contact-message-validation").text("");
        $("#contact-message").addClass("border-none");
        isInputMessageValidated = true;
    }

    if (
        isInputNameValidated &&
        isInputEmailValidated &&
        isInputMessageValidated
    ) {
        (async () => {
            const name = document.getElementById("contact-name").value;
            const email = document.getElementById("contact-email").value;
            const message = document.getElementById("contact-message").value;
            const data = {
                name: name,
                email: email,
                message: message,
            };
            await fetch("/api/store-contact-us", {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-type":
                        "application/json; image/png; charset=UTF-8",
                },
            }).then((res) => {
                res.json().then((data) => {
                    if (data.code == 200) {
                        alert(
                            "Email berhasil dikirim! Kami akan segera memberikan balasan kepadamu!"
                        );
                    } else if (data.code == 400) {
                        alert("Silahkan coba kembali!");
                    }
                });
            });
        })();
    }
    return;
});

$("#ask-us-button-1").click(() => {
    $("#ask-us-modal").fadeIn();
});
$("#ask-us-button-2").click(() => {
    $("#ask-us-modal").fadeIn();
});
$("#close-ask-us-modal").click(() => {
    $("#ask-us-modal").fadeOut();
    $("#contact-name-validation").hide();
    $("#contact-name-validation").text("");
    $("#contact-name").addClass("border-none");
    $("#contact-email-validation").hide();
    $("#contact-email-validation").text("");
    $("#contact-email").addClass("border-none");
    $("#contact-message-validation").hide();
    $("#contact-message-validation").text("");
    $("#contact-message").addClass("border-none");
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
                            alert("Email berhasil dikirim! Kami akan memberikan update TechnoScape 2023 kepadamu!");
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
