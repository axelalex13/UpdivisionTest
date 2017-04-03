<?php


// CONEXIUNE DB

$con=mysqli_connect("localhost","root","","proiect");

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

} else {

	// CONEXIUNEA MERGE
}
$name = $email = $picture= "";
$nameErr = $emailErr =$pictureErr="";  
$conditions_number = 0;
$html_skill = $css_skill= $php_skill = $js_skill = 0;

$target_dir = "pictures/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]); //
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST['name'];
    if (empty($_POST["name"])) {
       $nameErr = "Name is required ";
    }else {
       
    	$conditions_number++;
    }
    $email=$_POST['email'];
    if (empty($_POST["email"])) {
       $emailErr = "email is required ";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format "; 
    }else {
       	$conditions_number++;
    }
    $picture = $_FILES['picture'];
   
   	if(isset($picture["name"])){
		if($imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
	    	$conditions_number++;
	    }else {
			$pictureErr = "Invalid picture format; use only .jpeg, .gif,.png "; 
		}
		if($conditions_number == 3){
			$image_name = upload_picture($picture);
		}
	}
	$html_skill=$_POST['html_skill'];
	$css_skill=$_POST['css_skill'];
	$php_skill=$_POST['php_skill'];
	$js_skill=$_POST['js_skill'];

	if($html_skill>=1 && $html_skill<=10){
		$conditions_number++;
	}
	if($css_skill>=1 && $css_skill<=10){
		$conditions_number++;
	}
	if($php_skill>=1 && $php_skill<=10){
		$conditions_number++;
	}
	if($js_skill>=1 && $js_skill<=10){
		$conditions_number++;
	}
}

if($conditions_number==7){
	$result=insert($name, $email, $image_name,$html_skill,$css_skill,$php_skill,$js_skill,$con);
	if($result==1){
		echo "formular trimis cu succes";
	}else{
		echo "eroare MySQL";
	}

}else{
	echo "Completati corect toate campurile formularului. ";
	echo $nameErr;
	echo $emailErr;
	echo $pictureErr;
}


function upload_picture($picture)
{
	$target_dir = "pictures/";
	$imageFileType = pathinfo($picture["name"],PATHINFO_EXTENSION);
	$target_file = substr(md5(time()),0,6) . "." . $imageFileType;
	move_uploaded_file($target_dir . $target_file, $picture["tmp_name"]);
	return $target_file;
}

function insert($name, $email, $picture,$html_skill,$css_skill,$php_skill,$js_skill,$con)
{
	$sql = "INSERT INTO persoane(
	                name,
	              	email,
	              	picture,
	              	html_skills,
	              	css_skills,
	              	php_skills,
	              	js_skills
	                    ) values (
	            '".$name."',
	            '".$email."',
	            '".$picture."',
	            '".$html_skill."',
	            '".$css_skill."',
	            '".$php_skill."',
	            '".$js_skill."'
	            )";
	          // var_dump($sql);
	$result=mysqli_query($con,$sql);
	mysqli_close($con);
	return $result;

}




