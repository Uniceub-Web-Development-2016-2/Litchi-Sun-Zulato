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
	if(!empty($array) && $array["login"] == $_POST["login"] && $array["password"] == $array["password"] && $array["type"] == 1 && $array["active"] == 1){ 
		header("Location: http://google.com");
}
	if(!empty($array) && $array["login"] == $_POST["login"] && $array["password"] == $array["password"] && $array["type"] == 2 && $array["active"] == 1){
		header("Location: http://facebook.com");
}
	if(!empty($array) && $array["login"] == $_POST["login"] && $array["password"] == $array["password"] && $array["type"] == 3 && $array["active"] == 1){
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

