$(document).ready(function () {

    $('.give_feedback').click(function () {
        $('.submit_feedback')
            .attr('data-type', $(this).attr('data-type'))
            .attr('data-id', $(this).attr('data-id'))
            .attr('data-user-id', $(this).attr('data-user-id'));
        feedback.GetObjectData(
            $(this).attr('data-type'),
            $(this).attr('data-id'),
            $(this).attr('data-user-id')
        );
    });
    $('.submit_feedback').click(function () {
        feedback.SaveFeedback($(this).attr('data-user-id'), $(this).attr('data-id'), $('.comment_val').val(), $('.status_val:checked').val(),$(this).attr('data-type'));
    });

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
    GetObjectData: function (type, id, user_id) {
        var data = {};
        data.type = type;
        data.behavioral_id = id;
        data.user_id = user_id;
        $.ajax({
            type: "POST",
            url: "/ajax/get-object-data-by-type-by-id",  //GetObjectDataByTypeById
            data: data,
            success: function (res) {
                if (res) {
                    $('.popup-layer .request-to img').attr('src','/users/'+res.avatar);
                    $('.popup-layer .request-to strong').html(res.first_name +' '+ res.last_name);
                    $('.popup-layer .request-to .request-date .date').html(res.date);
                    $('.popup-layer .description').html(res.description);
                    $('.popup-layer .comment').html(res.user_comment);
                }
            }
        });
    },
    // $post['user_id'],
    // $post['behavioral_id'],
    // $post['comment'],
    // $post['status']
    SaveFeedback: function (user_id, id, comment, status, type) {
        var data = {};
        data.type = type;
        data.id = id;
        data.user_id = user_id;
        data.comment = comment;
        data.status = status;
        $.ajax({
            type: "POST",
            url: "/ajax/save-feedback",  //GetObjectDataByTypeById
            data: data,
            success: function (res) {
                if (res) {
                    $(".popup-layer").removeClass("active");
                    location.reload();
                }
            }
        });
    }
}