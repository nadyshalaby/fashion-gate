$(document).ready(function(){
    $('a[href*=#]').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top 
        }, 500);       
        return false;
    });
    
    
    var btnLoad =$(".load-more");
    var productSlides = $(".product-slides");
    var flag = true;
    var count = 0;
    var link = '';
    btnLoad.click(function(){
        btnLoad = $(this);
        productSlides = btnLoad.parent().parent().parent().find(".product-slides");
        if(btnLoad.text() === "go to page"){
            window.location= link = btnLoad.attr("link");
            return;
        }
        if(flag){
            productSlides.css("margin-top" , "0");
            flag = false;
        }
        count = Number(productSlides.attr("count"));
        if(count > 0 && count <=3){
            productSlides.animate({marginTop : "-=375"},1000);
            count--;
            productSlides.attr("count" , count);
            count = 0;
        }else{
            btnLoad.text("go to page");
        }
        
    });
     
     $(".nav-home").addClass("active");  
});