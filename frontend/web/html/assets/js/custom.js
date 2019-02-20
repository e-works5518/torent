$(document).ready(function () {
    $(".requests-tab-title li a").click(function () {
        $(".requests-tab-title li a, .requests-list").toggleClass("active");
    });

    $(".give-feedback-btn").click(function () {
        $(".popup-layer").addClass("active");
    });

    $(".popup-close").click(function () {
        $(".popup-layer").removeClass("active");
    });

    $('.drop-down').click(function (e) {
        $('.logout').toggleClass('hide')
        e.stopPropagation()
    })
    $('body').click(function (e) {
        $('.logout').addClass('hide')
    })
});