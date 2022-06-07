<?php 
  /* Creo una variabile con un paragrafo di testo*/
  $frase = "Hello PHP!";

  /* Dichiaro la mia parola nascosta e la inserisco nel mio URL */
  $hiddenWord = $_GET["hiddenWord"];
  
  /* Con replace sostituisco la parola che voglio con altro */
  $frasecensurata = str_replace($hiddenWord, "***", $frase);

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
  <h1>La mia frase: <?php echo $frase; ?></h1>
  <!-- Stampo la lunghezza della mia frase in caratteri -->
  <p>La frase è lunga: <?php echo strlen($frase); ?> caratteri</p>

  <!-- Stampo la mia frase censurata e la sua var dump per avere le info del mio nuovo elemento-->
  <h1>La mia nuova frase: <?php echo $frasecensurata;?></h1>
  <!-- Stampo la lunghezza della mia nuova frase in caratteri -->
  <p>La frase è lunga: <?php echo strlen($frasecensurata); ?> caratteri</p>

</body>
</html>