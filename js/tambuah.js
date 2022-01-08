var toggle_detail_page = function(){
  "use strict";
  $('.header-info-toggle').click(function(){
	$(this).toggleClass('header-info-clicked');
    $('.video-page').toggleClass('video-page-full');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  toggle_detail_page();
});