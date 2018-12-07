$(document).ready(function () {


    $(".requests-tab-title .tab-f").click(function () {
        $(".requests-tab-title .tab-f, .requests-list").toggleClass("active");
    });

    $("#add-conversation").click(function () {
        $(".popup-layer").addClass("active");
    });

    $(".popup-close").click(function () {
        $(".popup-layer").removeClass("active");
    });
});

