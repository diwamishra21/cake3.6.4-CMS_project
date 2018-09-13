function displayIdBasedData(id){
    $.ajax({
        url: webroot + 'Users/fetchDashboardPopup',
        method: 'POST',
        data: {id:id},
        success: function(data){
           var parsData = JSON.parse(data);
           var name = parsData[0].first_name + ' ' + parsData[0].last_name;
           var extract_date = parsData[0].doj.substring(0,10);
           var stringdate = new Date(extract_date);
           var date = stringdate.toLocaleDateString();
           $('#name').html(parsData[0].first_name + ' ' + parsData[0].last_name);
           $('#emp_id').html(parsData[0].emp_id);
           $('#business').html(parsData[0].businees_unit);
           $('#dept').html(parsData[0].department);
           $('#supervisor').html(parsData[0].supervisor_name);
           $('#business_hr').val(parsData[0].bhr_emp_id);
           $('#doj').html(date);
           $('#emp_email').html(parsData[0].email);
           $('#location').html(parsData[0].city);
           $('#sub_dept').html(parsData[0].sub_department);
           $('#designation').html(parsData[0].designation);
           
           //code for setting values Joinee Information Logistics Arrangements,15 Day Checklist,BHR 45,90 Day Meeting,Confirmation Status,interval feedback
           $('.joineeinformation_name').text(name);
           $('.joineeinformation_empid').text(parsData[0].emp_id);
           $('.joineeinformation_doj').text(date);

if( parsData[0].user_id === parsData[0].id){
			$('#pending').hide();
			$('#logistic_user_id').show();
		}
            else{
                            $('#pending').show();
			$('#logistic_user_id').hide();
}


        }
    });

 $.ajax({
        url: webroot + 'Users/userlogistic_data',
        method: 'POST',

        data: {'user_id':id
                },
        success: function(data){
       
     $('.logstmsg').remove();
        $('.log_check').show();
        var assigned = 0;
        var recvd = 0;
        data = $.parseJSON(data);
        console.log(data.length);
        if (data.length > 0) {
            $(data).each(function (i, u) {
                if (u.logistic.id != undefined) {
                    var ik = u.logistic.id;
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
}
});











} 
