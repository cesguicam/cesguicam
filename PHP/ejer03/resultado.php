<?php
$pies= trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES, "UTF-8"));
$pulgadas= trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES, "UTF-8"));
if(empty($pies) || empty($pulgadas)){
    print "<p>campos vacios</p>";
} else if ($pies <=0 || $pulgadas <=0){
    print "<p>campos mayor que 0</p>";
} else {
    $cm = ($pies *12 + $pulgadas)*2.56;
    print "<p> $pies pies y $pulgadas pulgadas, son $cm centimetros";
}

?> 