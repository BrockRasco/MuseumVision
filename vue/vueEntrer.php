<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Entrer</title>
    <meta name="description" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" href="icon.png" type="image/png" />
    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <meta name="theme-color" content="#fafafa">

   </head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="jauge.php">Jauge</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="Parametre.php">Manager</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

    <div>
        <p class="textHeader" id="deb">Museum Vision</p>
        <p class="textHeader" id="fin">Un autre regard sur notre histoire</p>
    </div>

</header>
<label for="EntAld">Nombre d'entrée Adulte</label>
<input type="number" id="EntAld" name="EntAld"
       min="0" max="100">
<br>
<label for="EntEnf">Nombre d'entrée Enfant</label>
<input type="number" id="EntEnf" name="EntEnf"
       min="0" max="100">
<?php
for ($i = 0; $i < count($listeRestos); $i++){
    ?>
<form>
    <input type="checkbox" id=expo"<?php echo $donnees['id']?>">
    <label for=expo"<?php echo $donnees['id']?>><?php echo '' . $donnees['nom']?></label><br>
    <?php
} ?>
</form>
<input type="button" onclick="myFunction()" value="Tarif">

<script>
    function myFunction()
    {
        alert("Restant a Payer :\nJSP j'ai pas fait la fonction pour calculer encore");
    }
</script>


<script src="js/jquery-3.4.1.min.js"></script>
</body>
</html>
