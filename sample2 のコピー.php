<?php

function remake($a_name){
  return $a_name = "Mr.{$a_name}";
}

$name = "Tanaka";
$name = remake($name);
echo $name, PHP_EOL;

?>