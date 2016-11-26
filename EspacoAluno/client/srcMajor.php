<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Adicionar Usuário</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<form role="form" action="src.php" method="get">
      <div class="form-group">
          
        <textarea><?php
include('httpful.phar');
  $url = "http://40.84.50.253/EspacoAluno/server/major/search?".$_SERVER["QUERY_STRING"];
  $response = \Httpful\Request::get($url)->send();
  echo $response->body;


?></textarea>
			</form>
      <a href="adm.php">Retornar para página de controle</a>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>


