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
        <!-- Section des détails de l'œuvre -->
        <article id="detail-oeuvre">

            <?php
            // Vérifie si l'identifiant de l'œuvre est présent et est un entier
            if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
                // Convertit l'identifiant en entier pour des raisons de sécurité
                $id = (int)$_GET['id'];

                //Fonction pour trouver une œuvre par son identifiant.
                function findOeuvreById($id, $oeuvres)
                {
                    foreach ($oeuvres as $oeuvre) {
                        if ($oeuvre['id'] == $id) {
                            return $oeuvre;
                        }
                    }
                    return null;
                }

                // Recherche de l'œuvre par son identifiant dans le tableau des œuvres
                $foundOeuvre = findOeuvreById($id, $oeuvres);

                if ($foundOeuvre) :
            ?>
                    <!-- Affichage des détails de l'œuvre trouvée -->
                    <div id="img-oeuvre">
                        <img src="<?php echo $foundOeuvre['picture']; ?>" alt="<?php echo $foundOeuvre['alt']; ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $foundOeuvre['title']; ?></h1>
                        <p class="description"><?php echo $foundOeuvre['artist']; ?></p>
                        <p class="description-complete"><?php echo $foundOeuvre['description']; ?></p>
                    </div>
            <?php
                else :
                    echo 'Œuvre non trouvée.';
                endif;
            } else {
                echo 'ID de l\'œuvre invalide ou manquant.';
            }
            ?>
        </article>
    </main>
    <!-- Inclusion du contenu du footer -->
    <?php include('footer.php'); ?>
</body>

</html>