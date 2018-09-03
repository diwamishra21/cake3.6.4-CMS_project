$(document).ready(function () {
    $('.show_user').click(function () {
        var key = $(this).attr('data-key');
        showFeedbackData(key);
        showUserData(key);
        showRmapData(key);

    });
    $('#add-road-map').click(function () {
        var selR = [];
        var uKey = $(this).attr('data-key');
        $('.rmap-recmnd:checkbox:checked').each(function (i, u) {
            selR.push($(u).val());
        });
        if (selR.length < 1) {
            alert('Please select roadmap !');
            return false;
        }
        $.ajax({
            url: webroot + 'supervisor/saveRmap/',
            data: {sel: selR, key: uKey},
            method: 'POST'
        }).done(function () {
            showRmapData(uKey);
        });

    });
    $(document).on('click', '.info-sec', function () {
        var rel = $(this).attr('data-rel');
        $("#interval_feedback_outer").addClass("hidden");
        $('#detail-sec-' + rel).removeClass("hidden");
    });
    $(document).on('click', '.goback-feedback', function () {
        var rel = $(this).attr('data-rel');
        $("#interval_feedback_outer").removeClass("hidden");
        $('#detail-sec-' + rel).addClass("hidden");
    });
    $(document).on('mouseover', '.star-rate', function () {
        var star = $(this);
        var curInd = star.parent().index();
        var root = star.parent().parent();
        var rt = star.parent().parent().attr('data-rate');
        rt = parseInt(rt);
        if (star.hasClass('fa-star')) {
            rt = curInd;
            root.find('span:eq(' + (curInd) + ')').find('i').addClass('fa-star-o').removeClass('fa-star');
        } else if (star.hasClass('fa-star-o')) {
            rt = curInd + 1;
            root.find('span:eq(' + (curInd) + ')').find('i').addClass('fa-star').removeClass('fa-star-o');
        }
        root.find('span:lt(' + (curInd) + ')').find('i').addClass('fa-star').removeClass('fa-star-o');
        root.find('span:gt(' + (curInd) + ')').find('i').addClass('fa-star-o').removeClass('fa-star');
        star.parent().parent().attr('data-rate', rt);
        if (rt < 1) {
            tr = 0;
        }
        root.siblings('.rate').val(rt);
        star.parent().parent().attr('data-rate', rt);
    });

    $(document).on('click', '.save-feedback', function () {
        var sBtn = $(this);
        var fdata = sBtn.parent().parent().parent('.feedback-form').serialize();
        var key = $(this).attr('data-key');
        sBtn.hide();
        $.ajax({
            url: webroot + 'supervisor/feedbackResponse/',
            data: {fdata},
            method: 'POST'
        }).done(function () {
            showFeedbackData(key);
        });
    });

});
function showUserData(key) {
    $.ajax({
        url: webroot + 'supervisor/getJoinee/' + key

    }).done(function (data) {
        if (typeof (data.id) == undefined) {
            alert('error occurred !');
            return false;
        }
        data = $.parseJSON(data);
        //console.log(data);
        $('.j-name-html').html(data.first_name + " " + data.last_name);
        $('.j-doj-html').html(data.doj);
        $('.j-emp_id-html').html(data.emp_id);
        $('#j-emp_email').html(data.email);
        $('#j-business').html(data.businees_unit);
        $('#j-dept').html(data.department);
        $('#designation').html(data.designation);
        $('#j-city').html(data.city);
        $('#j-state').html(data.state);
        $('#add-road-map').attr('data-key', data.id);
		$('#userid').val(data.id);
		
    });
}

function showRmapData(key) {
    $.ajax({
        url: webroot + 'supervisor/getRMapData/' + key

    }).done(function (data) {

        $('#rmap-section').html(data);
    });
}

function showFeedbackData(key) {
    $.ajax({
        url: webroot + 'supervisor/getFeedbackData/' + key

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