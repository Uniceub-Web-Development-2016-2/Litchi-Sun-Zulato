<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atualizar Usuário</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/simple-sidebar.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="adm.php">
                        Bem-Vindo!
                    </a>
                </li>
                <li>
                    <a href="addUser.php">Adicionar usuário</a>
                </li>
                <li>
                    <a href="uppUser.php">Atualizar usuário</a>
                </li>
                <li>
                    <a href="delUser.php">Excluir usuário</a>
                </li>
                <li>
                    <a href="srcUser.php">Pesquisar usuário</a>
                </li>
                <li>
                    <a href="addMajor.php">Adicionar Curso</a>
                </li>
                <li>
                    <a href="uppMajor.php">Atualizar Curso</a>
                </li>
                <li>
                    <a href="delMajor.php">Excluir Curso</a>
                </li>
                <li>
                  <a href="srcMajor.php">Pesquisar Curso</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
       <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" action="upp.php" method="post">
				<div class="form-group">
					 
					<label for="id">
						ID
					</label>
					<input  class="form-control" name="id" id="id" type="text" required>
				</div>
				<div class="form-group">
					 
					<label for="password">
						Senha
					</label>
					<input class="form-control" name="password" id="password" type="password" required>
				</div>
				<div class="form-group">
					 
					<label for="ra">
						RA
					</label>
					<input class="form-control" name="ra" id="ra" type="text" required>
				</div>
				<div class="form-group">

					<input class="form-control" name="active" id="active" type="text" value="<?php echo 1 ?>">
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
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
</body>

</html>