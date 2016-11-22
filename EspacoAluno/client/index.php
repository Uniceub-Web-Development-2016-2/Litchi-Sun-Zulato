<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Espaco Aluno</title>

    <meta name="description" content="Login page">
    <meta name="author" content="Litchi">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<center><img alt="Bootstrap Image Preview" src="https://lh5.googleusercontent.com/-jXy-WKuRMhs/AAAAAAAAAAI/AAAAAAAAA54/5C59qoACsr8/s0-c-k-no-ns/photo.jpg" widht="500" height="200"></center>
<br>
	 <section class="form">
			<form class="form-horizontal" action="login.php" method="post">
				<div class="form-group">
					 
					<label for="inputEmail3" class="col-sm-2 control-label">
						RA
					</label>
					<div class="col-sm-5">
						<input class="form-control" name="login" id="login" type="text" autocomplete="off" >
					</div>
				</div>
				<div class="form-group">
					 
					<label for="inputPassword3" class="col-sm-2 control-label">
						Senha
					</label>
					<div class="col-sm-5">
						<input class="form-control" id="password" name="password" type="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							 
							<label>
								<input type="checkbox"> Lembre-se
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 
						<button type="submit" class="btn btn-default">
							Entrar
						</button>
					</div>
				</div>
			</form>
</section>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
