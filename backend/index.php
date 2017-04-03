<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class=" lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

<?php /* Din pacate timpul nu-mi permite sa fac detectarea corecta; utilizez $_SERVER['HTTP_USER_AGENT'] pt a vedea daca vizita este
	facuta de pe mobil sau desktop pt a decide de fisier css livrez
 */ ?> 
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script
	  src="http://code.jquery.com/jquery-2.2.4.min.js"
	  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	  crossorigin="anonymous"></script> 
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>

<body class="col-md-6">
	<form role="form" action="procesare.php" method="post" enctype="multipart/form-data">
		<h2>Personal Details</h2>
		
		<form class="form-horizontal">
		
			<div class="form-group">
				<h4><label for="name">NAME</label>
				<input  type="text" class="form-control"  name='name' placeholder="Enter name" >
			</div></h4>
		</div>

		
		<div class="form-group">
			<h4><label for="email">EMAIL</label>
			<input type="email"  class="form-control" name='email' placeholder="Enter email" >
		</div></h4>
		
		<label class="custom-file-upload">
		<div class="form-group">
			<h4><label for="picture">PICTURE</label>
			<input type="file" name='picture' id="picture" size="60" class="btn btn-info">
		</div></h4>
		</label>


		<h2>Skills</h2>
		<br>

		<div  class="form-group">
		
			<div class="skill_name"><label  for="html_skill">HTML</label></div>
			<div class="skill_amount"><input type="text" id="amount_html" name=html_skill class="skill_number"></div>
			<div id="html-slider"></div>
		
		</div>

		

		<div class="form-group">
			<div class="skill_name"><label for="css_skill">CSS</label></div>
			<div class="skill_amount"><input  type="text" id="amount_css" name=css_skill class="skill_number"></div>
			<div id="slider-range-min_css"></div>
			
		</div>

		<div class="form-group">
			<div class="skill_name"><label for="php_skill">PHP</label></div>
			<div class="skill_amount"><input type="text" id="amount_php" name=php_skill class="skill_number"></div>
			<div id="slider-range-min_php"></div>
			
		</div>

		<div class="form-group">
			<div class="skill_name"><label for="js_skill">JS</label></div>
			<div class="skill_amount"><input type="text" id="amount_js" name=js_skill class="skill_number"></div>
			<div id="slider-range-min_js"></div>
			
		</div>
		
		<button type="submit" class="btn btn-info">Submit</button>


	<script src="js/script.js"></script>

</body>
</html>
