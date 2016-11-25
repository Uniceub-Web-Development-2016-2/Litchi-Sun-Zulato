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
		<div class="col-md-12">
			<form role="form" action="add.php" method="post">
				<div class="form-group">
					 
					<label for="iduser">
						ID
					</label>
					<input  class="form-control" name="iduser" id="iduser" type="text">
				</div>
				<div class="form-group">
					 
					<label for="password">
						Senha
					</label>
					<input class="form-control" name="password" id="password" type="password">
				</div>
				<div class="form-group">
					 
					<label for="ra">
						RA
					</label>
					<input class="form-control" name="ra" id="ra" type="text">
				</div>
				<div class="form-group">
					 
					<label for="active">
						Active(1-ativo, 2-inativo)
					</label>
					<input class="form-control" name="active" id="active" type="text">
				</div>
				<div class="form-group">
					 
					<label for="type">
						Tipo(1-Aluno,2-Professor,3-Administrador)
					</label>
					<input class="form-control" name="type" id="type" type="text">
				</div>
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>