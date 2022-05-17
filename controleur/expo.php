<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.expo.inc.php";

$listeExpos = getExpos();
$maxId = getIdExpoMax();



for ($i=$maxId; $i>0; $i--)
{
    if (isset($_POST['expo'.$i]))
    {
        $Tarif=(getTarA($i)*$_POST['NbAdu'])+(getTarE($i)*$_POST['NbEnf']);
    }

}



// appel du script de vue qui permet de gerer l'affichage des donnees

include "$racine/vue/entete.html.php";
include "$racine/vue/vueEntrer.php";
include "$racine/vue/pied.html.php";


?>