$(document).ready((function(){"use strict";$("#bloodGroup").select2({width:"100%"}),$("#birthDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD",useCurrent:!0,sideBySide:!0,maxDate:new Date})),$("#departmentId").select2({width:"100%"}),$("#createNurseForm, #editNurseForm").submit((function(){if(""!==$("#error-msg").text())return $("#phoneNumber").focus(),!1})),$("#createNurseForm, #editNurseForm").find("input:text:visible:first").focus()}));