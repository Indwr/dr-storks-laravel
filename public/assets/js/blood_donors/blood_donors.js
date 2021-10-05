(()=>{"use strict";$("#bloodDonorsTable").DataTable({processing:!0,serverSide:!0,order:[[4,"desc"]],ajax:{url:bloodDonorUrl},columnDefs:[{targets:[5],orderable:!1,className:"text-center",width:"8%"},{targets:[1],className:"text-right"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:"name",name:"name"},{data:"age",name:"age"},{data:function(e){return 1==e.gender?"Female":"Male"},name:"gender"},{data:"blood_group",name:"blood_group"},{data:function(e){return e},render:function(e){return null===e.last_donate_date?"N/A":moment(e.last_donate_date).utc().format("Do MMM, Y h:mm A")},name:"last_donate_date"},{data:function(e){var a=[{id:e.id}];return prepareTemplateRender("#bloodDonorActionTemplate",a)},name:"id"}]});$(document).on("submit","#addNewForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnSave");a.button("loading"),$.ajax({url:bloodDonorCreateUrl,type:"POST",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#addModal").modal("hide"),$("#bloodDonorsTable").DataTable().ajax.reload(null,!1))},error:function(e){printErrorMessage("#validationErrorsBox",e)},complete:function(){a.button("reset")}})})),$(document).on("submit","#editForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnEditSave");a.button("loading");var o=$("#bloodDonorId").val();$.ajax({url:bloodDonorUrl+"/"+o,type:"put",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#editModal").modal("hide"),$("#bloodDonorsTable").DataTable().ajax.reload(null,!1))},error:function(e){manageAjaxErrors(e)},complete:function(){a.button("reset")}})})),$("#addModal").on("hidden.bs.modal",(function(){resetModalForm("#addNewForm","#validationErrorsBox")})),$("#editModal").on("hidden.bs.modal",(function(){resetModalForm("#editForm","#editValidationErrorsBox")})),window.renderData=function(e){$.ajax({url:bloodDonorUrl+"/"+e+"/edit",type:"GET",success:function(e){if(e.success){var a=e.data;$("#bloodDonorId").val(a.id),$("#editName").val(a.name),$("#editAge").val(a.age),$("#male,#female").prop("checked",!1),1==a.gender?$("#female").prop("checked",!0):$("#male").prop("checked",!0),$("#editBloodGroup").val(a.blood_group),$("#editBloodGroup").trigger("change"),$("#editLastDonationDate").val(moment(a.last_donate_date).utc().format("YYYY-MM-DD HH:mm:ss")),$("#editModal").modal("show"),ajaxCallCompleted()}},error:function(e){manageAjaxErrors(e)}})},$(document).on("click",".edit-btn",(function(e){if(!ajaxCallIsRunning){ajaxCallInProgress();var a=$(e.currentTarget).data("id");renderData(a)}})),$(document).on("click",".delete-btn",(function(e){var a=$(e.currentTarget).data("id");deleteItem(bloodDonorUrl+"/"+a,"#bloodDonorsTable","Blood Donor")})),$(document).ready((function(){$("#bloodGroup,#editBloodGroup").select2({width:"100%"}),$("#lastDonationDate,#editLastDonationDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD HH:mm:ss",useCurrent:!0,sideBySide:!0,maxDate:new Date}))}))})();