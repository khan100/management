$(document).ready(function(){
 
  $(".submit-b").click(function(e){
        
         e.preventDefault();
         var ema= /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

         $("#load").html("<img src='images/loading_blue.gif' class='img col-md-12 test'>");
          if ($(".stu-input1").val()=="" || $(".stu-input2").val()=="") {
              $(".img").hide(200);
             $("#erro").html("please enter all fields");
             return false;
          }

          else {
            if (ema.test($(".stu-input2").val())==false) {
                $(".img").hide(200);
                $("#erro").html("invalid email");
                return false;
             }
            else {
                $("#erro").html("saving");
                var name = $(".stu-input1").val();
                var email = $(".stu-input2").val();
                $.ajax({
                  type:'POST',
                  url:'studentInfo.php',
                  data:{'student_name':name,
                        'student_email':email,
                     },
                 
            });
              $("#erro").html("saved");
             
              return true;
          }
       }
  	      
  });    
});