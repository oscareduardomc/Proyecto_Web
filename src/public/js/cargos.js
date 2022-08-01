$(document).ready(function($){
    $(".modificar").on("click",function(){
        window.location.replace($(this).val());
        /*$.ajax({
            url: $(this).val(),
            type: "GET",
            success: function(response){
                  //do action  
            },
            error: function(){
                  // do action
            }
        });*/
    });
});