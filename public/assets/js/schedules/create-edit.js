$(document).ready((function(){"use strict";$("#doctorId, #serialVisibilityId").select2({width:"100%"}),$(".availableFrom, .availableTo, #perPatientTime").datetimepicker(DatetimepickerDefaults({format:"HH:mm:ss",useCurrent:!0,sideBySide:!0,widgetPositioning:{horizontal:"right",vertical:"bottom"}})),$("#doctorId").first().focus(),$(document).on("click",".copy-btn",(function(a){a.preventDefault();var e=$(a.currentTarget).data("id"),t=e-1,i=$("#availableFrom-".concat(t)).val(),o=$("#availableTo-".concat(t)).val();$("#availableFrom-".concat(e)).val(i),$("#availableTo-".concat(e)).val(o)})),$("#createScheduleForm").on("submit",(function(){if("00:00:00"==$("#perPatientTime").val())return $("#validationErrorsBox").html("Please select per patient time").show(),!1;for(var a=0,e=!0;a<=6;a++)"00:00:00"!=$("#availableFrom-"+a).val()&&(e=!1);if(e)return $("#validationErrorsBox").html("Please select at least one available from time").show(),!1;for(var t=0,i=!0;t<=6;t++)"00:00:00"!=$("#availableTo-"+t).val()&&(i=!1);return i?($("#validationErrorsBox").html("Please select available to time").show(),!1):void 0}))}));