$(window).scroll(function (){
       if ($(this).scrollTop() > $('.border_content columns').height())
       {
            $('.main-menu').addClass('active-top-menu');
       } 
       else
       {
            $('.main-menu').removeClass('active-top-menu');
       }
   });
