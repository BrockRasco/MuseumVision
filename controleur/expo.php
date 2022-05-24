<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.expo.inc.php";

$listeExpos = getExpos();
$maxId = getIdExpoMax();

$prix=0;

for ($i = $maxId; $i>0;$i--){
    if (isset($_POST['expo'.$i]))
    {
        $prixEnfant = getPrixEnfant($i);
        $nbEnfant = $_POST['NbEnf'];
        $prixAdulte = getPrixAdulte($i);
        $nbAdulte = $_POST ['NbAdu'];

        $prix = ($prixEnfant * $nbEnfant) + ($prixAdulte * $nbAdulte);

    }

}

// appel du script de vue qui permet de gerer l'affichage des donnees

include "$racine/vue/entete.html.php";
include "$racine/vue/vueEntrer.php";
include "$racine/vue/pied.html.php";


?>