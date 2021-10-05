$(document).ready((function(){"use strict";var e=function(e){$(e).select2({placeholder:"Select Service",width:"100%"})};$("#packageForm").find("input:text:visible:first").focus(),e(".serviceId"),$(document).on("click","#addItem",(function(){var a={services:associateServices,uniqueId},n=prepareTemplateRender("#packageServiceTemplate",a);$(".package-service-item-container").append(n),e(".serviceId"),uniqueId++,t()}));var t=function(){var t=1;if($(".package-service-item-container>tr").each((function(){$(this).find(".item-number").text(t),t++})),t-1==0){var a={services:associateServices,uniqueId},n=prepareTemplateRender("#packageServiceTemplate",a);$(".package-service-item-container").append(n),e(".serviceId"),uniqueId++}};$(document).on("click",".delete-service-package-item",(function(){$(this).parents("tr").remove(),t(),i()}));var a=function(e){return e.replace(/,/g,"")};window.isNumberKey=function(e,t){var a=e.which?e.which:event.keyCode;return!((46!==a||-1!==$(t).val().indexOf("."))&&(a<48||a>57))},$(document).on("keyup",".qty",(function(){var e=parseInt($(this).val()),t=$(this).parent().siblings().find(".price").val();t=parseInt(a(t));var r=n(e,t);$(this).parent().siblings(".amount").text(addCommas(r.toString())),i()})),$(document).on("keyup",".price",(function(){var e=$(this).val();e=parseInt(a(e));var t=parseInt($(this).parent().siblings().find(".qty").val()),r=n(t,e);$(this).parent().siblings(".amount").text(addCommas(r.toString())),i()})),$(document).on("keyup",".discount",(function(){i()}));var n=function(e,t){return e>0&&t>0?e*t:0},i=function(){var e=0,t=parseFloat(""!==$(".discount").val()?$(".discount").val():0);$(".package-service-item-container>tr").each((function(){var t=$(this).find(".item-total").text();t=a(t),t=isEmpty($.trim(t))?0:parseInt(t),e+=t})),e=parseFloat(e),e-=e*t/100,$("#total").text(addCommas(e.toFixed(2))),$("#total_amount").val(e)};$(document).on("submit","#packageForm",(function(e){e.preventDefault(),screenLock(),$("#saveBtn").attr("disabled",!0);var t=jQuery(this).find("#saveBtn");t.button("loading");var a=new FormData($(this)[0]);$.ajax({url:packageSaveUrl,type:"POST",dataType:"json",data:a,processData:!1,contentType:!1,success:function(e){displaySuccessMessage(e.message),window.location.href=packageUrl},error:function(e){printErrorMessage("#validationErrorsBox",e),$("#saveBtn").attr("disabled",!1)},complete:function(){screenUnLock(),t.button("reset")}})}))}));