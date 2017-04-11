<?php include 'databaseConnect.php';
    header('Content-type: application/json'); 


 // hide button

    	 if (isset($_POST['teacher'])){
              $class = 'hidden';
              
    	 }
    	 else if (isset($_POST['student'])) {
    	 	  $sch='hidden';
    	 	  
    	 }
    


     // validate teacher input
     function validate($connect){
     	  print_r($_POST);
     	  $teacher_n=$_POST['teacher_name'];
          $teacher_e=$_POST['teacher_email'];
          $email = $teacher_e;
          
          // if (isset($_POST['submit'])) {
          	     if (empty($teacher_n) || empty($teacher_e)) {
          	     	 $resp = array("status"=>1, "message"=>"please fill all fields.");
          	     	 
          	     } 
      	        else {
	      	           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  	     		        $resp = array("status"=>2, "message"=>"invalid email"); 
	  	     	     }
	  	     	     else{
	      	     		$resp = array("status"=>3, "message"=>"welcome to our app");
	      	     		
	      	     		$query=mysqli_query($connect,"INSERT INTO teacher(teacher_name,teacher_email)
					     VALUES('$teacher_n','$teacher_e')");
	      	     		 session_start();
	      	     		 $_SESSION['teacher_name']=$teacher_n;
	      	     	}
      	       } 
      	       echo json_encode($resp); 
          // }     	
    }
    validate($connect);
   
 ?>