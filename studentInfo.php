<?php include 'databaseConnect.php';
    header('Content-type: application/json');

    // validate teacher input
     function validateStudent($connect){
     	  print_r($_POST);
     	  $student_n=$_POST['student_name'];
          $student_e=$_POST['student_email'];
          $email = $student_e;
          
          // if (isset($_POST['submit'])) {
          	     if (empty($student_n) || empty($student_e)) {
          	     	 $resp = array("status"=>1, "message"=>"please fill all fields.");
          	     	 
          	     } 
      	        else {
	      	           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  	     		        $resp = array("status"=>2, "message"=>"invalid email"); 
	  	     	     }
	  	     	     else{
	      	     		$resp = array("status"=>3, "message"=>"success");
	      	     		
	      	     		$query=mysqli_query($connect,"INSERT INTO student (student_name,student_email)
					     VALUES('$student_n','$student_e')");
	      	     		 // session_start();
	      	     		
	      	     	}
      	       } 
      	       echo json_encode($resp); 
          // }     	
    }
    validateStudent($connect);