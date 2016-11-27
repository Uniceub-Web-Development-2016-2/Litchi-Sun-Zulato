<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Procurar Curso</title>

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
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
</body>

</html>