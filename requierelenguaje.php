<?php

if (empty($_SESSION["language"])){
    $lang = substr ($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION["language"] = $lang;
    if ($lang!="es") {
        $_SESSION["language"]="en";
    }
}
if (isset($_SESSION["language"])) {
    $lang = $_SESSION["language"];
}
switch ($lang) {
    case 'fr':
        include ("language/fr.php");
        break;
    
    case 'it':
        include ("language/it.php");
        break;
    
    case 'es':
        include ("language/es.php");
        break;

    case 'en':
        include ("language/en.php");
        break;

    default:
        # idioma default en caso de encontrar cualquier otro idioa del navegador
        include ("language/en.php");
        break;
}

?>