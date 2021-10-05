(()=>{"use strict";var e="#tblMedicines";$(e).DataTable({processing:!0,serverSide:!0,order:[[0,"asc"]],ajax:{url:medicineUrl},columnDefs:[{targets:[4],orderable:!1,class:"text-center",width:"8%"},{targets:"_all",defaultContent:"N/A"},{targets:[2,3],className:"text-right"}],columns:[{data:function(e){return'<a href="'+(medicineUrl+"/"+e.id)+'">'+e.name+"</a>"},name:"name"},{data:"brand.name",name:"brand.name"},{data:function(e){return isEmpty(e.selling_price)?"N/A":'<p class="cur-margin">'+getCurrentCurrencyClass()+" "+addCommas(e.selling_price)+"</p>"},name:"selling_price"},{data:function(e){return isEmpty(e.buying_price)?"N/A":'<p class="cur-margin">'+getCurrentCurrencyClass()+" "+addCommas(e.buying_price)+"</p>"},name:"buying_price"},{data:function(e){var a=[{id:e.id,url:medicineUrl+"/"+e.id+"/edit"}];return prepareTemplateRender("#medicineActionTemplate",a)},name:"id"}]}),$(document).on("click",".delete-btn",(function(a){var r=$(a.currentTarget).data("id");deleteItem(medicineUrl+"/"+r,e,"Medicine")}))})();