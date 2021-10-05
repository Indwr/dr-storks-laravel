(()=>{"use strict";$("#prescriptionsTable").DataTable({processing:!0,serverSide:!0,order:[[0,"asc"]],ajax:{url:prescriptionUrl,data:function(e){e.status=$("#filter_status").find("option:selected").val()}},columnDefs:[{targets:[7],orderable:!1,className:"text-center",width:"10%"},{targets:[8],orderable:!1,width:"5%"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:"patient.user.full_name",name:"patient.user.first_name"},{data:"doctor.user.full_name",name:"doctor.user.first_name"},{data:function(e){return isEmpty(e.medical_history)?"N/A":e.medical_history},name:"medical_history"},{data:function(e){return isEmpty(e.current_medication)?"N/A":e.current_medication},name:"current_medication"},{data:function(e){return isEmpty(e.health_insurance)?"N/A":e.health_insurance},name:"health_insurance"},{data:function(e){return isEmpty(e.low_income)?"N/A":e.low_income},name:"low_income"},{data:function(e){return isEmpty(e.reference)?"N/A":e.reference},name:"reference"},{data:function(e){return 0==e.status?"Deactive":"Active"},name:"status"},{data:function(e){return'<a href="'+(prescriptionUrl+"/"+e.id)+'" class="btn action-btn btn-primary btn-sm"><i class="fa fa-eye action-icon"></i></a>'},name:"patient.user.last_name"}],fnInitComplete:function(){$("#filter_status").change((function(){$("#prescriptionsTable").DataTable().ajax.reload(null,!0)}))}})})();