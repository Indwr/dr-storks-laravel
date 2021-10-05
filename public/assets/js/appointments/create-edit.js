$(document).ready((function(){"use strict";var e;$("#patientId, #doctorId, #departmentId").select2({width:"100%"}),$("#opdDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD",sideBySide:!0,minDate:moment().subtract(1,"days"),useCurrent:!1})),$("#patientId").first().focus(),$("#departmentId").on("change",(function(){$(".error-message").css("display","none"),$("#opdDate").data("DateTimePicker").clear(),$.ajax({url:doctorDepartmentUrl,type:"get",dataType:"json",data:{id:$(this).val()},success:function(e){$("#doctorId").empty(),$("#doctorId").append($('<option value="">Select Doctor</option>')),$.each(e.data,(function(e,t){$("#doctorId").append($("<option></option>").attr("value",e).text(t))}))}})}));var t,a,o,s,i,n=!1;$("#doctorId").on("change",(function(){n&&($(".error-message").css("display","none"),$("#opdDate").data("DateTimePicker").clear(),n=!0),$(".error-message").css("display","none"),e=$(this).val(),n=!0})),$("#opdDate").on("dp.change",(function(){if($(".doctor-schedule").css("display","none"),$(".error-message").css("display","none"),$(".available-slot-heading").css("display","none"),$(".color-information").css("display","none"),$(".time-slot").remove(),""==$("#departmentId").val())return $("#validationErrorsBox").show().html("Please select Doctor Department"),$("#validationErrorsBox").delay(5e3).fadeOut(),$("#opdDate").val(""),$("#opdDate").data("DateTimePicker").clear(),!1;if(""==$("#doctorId").val())return $("#validationErrorsBox").show().html("Please select Doctor"),$("#validationErrorsBox").delay(5e3).fadeOut(),$("#opdDate").val(""),$("#opdDate").data("DateTimePicker").clear(),!1;var s=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][new Date($(this).val()).getDay()];if(t=$(this).val(),null==s||""==s)return!1;$.ajax({type:"GET",url:doctorScheduleList,data:{day_name:s,doctor_id:e},success:function(e){if(e.success&&""!=e.data)if(0!=e.data.scheduleDay.length){var o=t+" "+e.data.scheduleDay[0].available_from,s=t+" "+e.data.scheduleDay[0].available_to,i=e.data.perPatientTime[0].per_patient_time.split(":"),n=60*+i[0]+ +i[1],r=parseIn(o),d=parseIn(s);if((a=getTimeIntervals(r,d,n)).length>0){var l;$(".available-slot-heading").css("display","block"),$(".color-information").css("display","block");var c="";for(l=0;l<a.length;++l){var p=[{index:l,timeSlot:a[l]}];c+=prepareTemplateRender("#appointmentSlotTemplate",p)}$(".available-slot").append(c)}"00:00:00"!=e.data.scheduleDay[0].available_from&&"00:00:00"!=e.data.scheduleDay[0].available_to&&o!=s?($(".doctor-schedule").css("display","block"),$(".color-information").css("display","block"),$(".day-name").html(e.data.scheduleDay[0].available_on),$(".schedule-time").html("["+e.data.scheduleDay[0].available_from+" - "+e.data.scheduleDay[0].available_to+"]")):($(".doctor-schedule").css("display","none"),$(".color-information").css("display","none"),$(".error-message").css("display","block"),$(".error-message").html("Doctor Schedule not available this date."))}else $(".doctor-schedule").css("display","none"),$(".color-information").css("display","none"),$(".error-message").css("display","block"),$(".error-message").html("Doctor Schedule not available this date.")}}),(isCreate||isEdit)&&setTimeout((function(){if(isCreate)var s={editSelectedDate:t,doctor_id:e};else s={editSelectedDate:t,editId:appointmentEditId,doctor_id:e};$.ajax({url:getBookingSlot,type:"GET",data:s,success:function(e){o=e.data.bookingSlotArr,e.data.hasOwnProperty("onlyTime")?(e.data.bookingSlotArr.length>0&&(i=e.data.onlyTime.toString(),$.each(e.data.bookingSlotArr,(function(e,t){$.each(a,(function(e,a){t==a&&$(".time-interval").each((function(){$(this).data("id")==e&&$(this).html()!=i&&($(this).parent().css({"background-color":"#ffa721",border:"1px solid #ffa721",color:"#ffffff"}),$(this).parent().addClass("booked"),$(this).parent().children().prop("disabled",!0))}))}))}))),$(".time-interval").each((function(){$(this).html()==i&&e.data.bookingSlotArr.length>0&&($(this).parent().addClass("time-slot-book"),$(this).parent().removeClass("booked"),$(this).parent().children().prop("disabled",!1),$(this).click())}))):o.length>0&&$.each(o,(function(e,t){$.each(a,(function(e,a){t==a&&$(".time-interval").each((function(){$(this).data("id")==e&&($(this).parent().addClass("time-slot-book"),$(".time-slot-book").css({"background-color":"#ffa721",border:"1px solid #ffa721",color:"#ffffff"}),$(this).parent().addClass("booked"),$(this).parent().children().prop("disabled",!0))}))}))}))}})}),200)})),isEdit&&($("#doctorId").trigger("change",(function(t){e=$(this).val()})),$("#opdDate").trigger("dp.change",(function(){new Date($(this).val())}))),window.parseIn=function(e){var t=new Date;return t.setHours(e.substring(11,13)),t.setMinutes(e.substring(14,16)),t},window.getTimeIntervals=function(e,t,a){for(var o=[];e<t;)o.push(e.toTimeString().substring(0,5)),e.setMinutes(e.getMinutes()+a);return o},$(document).on("click",".time-interval",(function(e){var t=$(e.currentTarget).data("id");$(this).data("id")==t&&$(this).parent().hasClass("booked")&&$(".time-slot-book").css("background-color","#ffa0a0"),s=$(this).text(),$(".time-slot").removeClass("time-slot-book"),$(this).parent().addClass("time-slot-book")})),$("#appointmentForm").on("submit",(function(e){if(null==s||""==s)return $("#validationErrorsBox").show().html("Please select appointment time slot"),!1;e.preventDefault(),screenLock();var t=$(this).serialize()+"&time="+s;$.ajax({url:appointmentSaveUrl,type:"POST",dataType:"json",data:t,success:function(e){displaySuccessMessage(e.message),window.location.href=appointmentIndexPage},error:function(e){printErrorMessage("#validationErrorsBox",e),screenUnLock()}})})),$(document).on("click",".time-interval",(function(){i=$(this).text()})),$("#editAppointmentForm").on("submit",(function(e){e.preventDefault(),screenLock();var t=$(this).serialize()+"&time="+i;$.ajax({url:appointmentSaveUrl,type:"POST",dataType:"json",data:t,success:function(e){displaySuccessMessage(e.message),window.location.href=appointmentIndexPage},error:function(e){printErrorMessage("#validationErrorsBox",e),screenUnLock()}})}))}));