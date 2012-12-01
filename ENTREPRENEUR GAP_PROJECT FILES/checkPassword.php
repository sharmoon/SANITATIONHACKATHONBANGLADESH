<?php
	include 'common.php';
	session_start();
	$_SESSION['logInCheck'] =0;
	$userName=$_POST['userId'];
	$userPass=$_POST['password'];
	
	$loginSql ="SELECT * FROM userinfo WHERE UserID='$userName' and Password='$userPass'";
	$loginSqlResult=mysql_query($loginSql);
	
	$loginSuccess=mysql_num_rows($loginSqlResult);
	$link = "adminPage.php";
	if ($loginSuccess == 1){
		$_SESSION['logInCheck'] =1;
		header('Location:'. $link);
	}
	else{
		header('Location: index.php?loginInfo=false');
	}
?>