<form action="/?action=expo" method="post">
    <label for="NbAdu">Nombre d'entrée Adulte</label>
    <input type="number" id="NbAdu" name="NbAdu"
           min="0" max="100">
    <br>
    <label for="NbEnf">Nombre d'entrée Enfant</label>
    <input type="number" id="NbEnf" name="NbEnf"
           min="0" max="100">
    <br>
    <h3><p style="color:#d48603;">Exposition:</p></h3>
    <?php
    for ($i = 0; $i < count($listeExpos); $i++){
        ?>

        <input type="checkbox" id="expo<?php echo $listeExpos[$i]['id']?>" name="expo<?php echo $listeExpos[$i]['id']?>">
        <label for=expo"<?php echo $listeExpos[$i]['id']?>><?php echo '' . $listeExpos[$i]['nom']?></label><br>
        <?php
    } ?>
</form>