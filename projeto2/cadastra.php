<?php
  session_start();
  require_once('estados.php');#pegados os dados de estado.php incluindo nesse arquivo
  $id ='';
  $nome ='';
  $idade ='';
  $telefone ='';
  $enderenco ='';
  $cidade ='';
  $estado ='';

  if (count($_GET)) {
    $id = $_GET ['id'];
    $nome      = $_SESSION['cadastropessoal'][$id]['nome'];#adiciona a cada variavel o valor correspodente na sesão que 
    $idade     = $_SESSION['cadastropessoal'][$id]['idade'];
    $telefone  = $_SESSION['cadastropessoal'][$id]['telefone'];#para a altera o valores sera adicionado um echo  em value
    $enderenco = $_SESSION['cadastropessoal'][$id]['enderenco'];#formulario
    $cidade    = $_SESSION['cadastropessoal'][$id]['cidade'];
    $estado    = $_SESSION['cadastropessoal'][$id]['estado'];
  }

?>

<!doctype html>
<html lang="pt-BR">
  <head>
     
   <title>CADASTRO DE PESSOAS</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

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
        <!--parte de cima do menu-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">CADASTRO DE PESSOAS</a>
      

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link " href="listar.php">LISTA </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="cadastra.php">CADASTRA</a>
            </li>
        </ul>
      </div>
    </nav>
        <!--inicio do container e o formulario do cadastra-->
    <main role="main" class="container">
      <div class="starter-template">
        <form style="text-align: left;" method="post" action="salvar.php">
          <input type="hidden" name="id" value="<?php echo $id; ?>"><!--para verificar se e para salva ou se esta alterado um cadastro-->
          
          <div class="form-group"><!--inicio do formulario e cada parte dele cada atributo-->
            <label for=nome>nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="nome da pessoa" value="<?php echo $nome; ?>">            
          </div>

            <div class="form-row">
              
              <div class="form-group col-md-4">
              <label for=idade>idade</label>
              <input type="number" class="form-control" name="idade" id="idade" placeholder="idade" value="<?php echo $idade; ?>" >            
            </div>
            
            <div class="form-group col-md-8">
              <label for=telefone>telefone</label>
              <input type="text" class="form-control" name="telefone" id="nome" placeholder="telefone" value="<?php echo $telefone ;?>" >            
            </div>
              
          </div>

          <div class="form-group">
            <label for=enderenco>enderenço</label>
            <input type="text" class="form-control" name="enderenco" id="enderenco" placeholder="enderenco" value="<?php echo $enderenco ;?>">            
          </div>

          <div class="form-row">
              
              <div class="form-group col-md-6">
              <label for=cidade>cidade</label>
              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="cidade" value="<?php echo $cidade ;?>">            
            </div>
            
            <div class="form-group col-md-6">
              <label for="estado">Estado</label>
              <select id="estado" name="estado" class="form-control">
                <?php
                  $uf_sel =$estados[0];#adiciona o primeiro indince a variavel ao uf_sel
                  if($estados!='')#verifica se estado esta vazio
                   $uf_sel=$estado;#adiciona valor que estiver no estado
                  foreach ($estados as $i => $uf) {#pecorre o array estado
                    if ($i==$uf_sel)
                       echo "<option value= \"$i\" selected>$uf</option>";#se o estado ja estiver preechindo coloca para altera
                    else
                       echo "<option value= \"$i\">$uf</option>";#senao cadastra o estado novo
                    
                  }
                  
                ?>
              </select>        
            </div>
              
          </div>
         <br> 
         <br>

         <button type="submit" class="btn btn-primary">salvar</button> 
         <button type="submit" class="btn btn-warning">limpar</button> 
        </form>
       
       
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
