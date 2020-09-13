<?php

[$_, $cName, $pName] = explode('/', $_SERVER['REDIRECT_URL']);

include("controller/$cName.php");
$c = new $cName();
$c->$pName();

foreach($c->params as $name=>$value) {
    $$name = $value; // params for view
}

ob_start();
include("view/$cName/$pName.php");
$view = ob_get_clean();

$title = $c->title;
include("layout/main.php");
