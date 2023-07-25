<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <!-- Inclusion du contenu du header -->
    <?php include('header.php'); ?>

    <!-- Inclusion des données des œuvres -->
    <?php include('oeuvres.php'); ?>

    <main>
        <!-- Section de la liste des œuvres -->
        <div id="liste-oeuvres">
        <?php foreach ($oeuvres as $oeuvre): ?>
            <!-- Début de la balise "article" pour chaque œuvre -->
            <article class="oeuvre">
                <!-- Lien vers la page de détails de l'œuvre en utilisant l'identifiant comme paramètre GET -->
                <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                    <!-- Affichage de l'image de l'œuvre -->
                    <img src="<?php echo $oeuvre['picture']; ?>" alt="<?php echo $oeuvre['alt'];?>">
                    <!-- Affichage du nom de l'artiste -->
                    <h2> <?php echo $oeuvre['artist']; ?> </h2>
                    <!-- Affichage de la description de l'œuvre -->
                    <p class="description"> <?php echo $oeuvre['description']; ?> </p>
                </a>
            </article> 
            <!-- Fin de la balise "article" pour chaque œuvre -->
        <?php endforeach; ?>           
        </div>
    </main>

    <!-- Inclusion du contenu du footer -->
    <?php include('footer.php'); ?>
</body>
</html>
