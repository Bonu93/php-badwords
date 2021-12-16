<?php

$paragrafo = 'lorem ipsum dolor sit amet quam';

echo $paragrafo;

echo '<br> lunghezza:'.strlen($paragrafo);

$badword = $_GET['badword'];

$replaced = str_replace($badword, '***', $paragrafo);

echo '<br>'.$replaced;

echo '<br> lunghezza:'.strlen($replaced)



?>