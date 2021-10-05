(()=>{"use strict";$("#schedulesTbl").DataTable({processing:!0,serverSide:!0,order:[[0,"asc"]],ajax:{url:scheduleUrl},columnDefs:[{targets:"_all",defaultContent:"N/A"},{targets:[2],orderable:!1,className:"text-center",width:"11%"}],columns:[{data:function(e){return'<a href="'+(doctorUrl+"/"+e.doctor.id)+'">'+e.doctor.user.full_name+"</a>"},name:"doctor.user.first_name"},{data:function(e){return e},render:function(e){var t=moment(e.per_patient_time,"HH:mm:ss").format("HH:mm");return t>moment("00:59:00","HH:mm:ss").format("HH:mm")?t+" hours":moment(e.per_patient_time,"HH:mm:ss").format("m")+" minutes"},name:"per_patient_time"},{data:function(e){var t=scheduleUrl+"/"+e.id,r=[{id:e.id,url:t+"/edit",viewUrl:t}];return prepareTemplateRender("#scheduleActionTemplate",r)},name:"doctor.user.last_name"}]});$(document).on("click",".delete-btn",(function(e){var t=$(e.currentTarget).data("id");deleteItem(scheduleUrl+"/"+t,"#schedulesTbl","Schedule")}))})();