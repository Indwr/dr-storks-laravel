$("#admissionDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD HH:mm:ss",useCurrent:!0,sideBySide:!0})),$(document).ready((function(){"use strict";if($("#patientId, #doctorId, #packageId, #insuranceId, #bedId").select2({width:"100%"}),$("#patientId").focus(),isEdit){setTimeout((function(){$("#admissionDate").trigger("dp.change")}),300);var e=moment($("#admissionDate").val()).add(1,"days");$("#admissionDate").on("dp.change",(function(t){$("#dischargeDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD HH:mm:ss",sideBySide:!0,minDate:e,useCurrent:!1}))}))}$("#createPatientAdmission, #editPatientAdmission").submit((function(){if(""!==$("#error-msg").text())return $("#phoneNumber").focus(),!1}))}));