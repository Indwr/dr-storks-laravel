$(document).ready((function(){"use strict";$("#caseId, #doctorId, #editCaseId, #editDoctorId").select2({width:"100%"}),$("#date, #editDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD HH:mm:ss",useCurrent:!0,sideBySide:!0,maxDate:new Date})),$("#addModal, #editModal").on("shown.bs.modal",(function(){$("#caseId, #editCaseId:first").focus()}))})),$(document).on("submit","#addNewForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnSave");a.button("loading"),$.ajax({url:deathReportCreateUrl,type:"POST",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#addModal").modal("hide"),$("#deathReportsTbl").DataTable().ajax.reload(null,!1))},error:function(e){printErrorMessage("#validationErrorsBox",e)},complete:function(){a.button("reset")}})})),$(document).on("click",".edit-btn",(function(e){if(!ajaxCallIsRunning){ajaxCallInProgress();var a=$(e.currentTarget).data("id");renderData(a)}})),window.renderData=function(e){$.ajax({url:deathReportUrl+"/"+e+"/edit",type:"GET",success:function(e){e.success&&($("#deathReportId").val(e.data.id),$("#editCaseId").val(e.data.case_id).trigger("change.select2"),$("#editDoctorId").val(e.data.doctor_id).trigger("change.select2"),$("#editDescription").val(e.data.description),$("#editDate").val(format(e.data.date,"YYYY-MM-DD HH:mm:ss")),$("#editModal").modal("show"),ajaxCallCompleted())},error:function(e){manageAjaxErrors(e)}})},$(document).on("submit","#editForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnEditSave");a.button("loading");var t=$("#deathReportId").val();$.ajax({url:deathReportUrl+"/"+t,type:"patch",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#editModal").modal("hide"),$("#deathReportsTbl").DataTable().ajax.reload(null,!1))},error:function(e){UnprocessableInputError(e)},complete:function(){a.button("reset")}})})),$("#addModal").on("hidden.bs.modal",(function(){resetModalForm("#addNewForm","#validationErrorsBox"),$("#caseId, #doctorId").val("").trigger("change.select2")})),$("#editModal").on("hidden.bs.modal",(function(){resetModalForm("#editForm","#editValidationErrorsBox")}));