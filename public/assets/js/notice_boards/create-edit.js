(()=>{"use strict";$(document).on("submit","#addNewForm",(function(a){a.preventDefault();var e=jQuery(this).find("#btnSave");e.button("loading"),$.ajax({url:noticeBoardCreateUrl,type:"POST",data:$(this).serialize(),success:function(a){a.success&&(displaySuccessMessage(a.message),$("#addModal").modal("hide"),$("#noticeBoardsTable").DataTable().ajax.reload(null,!1))},error:function(a){printErrorMessage("#validationErrorsBox",a)},complete:function(){e.button("reset")}})})),$(document).on("click",".edit-btn",(function(a){if(!ajaxCallIsRunning){ajaxCallInProgress();var e=$(a.currentTarget).data("id");renderData(e)}})),window.renderData=function(a){$.ajax({url:noticeBoardUrl+"/"+a+"/edit",type:"GET",success:function(a){a.success&&($("#noticeBoardId").val(a.data.id),$("#editTitle").val(a.data.title),$("#editDescription").val(a.data.description),$("#editModal").modal("show"),ajaxCallCompleted())},error:function(a){manageAjaxErrors(a)}})},$(document).on("submit","#editForm",(function(a){a.preventDefault();var e=jQuery(this).find("#btnEditSave");e.button("loading");var t=$("#noticeBoardId").val();$.ajax({url:noticeBoardUrl+"/"+t,type:"patch",data:$(this).serialize(),success:function(a){a.success&&(displaySuccessMessage(a.message),$("#editModal").modal("hide"),$("#noticeBoardsTable").DataTable().ajax.reload(null,!1))},error:function(a){manageAjaxErrors(a)},complete:function(){e.button("reset")}})})),$("#addModal").on("hidden.bs.modal",(function(){resetModalForm("#addNewForm","#validationErrorsBox")})),$("#editModal").on("hidden.bs.modal",(function(){resetModalForm("#editForm","#editValidationErrorsBox")}))})();