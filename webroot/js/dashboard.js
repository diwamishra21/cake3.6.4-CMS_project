
var increment = 1;
var dashboard = {
    sessionCounter : 0,
    graph_show : false,

    toggleLogistics : function () {
        $("#joinee-details-outer").toggleClass("hidden");
        $("#logistics_arrangements").toggleClass("hidden");
    },

    toggle15DayChecklist : function () {
        $("#joinee-details-outer").toggleClass("hidden");
        $("#15_day_checklist").toggleClass("hidden");
    },

    toggle45DayMeeting : function () {
        $("#joinee-details-outer").toggleClass("hidden");
        $("#bhr_45_day_meeting").toggleClass("hidden");
    },

    toggle90dayMeeting : function () {
        $("#joinee-details-outer").toggleClass("hidden");
        $("#bhr_90_day_meeting").toggleClass("hidden");
    },

    toggleConfirmationStatus : function () {
        $("#joinee-details-outer").toggleClass("hidden");
        $("#confirmation_status").toggleClass("hidden");
    },

    panelCheckboxToggle : function (elem) {
        $(elem).find("input").prop("checked",!$(elem).find(".checkbox").prop("checked"));
    },

    toggleSelectAllCheckbox : function (elem) {
        $("input[name='select_individual']").prop("checked",$(elem).prop("checked"));
    },

    supervisorMonthlyFeedback : function () {
        $("#interval_feedback_outer").toggleClass("hidden");
        $("#supervisor_monthly_feedback").toggleClass("hidden");
    },

    toggleBHRBiAnnualFeedback : function () {
        $("#interval_feedback_outer").toggleClass("hidden");
        $("#BHR_Bi_annual_feedback").toggleClass("hidden");
    },

    toggleBHRAnnualFeedback : function () {
        $("#interval_feedback_outer").toggleClass("hidden");
        $("#BHR_annual_feedback").toggleClass("hidden");
    },
 
    roadmapSessionAdd : function () {
        //console.log("div id-"+increment);
        increment++;
	var str = "<br><div class='panel panel-default' id='panel_id_"+increment+"'><div class='panel-body'><button id = 'panel_id_button_"+increment+"' onclick='closediv("+increment+");' style='position: relative;float: right;background: red;color: white;top: -10px;right: -10px;'>X</button><div class='row'><div class='col-md-12 witnessRow_"+increment+"'><div class='col-md-3'><div class='form-group' id="+increment+"><label for='bu_name'>Business Unit <span style='color: red'> * </span></label><select required class='form-control bu_name_"+increment+"' id='bu_name_"+increment+"' name='bu_name[]' onchange='getdepartment("+increment+", this);'><option>Select</option></select></div></div><div class='col-md-3'><div class='form-group' id="+increment+"><label for='dept'>Department <span style='color: red'> * </span></label><select required class='form-control dept_"+increment+"' onchange='getsubdepartment("+increment+", this);' id='dept_"+increment+"' name='dept[]'><option value=''>Select</option> </select></div></div><div class='col-md-3'><div class='form-group' id="+increment+"><label for='sub_dept'>Sub Department <span style='color: red'> * </span></label><select required class='form-control sub_dept_"+increment+"' name= 'sub_dept[]' id='sub_dept_"+increment+"' onchange='getmeetingwithdata("+increment+", this);'> <option value=''>Select</option></select></div></div><div class='col-md-3'><div class='form-group'><label for='meeting_with'>Meeting With <span style='color: red'> * </span></label><select class='form-control user_id_"+increment+"' id='user_id_"+increment+"' name='user_id[]'><option value=''>Select</option></select></div></div></div><div class='col-md-3'><div class='form-group'><label for='note'>Note</label><input class='form-control' id='note' name='note[]'></div></div><div class='col-md-9'><div class='row'><div class='col-md-4'><div class='form-group'><label for='session_meeting_date'>Date <span style='color: red'> * </span></label><input required type='date' class='form-control' id='session_meeting_date' name='session_date[]'></div></div><div class='col-md-3'><div class='form-group' id="+increment+"><label for='ssession_meeting_from'>From <span style='color: red'> * </span></label><input required type='time' class='form-control' onchange='getmeetingduration("+increment+", this);' id='start_time_"+increment+"' name='start_time[]'></div></div><div class='col-md-3'><div class='form-group' id="+increment+"><label for='session_meeting_to'>To <span style='color: red'> * </span></label><input required type='time' class='form-control' id='end_time_"+increment+"' name='end_time[]' onchange='getmeetingduration("+increment+", this);'></div></div><div class='col-md-2'><div class='form-group'><label for='session_meeting_time'>Duration</label><input disabled type='text' class='form-control' name='duration_0' id='duration_"+increment+"'></div></div></div></div></div></div></div></div>";
        $("#session_blocks").append(str);
    }
};