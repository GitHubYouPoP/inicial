$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbarReportei').addClass("sticky");
        }else{
            $('.navbarReportei').removeClass("sticky");
        }
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });
     $('.scroll-up-btn').click(function(){
         $('html').animate({scrollTop: 0});
     });

     var typed = new Typed(".typing", {
         strings:["a YouPoP", "a melhor plataforma de Delivery"],
         typeSpeed:100,
         backSpeed:60,
         loop:true
     });
     
     var typed = new Typed(".typing-2", {
        strings:["a YouPoP e estamos prontos para atender você e seu cliente!"],
        typeSpeed:100,
        backSpeed:60,
        loop:true
    });

});