var $form = $(".sign_up .signup_column form")
$(".sign_left form button").on("click", function (e) {
    var toReturn = true;
   var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
     $("select, input[type='text']", $form).each(function(){
        if($(this).val() == ""){
            $(this).next().addClass("err_msgs");
            e.preventDefault();
            toReturn = false
        }
        else{
            $(this).next().removeClass("err_msgs");
           return toReturn = true;
        }
       
    })

    $("input[type='email']", $form).each(function(){
        if($(this).val().match(validRegex)){
            $(this).next().removeClass("err_msgs");
            return toReturn = true;
        }
        else{
            $(this).next().addClass("err_msgs");
             toReturn = false
             e.preventDefault();
        }
    })

    $("input[type='checkbox']", $form).each(function(){
        if($(this).is(":checked")){
           $(this).parent(".checkbox").next("p.error").removeClass("err_msgs");
           return toReturn = true;
       }
       else{
        $(this).parent(".checkbox").next("p.error").addClass("err_msgs")
           toReturn = false
           e.preventDefault();
       }
   })

  
 return toReturn = true;
  
  
});