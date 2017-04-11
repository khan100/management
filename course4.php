<!DOCTYPE html>
<html>
		<head>
			<title>Diversity management and Consulting Cameroon</title>
			<meta charset="utf-8">
			<!-- initialing zoom level and of the page here -->
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <!-- custom css here -->
		    <link rel="stylesheet" type="text/css" href="custom_css/detailStyle.css">
		    <!-- bootstrap here 	 -->
		    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		     <!-- link for font here -->
		    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,400" rel="stylesheet">
		    <!--  font awesome here -->
		    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		    
		</head>
		<body>
                    <nav id="mainNav" class="navbar navbar-fixed-top no-margin" >
						        <div class="container">
						            <div class="navbar-header size">    
						                <a class="navbar-brand" href="courses.html"><i class="fa fa-arrow-left"></i>  
						                    Details</a>
						            </div>
						           
						        </div>
						        <!-- /.container-fluid -->
			           </nav>
			           <!-- header background image here -->
			           <div class="container-fluid bgImage no-margin" >
			                    <h1 class="text-center name4"></h1>	
								<form action="index.php" method="post" id="mfrom">
			                		<input type="button" name="class" value="Go To Class" class="  btn-xl btn-md col-md-offset-5 btn goTOClass test" data-toggle="modal" data-target="#myModal">
								   <!--  <input type="button" name="schedule" value="" class=" btn-xl col-md-offset- btn schedule test stubtn col-md-12"> -->
			                	</form>
			           </div>
			           <!-- Modal popup here-->
								<div id="myModal" class="modal fade col-md-offset-2" role="dialog" >
									 <div class="modal-dialog">
									    <!-- Modal content-->
									    <div class="modal-content col-md-8 col-xs-12">
									      <div class="modal-header">
									         <button type="button" class="close"       data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">Please Enter your Details</h4>
									      </div>
									      <form role=form class="col-md-12" id="popup"  action="studentInfo.php" method="post" >
									        <div class="modal-body">
													<div class=" form-group  has-feedback has-feedback-left">
														<input type="text" value="" name="student_name" class="form-control feedback col-md-2 field stu-input1" placeholder ="User name">
														<span class="glyphicon glyphicon-user  form-control-feedback" id=""></span>
													</div>
													<div class=" form-group has-feedback has-feedback-left">
												        <input type="text" value="" name="student_email" class=" form-control feedback col-md-2 form2 stu-input2" placeholder="Email">
												       <span class="glyphicon glyphicon-envelope form-control-feedback" id=""></span>
												         <!-- erro message here -->
												        <div class="text-danger" id="erro"></div>
											        </div>
									        </div>
										    <div class="modal-footer">
										       <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-close submit-b ">
										       <button type="button" class="btn btn-danger btn-close close_btn" data-dismiss="modal">Cancel</button>
										   </div>
									</form>
								</div>
							 </div>
					   </div>
			           <div class="container font">
			              <!-- discription here -->
					             <div class="discription">
					                 <dl class="dl-vertical">
					                    <dt>Discription</dt>
					                    <dd class="dis4">my name</dd>               	     	   	
					                  </dl>
					             </div>
					             <!-- objectives here -->
					             <div class="objectives">
					                 <dl class="dl-vertical">
					                    <dt>Objectives</dt>
					                    <dd class="obj4"></dd>               	     	   	
					                 </dl>
					             </div>
					             <!-- amount here -->
					             <div class="objectives">
					                 <dl class="dl-vertical">
					                    <dt>Amount</dt>
					                    <dd id="amount4"></dd>               	     	   	
					                 </dl>
					             </div>
			           	
			           </div>
			           <!-- footer here -->
			           <footer class="container-fluid footer">
			                    <div class="container">
			                    	<div class="row col-md-offset-1">
			                    	 	  <div class="col-md-4 col-sm-4 col-xs-12">
			                                   <h3 class="color text-center">Diversity Management Consulting Cameroon</h3>
			                    	 	  </div>
			                    	 	  <div class="col-md-4 col-sm-4 col-xs-12 text-center">
			                    	 	       <h4 class="text-center">main Directors</h4>
			                    	 	  	   <li><a  class="link text-center" href="">fon semi</a></li>
			                    	 	  	   <li><a  class="link text-center" href="">peter pane</a></li>
			                    	 	  	   <li><a  class="link text-center" href="">ndi peter</a></li>                    	 	<li><a  class="link text-center" href="">name njo</a></li>  
			                    	     </div>
			                    	     <div class="col-md-4 col-sm-4 col-xs-12 text-center">
			                    	 	       <h4>main Directors</h4>
			                    	 	  	   <li><a  href="">+23768950594</a></li>
			                    	 	  	   <li><a class="link" href="">emai@gmail.com</a></li>
			                    	 	  	   <li><a class="link" href="">Visit us on</a></li>
			                    	 	  	   <li><a class="link" href=""><img src="images/facebook.png" class="col-md-4 col-xs-4 col-xs-offset-4"></a></li> 
			                    	     </div>
			                    	 </div>    
			                        
			                    </div>      
			           </footer>
			           <div class="copyright container-fluid"><a class="" href="">copyright© 2017</a></div>	   
					</script>
					<script src="js/jquery.js"></script>
					<script src="js/custom_jquery.js"></script>
					<script src="js/login.js"></script>
					<script src="js/saveStudents.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					<!-- <script src="browser_component/underscore/underscore.js"></script>
					<script src="browser_component/backbone/backbone.js"></script>
					<script src="js/model/diversityModel.js"></script>
					<script src="js/collections/collection.js"></script>
					<script src="js/view/diversity-view.js"></script>
					<script src="js/router/routes.js"></script> -->

		

	     </body>
</html>