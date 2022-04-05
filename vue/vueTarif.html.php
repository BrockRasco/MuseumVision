<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=musumvision;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$menue = $bdd->query('SELECT id,nom FROM exposition');
while ($menu = $menue->fetch()) {?>
    <input type="checkbox" id=expo"<?php echo $menu['id']?>"
    <label for=expo"<?php echo $menu['id']?>"><?php echo $menu['nom'] ?></label><br> <?php
} ?>