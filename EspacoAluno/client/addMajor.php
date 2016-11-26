<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Adicionar Curso</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" action="addM.php" method="post">
				<div class="form-group">
					 
					<label for="id">
						ID
					</label>
					<input  class="form-control" name="id" id="id" type="text">
				</div>
				<div class="form-group">
					 
					<label for="name">
						Nome
					</label>
					<input class="form-control" name="name" id="name" type="text">
				</div>
				<div class="form-group">
					<input class="form-control" name="active" id="active" type="text" value="<?php echo 1 ?>">
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