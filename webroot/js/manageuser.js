$(document).ready(function () {
    //console.log("inside manageuser.js");
    $('.logistic_user_arrangements').click(function () {
        var key = $(this).attr('data-key');
        showFeedbackData(key);
        showFeedbackDataForUser(key);
    });
    $(document).on('click', '.info-sec', function () {
        var rel = $(this).attr('data-rel');
        $("#interval_feedback_outer").addClass("hidden");
        $('#detail-sec-' + rel).removeClass("hidden");
    });
    $(document).on('click', '.info-sec-emp', function () {
        var rel = $(this).attr('data-rel');
        $("#interval_feedback_outer").addClass("hidden");
        $('#detail-sec-' + rel).removeClass("hidden");
    });
    $(document).on('click', '.goback-feedback', function () {
        var rel = $(this).attr('data-rel');
        $("#interval_feedback_outer").removeClass("hidden");
        $('#detail-sec-' + rel).addClass("hidden");
    });
});



function showFeedbackData(key) {
    //console.log("inside showFeedbackData function");
    $('#f-info-sec').html('');
    $('#f-details-sec').html('');
    $.ajax({
        url: webroot + 'users/getFeedbackData/' + key

    }).done(function (data) {
        data = $.parseJSON(data);
        $('#f-info-sec,#f-details-sec').html('');
        $(data).each(function (i, u) {
            $('#f-info-sec').append(u.info);
            $('#f-details-sec').append(u.details);
        });
        $('#interval_feedback_outer').removeClass('hidden');
    });
}

function showFeedbackDataForUser(key) {
    //console.log("inside showFeedbackDataForUser function");
    $('#f-info-sec-emp').html('');
    $('#f-details-sec-emp').html('');
    $.ajax({
        url: webroot + 'users/getFeedbackDataForUser/' + key

    }).done(function (data) {
        data = $.parseJSON(data);
        $('#f-info-sec-emp,#f-details-sec-emp').html('');
        $(data).each(function (i, u) {
            $('#f-info-sec-emp').append(u.info);
            $('#f-details-sec-emp').append(u.details);
        });
        //$('#interval_feedback_outer').removeClass('hidden');
    });
}