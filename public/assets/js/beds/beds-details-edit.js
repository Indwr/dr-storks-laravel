$(document).ready((function(){"use strict";$("#bedType,#editBedType").select2({width:"100%"})})),$(document).on("click",".edit-btn",(function(e){if(!ajaxCallIsRunning){ajaxCallInProgress();var t=$(e.currentTarget).data("id");renderData(t)}})),window.renderData=function(e){$.ajax({url:bedUrl+"/"+e+"/edit",type:"GET",success:function(e){e.success&&($("#bedId").val(e.data.id),$("#editName").val(e.data.name),$("#editBedType").val(e.data.bed_type).trigger("change.select2"),$("#editDescription").val(e.data.description),$("#editCharge").val(e.data.charge),$(".price-input").trigger("input"),$("#editModal").modal("show"),ajaxCallCompleted())},error:function(e){manageAjaxErrors(e)}})},$(document).on("submit","#editForm",(function(e){e.preventDefault();var t=jQuery(this).find("#btnEditSave");t.button("loading");var a=$("#bedId").val();$.ajax({url:bedUrl+"/"+a,type:"patch",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#editModal").modal("hide"),setTimeout((function(){window.location.reload()}),3e3))},error:function(e){UnprocessableInputError(e)},complete:function(){t.button("reset")}})})),$("#editModal").on("hidden.bs.modal",(function(){resetModalForm("#editForm","#editValidationErrorsBox")}));