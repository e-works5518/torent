$(document).ready(function () {
    $('#years').change(function () {
        document.location.replace('/annual/' + $(this).val());
    })
})