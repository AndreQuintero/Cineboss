<?php
	include_once ('../../Login/Per/per_Login.php');
	
	$obj_Login = new Login($_POST['usuario'], $_POST['senha']);
	
	$res = $obj_Login->getLogin();

	echo "<span class='msgm'>{$res['msg']}</span>";
	
?>