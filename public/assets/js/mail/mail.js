$(document).ready((function(){"use strict";$("#emailId").focus(),$(document).on("change","#documentImage",(function(){var o=isValidDocument($(this),"#validationErrorsBox");isEmpty(o)||0==o||($("#validationErrorsBox").html("").hide(),displayDocument(this,"#previewImage",o))})),window.isValidDocument=function(o,e){var t=$(o).val().split(".").pop().toLowerCase();return-1==$.inArray(t,["png","jpg","jpeg","pdf","doc","docx"])?($(o).val(""),$(e).html("The document must be a file of type: jpeg, jpg, png, pdf, doc, docx.").show(),!1):t}}));