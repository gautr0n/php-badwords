<?php

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola_censurata'];
$lunghezza_paragrafo=strlen($paragrafo);
$paragrafo_censurato=str_replace($parola, '***', $paragrafo);
$lunghezza_censurato=strlen($paragrafo_censurato);

?>

<p><?php echo $paragrafo?></p>
<div>il paragrafo è lungo: <?php echo $lunghezza_paragrafo?></div>
<p><?php echo $paragrafo_censurato?></p>
<div>il paragrafo è lungo: <?php echo $lunghezza_censurato?></div>