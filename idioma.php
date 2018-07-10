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
        include ("strings/fr.php");
        break;
    
    case 'it':
        include ("strings/it.php");
        break;
    
    case 'es':
        include ("strings/es.php");
        break;

    case 'en':
        include ("strings/en.php");
        break;

    default:
        # idioma default en caso de encontrar cualquier otro idioma del navegador
        include ("strings/en.php");
        break;
}

?>