<!DOCTYPE html>
<html>
	<head>
		<title>Log in</title>
	    <meta charset="utf-8">
		<!-- initialing zoom level and of the page here -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- custom css here -->
	    <link rel="stylesheet" type="text/css" href="custom_css/login.css">
	    
	    <!-- bootstrap here -->
	    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	     <!-- link for font here -->
	    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,400" rel="stylesheet">
	    <!--  font awesome here -->
	    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	</head>
	<body>
	    <!-- logo here -->
	        <img src="images/logo.png" class="img-responsive logo" height="200" width="200">
	   <div class="container content">

	        <!-- <h1 class="text-center">logo here</h1> -->
            <form  class=" col-md-4 col-md-offset-5 input-field" action="coursesLogin.php" method="post" id="myfrom">
            	   <div class=" form-group has-feedback has-feedback-left">
						<input type="text" value="" name="" class="form-control feedback input1 col-md-2 " placeholder="User name">
						<span class=" glyphicon glyphicon-user form-control-feedback" id=""></span>
					</div>
					<div class=" form-group has-feedback has-feedback-left form-c">
						<input type="text" value="" name="" class="field input2 form-control feedback col-md-2 " placeholder="Email">
						<span class=" glyphicon glyphicon-envelope form-control-feedback" id=""></span>	
					</div>
					<!-- <div class="checkbox">
                        <label><input type="checkbox" value="">Remember me</label>
                    </div> -->
                      <div class="row">
                     	 <div class="text-danger col-md-6 col-xs-6 test" id="erro"></div>
                         <div class="text-danger col-md-3 col-xs-6" id="load"></div>
                      </div>
                     
					 <input type="submit" name="submit" value="Log in" class="btn btn-primary submit-btn btn-close col-md-offset-3 col-md-6">
            </form>
	   </div>
	   <script src="js/jquery.js"></script>
	   <script src="js/login.js"></script>
	</body>
</html>