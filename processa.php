<?php

$file = fopen("nomes.txt","a");

$nome = "Nome: ".$_POST['nome']."\n";

fwrite($file, $nome);

fclose($file);

?>
