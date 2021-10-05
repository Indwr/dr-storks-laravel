(()=>{"use strict";$("#brandsTable").DataTable({processing:!0,serverSide:!0,order:[[0,"asc"]],ajax:{url:brandUrl},columnDefs:[{targets:[3],orderable:!1,className:"text-center",width:"10%"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(e){return'<a href="'+(brandUrl+"/"+e.id)+'">'+e.name+"</a>"},name:"name"},{data:function(e){return isEmpty(e.email)?"N/A":e.email},name:"email"},{data:function(e){return isEmpty(e.phone)?"N/A":e.phone},name:"phone"},{data:function(e){var a=brandUrl+"/"+e.id,n=[{id:e.id,url:a+"/edit"}];return prepareTemplateRender("#brandActionTemplate",n)},name:"id"}]});$(document).on("click",".delete-btn",(function(e){var a=$(e.currentTarget).data("id");deleteItem(brandUrl+"/"+a,"#brandsTable","Medicine Brand")}))})();