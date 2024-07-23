<?php 

// paragrafro digitato dall'utente 
$paragrafo = $_GET["paragrafo"];

// numero caratteri nel paragrafo
$lunghezzaTestoBase = strlen($paragrafo);

// parola da censurare
$parolaCensurata = $_GET["parolaCensurata"];

// sostituzione della parola censurata 
$paragrafo_corretto = str_replace($parolaCensurata , "***" , $paragrafo);

// numero caratteri nel paragrafo dopo la sostituzione della parola censurata 
$lunghezzaTestoCensurato = strlen($paragrafo_corretto)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di atterraggio</title>
</head>
<body>

<!-- Stampo a schermo il paragrafo digitato dall'utente -->
<p><?php echo $paragrafo ?> </p>

<!-- Stampo la lunghezza della strina  -->
 <p> Hai digitato un pagafro da <?php echo $lunghezzaTestoBase ?> caratteri.</p>

<!-- Stampo la lunghezza del paragrafo digitato dall'utente -->
<p>  <?php echo $paragrafo_corretto ?> </p>

<!-- Stampo la lunghezza del paragrafo censurato  -->
 <p> Dopo la correzzione i caratteri presenti nel paragrafo sono: <?php echo $lunghezzaTestoCensurato?></p>

    
</body>
</html>


