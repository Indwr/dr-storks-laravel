(()=>{"use strict";window.setPrice=function(e,t){if(""!=t||t>0){"number"!=typeof t&&(t=t.replace(/,/g,""));var r=addCommas(t);$(e).val(r)}},window.addCommas=function(e){for(var t=(e+="").split("."),r=t[0],i=t.length>1?"."+t[1]:"",n=/(\d+)(\d{3})/;n.test(r);)r=r.replace(n,"$1,$2");return r+i},window.getFormattedPrice=function(e){if(""!=e||e>0)return"number"!=typeof e&&(e=e.replace(/,/g,"")),addCommas(e)},window.priceFormatSelector=function(e){$(document).on("input keyup keydown keypress",e,(function(e){var t=$(this).val();if(""===t)$(this).val("");else{if(/[0-9]+(,[0-9]+)*$/.test(t))return $(this).val(getFormattedPrice(t)),!0;$(this).val(t.replace(/\D/g,""))}}))},window.removeCommas=function(e){return e.replace(/,/g,"")},priceFormatSelector(".price-input")})();