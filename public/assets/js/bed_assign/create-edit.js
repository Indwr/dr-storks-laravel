$(document).ready((function(){"use strict";if($("#caseId, #bedId, #ipdPatientId").select2({width:"100%"}),$("#assignDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD HH:mm:ss",useCurrent:!0,sideBySide:!0})),$("#caseId").first().focus(),isEdit){setTimeout((function(){$("#caseId").trigger("change"),$("#assignDate").trigger("dp.change")}),300);var t=moment($("#assignDate").val()).add(1,"days");$("#assignDate").on("dp.change",(function(e){$("#dischargeDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD HH:mm:ss",sideBySide:!0,minDate:t,useCurrent:!1}))}))}$("#createBedAssign, #editBedAssign").on("submit",(function(){$("#saveBtn").attr("disabled",!0),""!==$("#validationErrorsBox").text()&&$("#saveBtn").attr("disabled",!1)})),$("#caseId").on("change",(function(){""!==$(this).val()&&$.ajax({url:ipdPatientsList,type:"get",dataType:"json",data:{id:$(this).val()},success:function(t){0!==t.data.length?($("#ipdPatientId").empty(),$("#ipdPatientId").removeAttr("disabled"),$.each(t.data,(function(t,e){$("#ipdPatientId").append($("<option></option>").attr("value",t).text(e))}))):$("#ipdPatientId").prop("disabled",!0)}}),$("#ipdPatientId").empty(),$("#ipdPatientId").prop("disabled",!0)}))}));