$(document).ready(function () {
    $(document).on('click', '.edit-d', function () {
        EditIconState($(this));
    })
    $(document).on('click', '.fa-save', function () {
        SaveIconState($(this));
        $("textarea").each(function (textarea) {
            $(this).height($(this)[0].scrollHeight - 20);
        });
    })

    $("textarea").each(function (textarea) {
        $(this).height($(this)[0].scrollHeight - 20);
    });

})

function EditIconState(ob) {
    ob.removeClass('fa-pencil-alt').addClass('fa-save').attr('title', 'Save');
    ob.closest('.has-border').find('textarea').addClass('active-text').prop('readonly', false);
}

function SaveIconState(ob) {
    ob.removeClass('fa-save').addClass('fa-pencil-alt').attr('title', 'Edit');
    ob.closest('.has-border').find('textarea').removeClass('active-text').prop('readonly', true);

}