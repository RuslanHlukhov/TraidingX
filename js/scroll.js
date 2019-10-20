$(dosument).ready(function(){
    $("js-btn").on("click",function(event){
       event.preventDefalt();
       var top = $("js-plan").offset().top;
       console.log(top);
    });
 });