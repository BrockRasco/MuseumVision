<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["expo"] = "expo.php";



    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["expo"];
    }

}

?>