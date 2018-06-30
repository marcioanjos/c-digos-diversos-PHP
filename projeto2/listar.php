<?php
  session_start();
  require_once('estados.php');
  $pessoas =[];
  if (isset($_SESSION['cadastropessoal'])) {
   $pessoas = $_SESSION['cadastropessoal'];
  }
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <title>CADASTRO DE PESSOAS</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   <Style>
        body {
          padding-top: 5rem;
        }
        .starter-template {
          padding: 3rem 1.5rem;
          text-align: center;
        }
   </Style> 
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">CADASTRO DE PESSOAS</a>
      

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link active" href="lista.php">LISTA </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastra.php">CADASTRA</a>
            </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <table class="table table-hover">
          <thead><!--linha de cima da tabela-->
            <tr><!--linha-->
              <th scope="col">#</th>
              <th scope="col">nome</th>
              <th scope="col">idade</th>
              <th scope="col">telefone</th>
              <th scope="col">enderenço</th>
              <th scope="col">cidade</th>
              <th scope="col">estado</th>
              <th scope="col">acoes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              
              foreach ($pessoas as $i => $p) {#pegndo todos os valores do array associativo
                  $uf = $estados[$p['estado']];#pegando os atributos do array estado onde antes so aparecia o indince para agora aparece o que valor corespondido ao indice
                  echo "<tr>";
                  echo '<th ecope="row">'. $i .'</th>';
                  echo '<td>'.$p['nome'].'</td>';
                  echo '<td>'.$p['idade'].'</td>';
                  echo '<td>'.$p['telefone'].'</td>';
                  echo '<td>'.$p['enderenco'].'</td>';
                  echo '<td>'.$p['cidade'].'</td>';
                  echo '<td>'.$uf.'</td>';
                  echo '<td>';
                  echo '<a class="btn btn-danger" href="apagar.php?id='.$i.'"> <i class="fa fa-trash-o fa-lg"</i></a>'; #criando um botao no lista excluir
                  echo '<a class="btn btn-warning" href="cadastra.php?id='.$i.'"> <i class="fa fa-pencil fa-lg"</i></a>';#criando um botao no lista modificar
                  echo '</td>';
                  echo "</tr>";# significa coloca tudo em uma linha
              }

             ?>
          </tbody>
        </table>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="node_modules/jquery/dist/jquery.slim.min.css" ></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
