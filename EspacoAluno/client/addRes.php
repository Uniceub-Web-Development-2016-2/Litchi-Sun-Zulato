<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adicionar Usuário</title>

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
			<form role="form" action="addR.php" method="post">
				<div class="form-group">
					 
					<label for="id">
						ID(igual ao primeiro)
					</label>
					<input  class="form-control" name="id" id="id" type="text" required>
				</div>
				<div class="form-group">
					 
					<label for="name">
						Nome
					</label>
					<input class="form-control" name="name" id="name" type="text" required>
				</div>
                <div class="form-group">
                     
                    <label for="sex">
                        Sexo:
                    </label>
                     Homem: <input  name="sex" id="sex" type="radio" value="1" checked>
                    Mulher: <input  name="sex" id="sex" type="radio" value="2" >
                    Outro: <input  name="sex" id="sex" type="radio" value="3" >
                </div>
				<div class="form-group">
					 
					<label for="father_name">
						Nome do Pai:
					</label>
					<input class="form-control" name="father_name" id="father_name" type="text">
				</div>
				<div class="form-group">
					 
					<label for="mother_name">
						Nome da Mãe:
					</label>
					<input class="form-control" name="mother_name" id="mother_name" type="text">
				</div>
                <div class="form-group">
                     
                    <label for="birth_date">
                        Data de nascimento:
                    </label>
                    <input class="form-control" name="birth_date" id="birth_date" type="date">
                </div>
                <div class="form-group">
                     
                    <label for="birth_city">
                        Cidade onde nasceu:
                    </label>
                    <input class="form-control" name="birth_city" id="birth_city" type="text" required>
                </div>
                <div class="form-group">
                     
                    <label for="birth_UF">
                        UF:
                    </label>
                    <input class="form-control" name="birth_UF" id="birth_UF" type="text"  maxlength="2" required>
                </div>
                <div class="form-group">
                     
                    <label for="birth_country">
                        País onde nasceu:
                    </label>
                    <input class="form-control" name="birth_country" id="birth_country" type="text" required>
                </div>
                 <div class="form-group">
                     
                    <label for="nacionality">
                        Nacionalidade:
                    </label>
                    <input class="form-control" name="nacionality" id="nacionality" type="text" required>
                </div>
                 <div class="form-group">
                     
                    <label for="address">
                        Endereço:
                    </label>
                    <input class="form-control" name="address" id="address" type="text" required>
                </div>
                 <div class="form-group">
                     
                    <label for="CEP">
                        CEP:
                    </label>
                    <input class="form-control" name="CEP" id="CEP" type="text" maxlength="8" required>
                </div>
                 <div class="form-group">
                     
                    <label for="phone">
                        Telefone:
                    </label>
                    <input class="form-control" name="phone" id="phone" type="text" maxlength="9" required>
                </div>
                <div class="form-group">
                     
                    <label for="generalinfo">
                        Informações adicionais:
                    </label>
                    <input class="form-control" name="generalinfo" id="generalinfo" type="text" required>
                </div>
                <div class="form-group">
                     
                    <label for="career">
                        Carreira:
                    </label>
                    <input class="form-control" name="career" id="career" type="text" required>
                </div>
                <div class="form-group">
                     
                    <label for="campus">
                        Campus:
                    </label><br>
                    Asa norte: <input  name="campus" id="campus" type="radio" value="Asa Norte" checked><br>
                    Taguatinga: <input  name="campus" id="campus" type="radio" value="Taguatinga" >
                </div>
                <div class="form-group">
                     
                    <label for="semester">
                        Semestre:
                    </label>
                    1º: <input  name="semester" id="semester" type="radio" value="1" checked>
                    2º: <input  name="semester" id="semester" type="radio" value="2" >
                    3º: <input  name="semester" id="semester" type="radio" value="3" >
                    4º: <input  name="semester" id="semester" type="radio" value="4" >
                    5º: <input  name="semester" id="semester" type="radio" value="5" >
                    6º: <input  name="semester" id="semester" type="radio" value="6" >
                    7º: <input  name="semester" id="semester" type="radio" value="7" >
                    8º: <input  name="semester" id="semester" type="radio" value="8" >
                    9º: <input  name="semester" id="semester" type="radio" value="9" >
                    10º: <input  name="semester" id="semester" type="radio" value="10" >
                </div>
                <div class="form-group">
                     
                    <label for="profilePicture">
                        Foto de Perfil:
                    </label>
                    <input class="form-control" name="profilePicture" id="profilePicture" type="text">
                </div>
                <div class="form-group">
                     
                    <label for="user_iduser">
                        ID de relacionamento(igual ao primeiro):
                    </label>
                    <input class="form-control" name="user_iduser" id="user_iduser" type="text" required>
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