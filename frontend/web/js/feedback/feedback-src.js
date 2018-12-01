$(document).ready(function () {

    $('.give_feedback').click(function () {
        feedback.GetObjectData(
            $(this).attr('data-type'),
            $(this).attr('data-id'),
            $(this).attr('data-user-id')
        );
    })


    $(".requests-tab-title li a").click(function () {
        $(".requests-tab-title li a, .requests-list").toggleClass("active");
    });

    $(".give-feedback-btn").click(function () {
        $(".popup-layer").addClass("active");
    });

    $(".popup-close").click(function () {
        $(".popup-layer").removeClass("active");
    });
});

var feedback = {
    GetObjectData: function (type, behavioral_id, user_id) {
        var data = {};
        data.type = type;
        data.behavioral_id = behavioral_id;
        data.user_id = user_id;
        $.ajax({
            type: "POST",
            url: "/ajax/get-object-data-by-type-by-id",  //GetObjectDataByTypeById
            data: data,
            success: function (res) {
                if (res) {
                    $('.popup-layer .request-to img').attr('ddd');
                    $('.popup-layer .request-to strong').html(res.username);
                    $('.popup-layer .request-to .request-date .date').html(res.username);
                }
            }
        });
    }
}