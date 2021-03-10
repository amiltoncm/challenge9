<!doctype html>
<html lang="pt-br">

<head>
  <?php
    include 'inc/generate.php'; 
    include 'inc/head.php'; 
  ?>

</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FW7 - Challenge 9 - Password Generator</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <main class="container">

    <div class="starter-template text-center py-5 px-3">
      <h1>Password Generator</h1>
      <p class="lead">
      <form action="" method="post" id="frmPasswd">

        <div class="slidecontainer">
          Tamanho da senha: <label id="labelRange">4</label>
          <input type="range" min="4" max="34" value="<?php echo $size ?>" class="slider" id="rangePassword"
            name="rangePassword">
        </div>

        <div>
          <input type="checkbox" id="chkUpper" name="chkUpper" <?php if ($upper == true){
              echo " checked";    
            }?>>
          <label for="scales">Letras maiúsculas</label>
        </div>

        <div>
          <input type="checkbox" id="chkNumbers" name="chkNumbers" <?php if ($numbers == true){
              echo " checked";    
            }?>>
          <label for="scales">Números</label>
        </div>

        <div>
          <input type="checkbox" id="chkSymbols" name="chkSymbols" <?php if ($symbols == true){
              echo " checked";    
            }?>>
          <label for="scales">Símbolos</label>
        </div>

        <div>
          <br />
          <input type="submit" id="btSubmit" value="Gerar senha">
        </div>

        <div style="padding-top: 10px">
          <?php
            echo $res;
          ?>
        </div>

      </form>
      </p>
    </div>

  </main><!-- /.container -->


  <script>
  var slider = document.getElementById("rangePassword");
  var output = document.getElementById("labelRange");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  }
  </script>

  <?php
    include 'inc/scripts.php'; 
  ?>

</bodY>

</html>