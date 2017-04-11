$(document).ready(function(){
 
  $(".submit-btn").click(function(e){
        
         e.preventDefault();
         var ema= /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

         $("#load").html("<img src='images/loading_blue.gif' class='img col-md-12 test'>");
          if ($(".input1").val()=="" || $(".input2").val()=="") {
              $(".img").hide(200);
             $("#erro").html("please enter all fields");
             return false;
          }

          else {
            if (ema.test($(".input2").val())==false) {
                $(".img").hide(200);
                $("#erro").html("invalid email");
                return false;
             }
            else {
                $("#erro").html("saving");
                var name = $(".input1").val();
                var email = $(".input2").val();
                $.ajax({
                  type:'POST',
                  url:'coursesLogin.php',
                  data:{'teacher_name':name,
                        'teacher_email':email,
                     }
                
            });
              location.href="courses.php";
               $('.goTOClass').addClass('hide');
              return true;
          }
       }
  	      
  });    
});