$(document).ready((function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$(document).on("click","#ipdPaymentBtn",(function(){var e=this,a={amount:parseInt($("#billAmout").val()),ipdNumber:$("#ipdNumber").val()};$(this).html('<div class="spinner-border spinner-border-sm " role="status">\n                                            <span class="sr-only">Loading...</span>\n                                        </div>').addClass("disabled"),$.post(ipdStripePaymentUrl,a).done((function(e){var a=e.data.sessionId;stripe.redirectToCheckout({sessionId:a}).then((function(e){$(this).html("Make Payment").removeClass("disabled"),manageAjaxErrors(e)}))})).catch((function(a){$(e).html("Make Payment").removeClass("disabled"),manageAjaxErrors(a)}))}))}));