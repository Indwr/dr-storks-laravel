(()=>{"use strict";var e="#patientAdmissionsTbl",t=$(e).DataTable({processing:!0,serverSide:!0,order:[[3,"desc"]],ajax:{url:patientAdmissionsUrl,data:function(e){e.status=$("#filter_status").find("option:selected").val()}},columnDefs:[{targets:[0],className:"text-center",width:"10%"},{targets:[9],width:"8%",orderable:!1,className:"text-center"},{targets:[8],width:"5%",orderable:!1,className:"text-center"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(e){return'<a href="'+(patientAdmissionsUrl+"/"+e.id)+'">'+e.patient_admission_id+"</a>"},name:"patient_admission_id"},{data:function(e){return'<a href="'+(patientUrl+"/"+e.patient.id)+'">'+e.patient.user.full_name+"</a>"},name:"patient.user.first_name"},{data:function(e){return userRole?e.doctor.user.full_name:'<a href="'+(doctorUrl+"/"+e.doctor.id)+'">'+e.doctor.user.full_name+"</a>"},name:"doctor.user.first_name"},{data:function(e){return e},render:function(e){return null===e.admission_date?"N/A":moment(e.admission_date).format("Do MMM, Y h:mm A")},name:"admission_date"},{data:function(e){return e},render:function(e){return null===e.discharge_date?"N/A":moment(e.discharge_date).format("Do MMM, Y h:mm A")},name:"discharge_date"},{data:function(e){return isEmpty(e.package_id)?"N/A":'<a href="'+(packageUrl+"/"+e.package.id)+'">'+e.package.name+"</a>"},name:"package.name"},{data:function(e){return isEmpty(e.insurance_id)?"N/A":'<a href="'+(insuranceUrl+"/"+e.insurance.id)+'">'+e.insurance.name+"</a>"},name:"insurance.name"},{data:function(e){return isEmpty(e.policy_no)?"N/A":e.policy_no},name:"policy_no"},{data:function(e){var t=0==e.status?"":"checked",a=[{id:e.id,checked:t}];return prepareTemplateRender("#patientAdmissionStatusTemplate",a)},name:"status"},{data:function(e){var t=patientAdmissionsUrl+"/"+e.id,a=[{id:e.id,url:t+"/edit",viewUrl:t}];return prepareTemplateRender("#patientAdmissionActionTemplate",a)},name:"id"}],fnInitComplete:function(){$("#filter_status").change((function(){$(e).DataTable().ajax.reload(null,!0)}))}});$(document).on("click",".delete-btn",(function(t){var a=$(t.currentTarget).data("id");deleteItem(patientAdmissionsUrl+"/"+a,e,"Patient Admission")})),$(document).on("change",".status",(function(e){var t=$(e.currentTarget).data("id");updateStatus(t)})),window.updateStatus=function(e){$.ajax({url:patientAdmissionsUrl+"/"+ +e+"/active-deactive",method:"post",cache:!1,success:function(e){e.success&&t.ajax.reload(null,!1)}})}})();