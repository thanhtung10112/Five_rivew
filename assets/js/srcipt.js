$(function() {

    // activeButton(".portfolio button:first-of-type");

    // $(".portfolio button").click(function(event) {
    //     $(".portfolio button").removeAttr("style");
    //     var data = $(this).attr("data");
    //     activeButton(this);
    //     if (data == undefined) {
    //         //show het
    //         $(".portfolio .row > div").show("slow");
    //     } else {

    //         $(".portfolio [data=" + data + "]").show("slow");
    //         // $(".portfolio .row > div").not("[data=" + data + "]").hide();
    //         $(".portfolio .row > div:not([data=" + data + "])").hide("slow");
    //         // var length = $(".portfolio .row > div").length;
    //         // alert(length);
    //     }

    // });


    $(window).scroll(function(event) {
        if ($(this).scrollTop()) { // > 1: true
            //se hien ra nut back to top
            $(".back-to-top").show("slow");
        } else {
            //tat no di
            $(".back-to-top").hide("slow");
        }

        // HIỆN MENU 
        if ($(this).scrollTop() >= $("#PORTFOLIO").offset().top - 5) {

            $("header nav").addClass('navbar-fixed-top');
            $("body").addClass('fixed-top');

        } else {

            $("header nav").removeClass('navbar-fixed-top');
            $("body").removeClass('fixed-top');
        }
    });

    $(".back-to-top").click(function(event) {
        //code here
        $("html").animate({
                scrollTop: 0
            },
            2000
        );

    });
    //Click trên menu, sẽ target đến id tương ứng
    // $('header nav ul li a').on('click', function(e) {
    //     e.preventDefault(); //ngăn chạn chạy đến vùng có id
    //     var target = this.hash; //#portfolio
    //     if (target) {
    //         $target = $(target);

    //         $('html, body').stop().animate({
    //             'scrollTop': $target.offset().top
    //         }, 500, 'swing', function() {
    //             window.location.hash = target; //#portfolio
    //         });
    //     }
    // });
})


function activeButton(selector) {
    $(".portfolio button").removeAttr('style');
    $(selector).css("background-color", "yellow");
}



// function show() {
//     var p = document.getElementById('pwd');
//     p.setAttribute('type', 'text');
// }

// function hide() {
//     var p = document.getElementById('pwd');
//     p.setAttribute('type', 'password');
// }

// var pwShown = 0;

// document.getElementById("eye").addEventListener("click", function() {
//     alert("asd");
//     if (pwShown == 0) {
//         pwShown = 1;
//         show();
//     } else {
//         pwShown = 0;
//         hide();
//     }
// }, false);