var roleManagement = {
    roleManagementCheckbox : function (elem) {
        console.log($(elem).prop("checked"));
        if($(elem).prop("checked")) {
            $(elem).closest(".panel-body").find(".checkbox_add_edit, .checkbox_view").prop("checked",true);
        } else {
            $(elem).closest(".panel-body").find(".checkbox_add_edit, .checkbox_view").prop("checked",false);
        }
    }
};
$(document).ready(function(){
   $('#add-role-form').submit(function(){
      var name=$('#name').val();
      if(name==""){
          alert('Please enter name !');
          return false;
      }
   }); 
});