(()=>{"use strict";$(document).ready((function(){var s=$(".no-results");$("#searchText").on("keyup",(function(){var e=$(this).val(),i=!1,t=this.value.toLowerCase().trim();$(".close-sign").click((function(){$("#searchText").val(""),$(".side-menus").show().filter((function(){""!=e&&$(this).removeClass("open")})),$(".close-sign").hide(),$(".no-results").css("display","none")})),$(".side-menus").show().filter((function(){$(this).addClass("open"),""==e&&($(this).removeClass("open"),$(".close-sign").hide()),-1==$(this).text().toLowerCase().trim().indexOf(t)?($(this).hide(),$(".close-sign").show()):(i=!0,$(this).show())})),s.toggle(!i)}))}))})();