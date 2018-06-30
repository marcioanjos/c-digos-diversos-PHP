<?php
$res = 0;
      if(count($_POST) &&  isset($_POST["op"])) {#calculadora utilizado o frame work materiaize css
      switch( $_POST["op"] ){
      	case 'som':
      		$res = $_POST["n1"] + $_POST["n2"];
      		break;
      	case 'sub':
      		$res = $_POST["n1"] - $_POST["n2"];
      		break;
      	case 'div':
      		$res = $_POST["n1"] / $_POST["n2"];
      		break;
      	case 'mul':
      		$res = $_POST["n1"] * $_POST["n2"];
      		break;

      }  

    }
 ?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <div class="container">
        <div class="row">
      <div class="col s8 "><!--colunas ocupadas nas paginas-->
        <h4 class="header">Minha calculadora</h4><!--titulo do cartao-->
        <div class="card horizontal">
          <div class="card-image">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <div class="row">
                <form method="post"><!--formulario onde dentro esta os bottões-->
                  <div class="input-field col s6">
                    <input  id="n1" type="number" name="n1"><!--o id o tipo e o nome da variavel a ser utilizando pelo php-->
                    <label for="n1">Operando 1</label> 
                  </div>
                  <div class="input-field col s6">
                    <input  id="n2" type="number" name="n2"><!--o id o tipo e o nome da variavel a ser utilizando pelo php-->
                    <label for="n2">Operando 2</label> 
                  </div>
                  <div class="input-field col s12">
                    <button type="submit" name="op" value="som"
                            class="btn col s2 offset-s1 indigo darken-4">somar</button>

                    <button type="submit" name="op" value="div"
                            class="btn col s2 offset-s1 deep-purple darken-3">dividir</button>

                    <button type="submit" name="op" value="mul"
                            class="btn col s2 offset-s1 blue accent-3">mult.</button>

                    <button type="submit" name="op" value="sub"
                            class="btn col s2 offset-s1 teal darken-4">sub</button>
                  </div>
                </form>
                
              </div>
            </div>
            <div class="card-action">
              <a href="#">Resultado <?php echo $res ;?></a>
            </div>
          </div>
        </div>
        </div>
       </div>
      </div>        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="node_modules/jQuery/dist/jQuery.min.js"></script>
      <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    </body>
  </html>