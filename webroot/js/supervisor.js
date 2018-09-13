$(document).ready(function () {
    $('.show_user').click(function () {
        var key = $(this).attr('data-key');
        showFeedbackData(key);
        showUserData(key);
        showRmapData(key);
        showLogisticData(key);
    });
//    $('#add-road-map').click(function () {
//        var selR = [];
//        var uKey = $(this).attr('data-key');
//        $('.rmap-recmnd:checkbox:checked').each(function (i, u) {
//            selR.push($(u).val());
//        });
//        if (selR.length < 1) {
//            alert('Please select roadmap !');
//            return false;
//        }
//        $.ajax({
//            url: webroot + 'supervisor/saveRmap/',
//            data: {sel: selR, key: uKey},
//            method: 'POST'
//        }).done(function () {
//            showRmapData(uKey);
//        });
//
//    });


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
        /// console.log(data);
        $('.j-name-html').html(data.first_name + " " + data.last_name);
        $('.j-doj-html').html(data.doj);
        $('.j-emp_id-html').html(data.emp_id);
        $('#j-emp_email').html(data.email);
        $('#j-business').html(data.business_unit.title);
        $('#department').html(data.department.title);
        $('#j-subd').html(data.sub_depart.title);
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
    $('#f-info-sec').html('');
    $('#f-details-sec').html('');
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
function showLogisticData(key) {
    $.ajax({
        url: webroot + 'supervisor/getLogisticData/' + key

    }).done(function (data) {
        $('.logstmsg').remove();
        $('.log_check').show();
        var assigned = 0;
        var recvd = 0;
        data = $.parseJSON(data);
        //console.log(data.length);
        if (data.length > 0) {
            $(data).each(function (i, u) {
                if (u.logistic.id != undefined) {
                    var ik = u.logistic.id;
 //console.log(ik);
                    assigned++;
                    if (u.r_status == 1) {
                        recvd++;                        
                        $('#logistic_id_' + ik).parent().append('<p class="margin-bottom-0 text-green logstmsg">Received</p>');
                        $('#logistic_id_' + ik).hide();
                    } else if (u.r_status == 0) {
                        $('#logistic_id_' + ik).hide();
                        $('#logistic_id_' + ik).parent().append('<p class="margin-bottom-0 text-orange logstmsg">In Process</p>');
                    }
                }
            });
        }
        var stHtml = '<span class="text-green">' + recvd + '</span>/' + '<span class="text-orange">' + assigned + '</span>';
        $('#logistic_count').html(stHtml);
 $('.logistic_date').html(data[0].time_created.substring(0,10));
    });
}