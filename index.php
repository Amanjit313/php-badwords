<?php 
  /* Creo una variabile con un paragrafo di testo*/
  $frase = "Hello PHP!";

  /* Con var dump ho tutte le info necessarie di questo elemento stampate in pagina */
  var_dump([$frase]);
  
  /* Dichiaro la mia parola nascosta e la inserisco nel mio link */
  $hiddenWord = $_GET["hiddenWord"];
  
  /* Con replace sostituisco la parola che voglio con altro */
  $frasecensurata = str_replace("Hello", "***", $frase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <!-- Stampo la mia frase nella mia pagina -->
  <h1><?php echo $frase; ?></h1>

  <!-- Stampo la mia parola nascosta -->
  <h1><?php echo $hiddenWord; ?></h1>
  
  <!-- Stampo la mia frase censurata e la sua var dump per avere le info del mio nuovo elemento-->
  <h1><?php echo $frasecensurata; 
      var_dump([$frasecensurata]);
      ?>
  </h1>

</body>
</html>