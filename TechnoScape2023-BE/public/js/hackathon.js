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

//subscribe
$("form input").on("keypress", function (e) {
    if (e.keyCode == 13) {
        $("#subscribe").click();
        e.preventDefault();
    }
});

$("#subscribe").off("dblclick");

$("#subscribe").on("click", () => {
    if (!$("#input-email").val()) {
        alert("Silakan masukkan alamat email Anda!");
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

                await fetch("https://technoscape.id/api/subscription", {
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
