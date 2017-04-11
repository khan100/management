// geting data from function here

$(document).ready(function(){
	  $(".img").show()
      $.ajax({
          url:'getData.php',
          dataType:'json',
          type:'GET',
          success:function(response){
          	   // var data =JSON.parse(response);
          	   // first page
          	   $(".name").html(response['names'][0]);
          	   $(".dis").html(response['course1'][0]);
          	   $(".obj").html(response['obj'][0]);
          	   $(".amount").html(response['amounts'][0]);

          	   // second page
          	   $(".name1").html(response['names'][1]);
          	   $(".dis1").html(response['course1'][1]);
          	   $(".obj1").html(response['obj'][1]);
          	   $(".amount1").html(response['amounts'][1]);
                // third page
               $(".name2").html(response['names'][2]);
          	   $(".dis2").html(response['course1'][2]);
          	   $(".obj2").html(response['obj'][2]);
          	   $(".amount2").html(response['amounts'][2]);
                // fouth page
               $(".name3").html(response['names'][3]);
          	   $(".dis3").html(response['course1'][3]);
          	   $(".obj3").html(response['obj'][3]);
          	   $(".amount3").html(response['amounts'][3]);
               // five page
               $(".name4").html(response['names'][4]);
          	   $(".dis4").html(response['course1'][4]);
          	   $(".obj4").html(response['obj'][4]);
          	   $(".amount4").html(response['amounts'][4]);
                // sixth page
               $(".name5").html(response['names'][5]);
          	   $(".dis5").html(response['course1'][5]);
          	   $(".obj5").html(response['obj'][5]);
          	   $(".amount5").html(response['amounts'][5]);
          },

          complete:function(){

          	 $(".img").hide()
          }
      });
});

// console.log(data.fruit[1]);
	          // $(".dis").html(data['course1'][2]);
           //    $(".obj").html(data.course1[1]);
           //    $(".amount").html(data.course1[0]);
              // alert(data['fruit'][2]);

 // $.get('getData.php', function(response) {
	//           var data =$.parseJSON(response);
 //              console.log(data)
 //      });