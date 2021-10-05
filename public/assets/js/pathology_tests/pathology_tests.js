(()=>{"use strict";$("#pathologyTestsTable").DataTable({processing:!0,serverSide:!0,order:[[0,"asc"],[3,"asc"]],ajax:{url:pathologyTestUrl},columnDefs:[{targets:[5],orderable:!1,className:"text-center",width:"8%"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(e){return'<a href="'+(pathologyTestUrl+"/"+e.id)+'">'+e.test_name+"</a>"},name:"test_name"},{data:"short_name",name:"short_name"},{data:"test_type",name:"test_type"},{data:"pathologycategory.name",name:"pathologycategory.name"},{data:"chargecategory.name",name:"chargecategory.name"},{data:function(e){var t=pathologyTestUrl+"/"+e.id,a=[{id:e.id,url:t+"/edit"}];return prepareTemplateRender("#pathologyTestActionTemplate",a)},name:"id"}]});$(document).on("click",".delete-btn",(function(e){var t=$(e.currentTarget).data("id");deleteItem(pathologyTestUrl+"/"+t,"#pathologyTestsTable","Pathology Test")}))})();