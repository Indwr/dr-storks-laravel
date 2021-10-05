$(document).ready((function(){"use strict";$("#chargeTypeId,#editChargeTypeId").select2({width:"100%"}),$(document).on("submit","#addNewForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnSave");a.button("loading"),$.ajax({url:chargeCategoryCreateUrl,type:"POST",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#addModal").modal("hide"),$("#chargeCategoriesTbl").DataTable().ajax.reload(null,!1))},error:function(e){printErrorMessage("#validationErrorsBox",e)},complete:function(){a.button("reset")}})})),$(document).on("click",".edit-btn",(function(e){if(!ajaxCallIsRunning){ajaxCallInProgress();var a=$(e.currentTarget).data("id");renderData(a)}})),window.renderData=function(e){$.ajax({url:chargeCategoryUrl+"/"+e+"/edit",type:"GET",success:function(e){e.success&&($("#chargeCategoryId").val(e.data.id),$("#editName").val(e.data.name),$("#editChargeTypeId").val(e.data.charge_type).trigger("change.select2"),$("#editDescription").val(e.data.description),$("#editModal").modal("show"),ajaxCallCompleted())},error:function(e){manageAjaxErrors(e)}})},$(document).on("submit","#editForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnEditSave");a.button("loading");var t=$("#chargeCategoryId").val();$.ajax({url:chargeCategoryUrl+"/"+t,type:"patch",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#editModal").modal("hide"),$("#chargeCategoriesTbl").DataTable().ajax.reload(null,!1))},error:function(e){UnprocessableInputError(e)},complete:function(){a.button("reset")}})})),$("#addModal").on("hidden.bs.modal",(function(){resetModalForm("#addNewForm","#validationErrorsBox"),$("#chargeTypeId").val("").trigger("change.select2")})),$("#editModal").on("hidden.bs.modal",(function(){resetModalForm("#editForm","#editValidationErrorsBox"),$("#editChargeTypeId").val("").trigger("change.select2")}))}));