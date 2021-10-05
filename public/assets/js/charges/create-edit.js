$(document).ready((function(){"use strict";$("#chargeTypeId,#chargeCategoryId,#editChargeTypeId,#editChargeCategoryId,#chargeType").select2({width:"100%"}),$("#addModal, #editModal").on("shown.bs.modal",(function(){$("#chargeTypeId, #editChargeTypeId:first").focus()})),window.changeChargeCategory=function(e,a){$.ajax({url:changeChargeTypeUrl,type:"get",dataType:"json",data:{id:a},success:function(a){$(e).empty(),$.each(a.data,(function(a,t){$(e).append($("<option></option>").attr("value",a).text(t))}))}})},$("#chargeTypeId").on("change",(function(){changeChargeCategory("#chargeCategoryId",$(this).val())})),$("#editChargeTypeId").on("change",(function(){changeChargeCategory("#editChargeCategoryId",$(this).val())})),$(document).on("submit","#addNewForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnSave");a.button("loading"),$.ajax({url:chargeCreateUrl,type:"POST",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#addModal").modal("hide"),$("#chargesTbl").DataTable().ajax.reload(null,!1))},error:function(e){printErrorMessage("#validationErrorsBox",e)},complete:function(){a.button("reset")}})})),$(document).on("click",".edit-btn",(function(e){if(!ajaxCallIsRunning){ajaxCallInProgress();var a=$(e.currentTarget).data("id");renderData(a)}})),window.renderData=function(e){$.ajax({url:chargeUrl+"/"+e+"/edit",type:"GET",success:function(e){e.success&&($("#chargeId").val(e.data.id),$("#editChargeTypeId").val(e.data.charge_type).trigger("change.select2"),changeChargeCategory("#editChargeCategoryId",e.data.charge_type),$("#editCode").val(e.data.code),$("#editDescription").val(e.data.description),$("#editStdCharge").val(addCommas(e.data.standard_charge)),setTimeout((function(){$("#editChargeCategoryId").val(e.data.charge_category_id).trigger("change.select2")}),2e3),$("#editModal").modal("show"),ajaxCallCompleted())},error:function(e){manageAjaxErrors(e)}})},$(document).on("submit","#editForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnEditSave");a.button("loading");var t=$("#chargeId").val();$.ajax({url:chargeUrl+"/"+t,type:"patch",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#editModal").modal("hide"),$("#chargesTbl").DataTable().ajax.reload(null,!1))},error:function(e){UnprocessableInputError(e)},complete:function(){a.button("reset")}})})),$("#addModal").on("hidden.bs.modal",(function(){resetModalForm("#addNewForm","#validationErrorsBox"),$("#chargeTypeId,#chargeCategoryId").val("").trigger("change.select2")})),$("#editModal").on("hidden.bs.modal",(function(){resetModalForm("#editForm","#editValidationErrorsBox"),$("#editChargeTypeId,#editChargeCategoryId").val("").trigger("change.select2")}))}));