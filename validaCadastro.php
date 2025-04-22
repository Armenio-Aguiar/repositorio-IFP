<?php 
$email=$_POST['email'];
	if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			return true;
		}else{
			echo " Email invalido";
			return false;
		}

	

 ?>