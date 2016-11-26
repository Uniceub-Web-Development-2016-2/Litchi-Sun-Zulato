<?php
include('httpful.phar');
if($_POST["ra"] != null && $_POST["password"] != null)
{
	$login_array = array('ra' => $_POST["ra"], 'password' =>$_POST["password"]);
	$url = "http://40.84.50.253/EspacoAluno/server/user/login";
	$body = json_encode($login_array);
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();   
	//var_dump($response);
	$array = json_decode($response->body, true)[0];
	if(!empty($array) && $array["ra"] == $_POST["ra"] && $array["password"] == $array["password"] && $array["type"] == 1 && $array["active"] == 1){ 
		header("Location: student.php");
}
	if(!empty($array) && $array["ra"] == $_POST["ra"] && $array["password"] == $array["password"] && $array["type"] == 2 && $array["active"] == 1){
		header("Location: professor.php");
}
	if(!empty($array) && $array["ra"] == $_POST["ra"] && $array["password"] == $array["password"] && $array["type"] == 3 && $array["active"] == 1){
		header("Location: adm.php");
}
	if($array["active"] == 0){
		header("Location: http://dorkly.com");
}
	else{
		echo "Erro";
}
		//chamar página de erro
}

