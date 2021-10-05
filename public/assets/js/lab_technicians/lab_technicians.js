(()=>{"use strict";var e=$("#labTechniciansTable").DataTable({processing:!0,serverSide:!0,order:[[1,"asc"]],ajax:{url:labTechnicianUrl,data:function(e){e.status=$("#filter_status").find("option:selected").val()}},columnDefs:[{targets:[0,5],className:"text-center",width:"5%",orderable:!1},{targets:[6],className:"text-center",width:"8%",orderable:!1},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(e){return'<img src="'.concat(e.image_url,'" class="user-img">')},name:"user.last_name"},{data:function(e){return'<a href="'+(labTechnicianUrl+"/"+e.id)+'">'+e.user.full_name+"</a>"},name:"user.first_name"},{data:"user.designation",name:"user.designation"},{data:"user.email",name:"user.email"},{data:function(e){return isEmpty(e.user.phone)?"N/A":e.user.phone},name:"user.phone"},{data:function(e){var a=0==e.user.status?"":"checked",t=[{id:e.id,checked:a}];return prepareTemplateRender("#labTechnicianStatusTemplate",t)},name:"user.status"},{data:function(e){var a=labTechnicianUrl+"/"+e.id,t=[{id:e.id,url:a+"/edit"}];return prepareTemplateRender("#labTechnicianActionTemplate",t)},name:"id"}],fnInitComplete:function(){$("#filter_status").change((function(){$("#labTechniciansTable").DataTable().ajax.reload(null,!0)}))}});$(document).on("click",".delete-btn",(function(e){var a=$(e.currentTarget).data("id");deleteItem(labTechnicianUrl+"/"+a,"#labTechniciansTable","Lab Technician")})),$(document).on("change",".status",(function(e){var a=$(e.currentTarget).data("id");updateStatus(a)})),window.updateStatus=function(a){$.ajax({url:labTechnicianUrl+"/"+ +a+"/active-deactive",method:"post",cache:!1,success:function(a){a.success&&e.ajax.reload(null,!1)}})}})();