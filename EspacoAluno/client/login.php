<?php
include('httpful.phar');
if($_POST["login"] != null && $_POST["password"] != null)
{
	$login_array = array('login' => $_POST["login"], 'password' =>$_POST["password"]);
	$url = "http://localhost/EspacoAluno/server/user/login";
	$body = json_encode($login_array);
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();   
	//var_dump($response);
	$array = json_decode($response->body, true)[0];
	var_dump($array);
	if(!empty($array) && $array["login"] == $_POST["login"] && $array["password"] == $array["password"]){ 
		header("Location: http://google.com");
}
	else{
		echo "Pode não mano veio!";
}
		//chamar página de erro
}

