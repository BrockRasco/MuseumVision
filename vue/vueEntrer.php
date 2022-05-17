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


    <div>
        <p class="textHeader" id="deb">Museum Vision</p>
        <p class="textHeader" id="fin">Un autre regard sur notre histoire</p>
    </div>

</header>
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

<html>
<head>
    <script>
        function myFunction() {
            var x;
            var r = confirm("Le Formulaire est remplie correctement ?");
            if (r == true) {
                x = "Voici votre Tarif :";
            }
            else {
                x = "Veuillez remplir correctement le formulaire";
            }
            document.getElementById("demo").innerHTML = x;
        }
    </script>
</head>
<body>
<button type="submit" onclick="myFunction()">Tarif</button>
<p id="demo"></p>
</body>
</html>

<script src="js/jquery-3.4.1.min.js"></script>
</body>
</html>
