<?php

print "Su nombre es ". $_REQUEST["nombre"];

$nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

print_r($_REQUEST);
print_r($_FILES);

?>