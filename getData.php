
 <?php include 'databaseConnect.php';
   $data = array();
   // query for first course
function first_course($connect){
     // query for first course
	$query= "SELECT * FROM course WHERE course_name = 'blogging'";
    $result = mysqli_query($connect,$query) or mysqli_error($connect);
    $row1 = mysqli_fetch_assoc($result);
     // query 2nd course
    $query1= "SELECT * FROM course WHERE course_name = 'video making'";
    $result1 = mysqli_query($connect,$query1) or mysqli_error($connect);
    $row2 = mysqli_fetch_assoc($result1); 
     // query third course
    $query2= "SELECT * FROM course WHERE course_name = 'wordpress'";
    $result2 = mysqli_query($connect,$query2) or mysqli_error($connect);
    $row3 = mysqli_fetch_assoc($result2);
      // query fouth_course
    $query3= "SELECT * FROM course WHERE course_name = 'on line maketing'";
    $result3 = mysqli_query($connect,$query3) or mysqli_error($connect);
    $row4 = mysqli_fetch_assoc($result3);
    // query firth_course
    $query4= "SELECT * FROM course WHERE course_name = 'wordpress'";
    $result4 = mysqli_query($connect,$query4) or mysqli_error($connect);
    $row5 = mysqli_fetch_assoc($result4);
     // query sixth_course
    $query5= "SELECT * FROM course WHERE course_name = 'basic css and html'";
    $result5 = mysqli_query($connect,$query5) or mysqli_error($connect);
    $row6 = mysqli_fetch_assoc($result5);
      // creating description array
     $data['course1'] = array($row1['course_discription'],$row2['course_discription'],$row3['course_discription'],$row4['course_discription'],$row5['course_discription'],$row6['course_discription']);
     // creating objective array
     $data['obj']=array($row1['course_objective'],$row2['course_objective'],$row3['course_objective'],$row4['course_objective'],$row5['course_objective'],$row6['course_objective']);
     // creating course name array
     $data['course_name']=array($row1['course_name'],$row2['course_name'],$row3['course_name'],$row4['course_name'],$row5['course_name'],$row6['course_name']);
      // creating course amount array
     $data['course_amounts']=array($row1['course_amount'],$row2['course_amount'],$row3['course_amount'],$row4['amount'],$row5['course_amount'],$row6['course_amount']);

     echo json_encode($data);       
    
}

first_course($connect);
?>





 

 

            

                                       

			

		                    
		                    
                             
               
 