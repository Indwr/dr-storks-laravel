(()=>{"use strict";var a="#patientAdmissionsTbl";$(a).DataTable({processing:!0,serverSide:!0,order:[[2,"desc"]],ajax:{url:patientAdmissionsUrl,data:function(a){a.status=$("#filter_status").find("option:selected").val()}},columnDefs:[{targets:[0],width:"10%",className:"text-center"},{targets:[8],width:"5%",orderable:!1,className:"text-center"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(a){return'<a href="'+(patientAdmissionsUrl+"/"+a.id)+'">'+a.patient_admission_id+"</a>"},name:"patient_admission_id"},{data:function(a){return'<a href="'+(patientUrl+"/"+a.patient.id)+'">'+a.patient.user.full_name+"</a>"},name:"patient.user.first_name"},{data:function(a){return a.doctor.user.full_name},name:"doctor.user.first_name"},{data:function(a){return a},render:function(a){return null===a.admission_date?"N/A":moment(a.admission_date).format("Do MMM, Y h:mm A")},name:"admission_date"},{data:function(a){return a},render:function(a){return null===a.discharge_date?"N/A":moment(a.discharge_date).format("Do MMM, Y h:mm A")},name:"discharge_date"},{data:function(a){return isEmpty(a.package_id)?"N/A":'<a href="'+(packageUrl+"/"+a.package.id)+'">'+a.package.name+"</a>"},name:"package.name"},{data:function(a){return isEmpty(a.insurance_id)?"N/A":'<a href="'+(insuranceUrl+"/"+a.insurance.id)+'">'+a.insurance.name+"</a>"},name:"insurance.name"},{data:function(a){return isEmpty(a.policy_no)?"N/A":a.policy_no},name:"policy_no"},{data:function(a){return 0==a.status?"Deactive":"Active"},name:"status"}],fnInitComplete:function(){$("#filter_status").change((function(){$(a).DataTable().ajax.reload(null,!0)}))}})})();