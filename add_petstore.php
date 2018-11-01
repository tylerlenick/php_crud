<!DOCTYPE html>
<html lang="en">
<head>
<!--
"Time-stamp: <Thu, 10-08-15, 18:48:04 Eastern Daylight Time>"
//-->
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Your Name Here!">
	<link rel="icon" href="favicon.ico">

	<title>LIS4381 - Project1</title>

<!-- Include FontAwesome CSS to use feedback icons provided by FontAwesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Bootstrap for responsive, mobile-first design. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Note: following file is for form validation. -->
<link rel="stylesheet" href="css/formValidation.min.css"/>

<!-- Starter template for your own custom styling. -->
<link href="css/starter-template.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" target="_self">Home</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="../index.php">CRSXXXX</a></li>
					<li><a href="../a1/index.php">A1</a></li>
					<li><a href="../a2/index.php">A2</a></li>
					<li><a href="../a3/index.php">A3</a></li>
					<li><a href="../a4/index.php">A4</a></li>
					<li><a href="../a5/index.php">A5</a></li>
					<li><a href="../p1/index.php">P1</a></li>
					<li><a href="../p2/index.php">P2</a></li>
					<li><a href="../test/index.php">Test</a></li>					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

11/16/15 4:14pm	

	<div class="container">
		<div class="starter-template">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					
					<div class="page-header">
						<h1>Project 1</h1>
<h3>Basic client-side validation</h3>
<p class="lead">This project uses Bootstrap client-side validation.</p>
(Table: petstore)
	
					</div>

					<h2>Pet Stores</h2>

						<form id="defaultForm" method="post" class="form-horizontal" action="add_petstore_process.php">
								<div class="form-group">
										<label class="col-sm-3 control-label">Name:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control maxlength="30" name="name" />
										</div>
								</div>

								
								<div class="form-group">
										<label class="col-sm-3 control-label">Street:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="30" name="street" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">City:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="30" name="city" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">State:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="2" name="state" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">Zip:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="9" name="zip" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">Phone:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="10" name="phone" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">Email:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="100" name="email" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">URL:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control maxlength="100" name="url" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">YTD Sales:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="11" name="ytd_sales" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-3 control-label">Notes:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" maxlength="255" name="notes" />
										</div> 
								</div>

								<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
												<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
										</div>
								</div>
						</form>
					</div>
			</div>

			&copy; 
2015 
My Footer, Inc.

			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	
	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Turn off client-side validation, in order to test server-side validation.  -->
<!--<script type="text/javascript" src="js/formValidation/formValidation.min.js"></script>-->
<!-- Note the following bootstrap.min.js file is for form validation, different from the one above. -->
<script type="text/javascript" src="js/formValidation/bootstrap.min.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	$('#defaultForm').formValidation({
			message: 'This value is not valid',
			icon: {
					valid: 'fa fa-check',
					invalid: 'fa fa-times',
					validating: 'fa fa-refresh'
			},
			fields: {
					name: {
							validators: {
									notEmpty: {
											message: 'Name is required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'Name must be less than 30 characters long'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[\w\-\s]+$/,
										message: 'Name can only contain letters, numbers, hyphens, and underscore'
									},									
							},
					},
					
					street: {
							validators: {
									notEmpty: {
											message: 'Street is required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'Street must be less than 30 characters long'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[a-zA-Z0-9\s]+$/,	
										message: 'Street can only contain letters or numbers'
									},									
							},
					},
					
					city: {
							validators: {
									notEmpty: {
											message: 'City is required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'City must be less than 30 characters long'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z\]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[a-zA-Z0\s]+$/,	
										message: 'City can only contain letters'
									},									
							},
					},
					
					state: {
							validators: {
									notEmpty: {
											message: 'State is required'
									},
									stringLength: {
											min: 2,
											max: 2,
											message: 'State must be 2 characters long'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[a-zA-Z]+$/,	
										message: 'State can only contain letters'
									},									
							},
					},
					
					zip: {
							validators: {
									notEmpty: {
											message: 'Zip is required'
									},
									stringLength: {
											min: 5,
											max: 9,
											message: 'Zip must be between 5 and 9 characters long'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[0-9]+$/,
										message: 'zip can only contain numbers'
									},									
							},
					},
					
					phone: {
							validators: {
									notEmpty: {
											message: 'Phone is required'
									},
									stringLength: {
											min: 10,
											max: 10,
											message: 'Phone must be 10 characters long'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[0-9]+$/,
										message: 'Phone can only contain numbers'
									},									
							},
					},

					email: {
							validators: {
									notEmpty: {
											message: 'Email address is required'
									},
									emailAddress: {
											message: 'Must include valid email address'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'Email no more than 100 characters'
									},
							},
					},
					
					url: {
							validators: {
									notEmpty: {
											message: 'URL is required'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'URL must be less than 100 characters long'
									},
							},
					},
					
					ytdsales: {
							validators: {
									notEmpty: {
											message: 'YTD-Sales is required'
									},
									stringLength: {
											min: 1,
											max: 11,
											message: 'YTD sales can be no more than 10 digits including decimal point'
									},
									regexp: {
										
											regexp: /^[0-9\.]+$/,
										message: 'YTD sales can only contain numbers and decimal point'
									},									
							},
					},
					
			}
	});
});
</script>

</body>
</html>
