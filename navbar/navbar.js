$('[data-toggle="tooltip"]').tooltip();
var navbar = $('.navbar');
$(document).scroll(function(event) {
	var scrollPoint = $(this).scrollTop() ;
    if(scrollPoint >= 300){
    	$(navbar).css("box-shadow" , "0 3px 9px blue");
    }
    else{
    	$(navbar).css("box-shadow" , "none");
    }
});