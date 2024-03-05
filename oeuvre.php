<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php'); ?>
    <?php include('oeuvres.php'); ?>
    <main>
            <article id="detail-oeuvre">
                
                <?php
                if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
                    $id = (int)$_GET['id'];

                    function findOeuvreById($id, $oeuvres)
                    {
                        foreach ($oeuvres as $oeuvre) {
                            if ($oeuvre['id'] == $id) {
                                return $oeuvre;
                            }
                        }
                        return null;
                    }

                    $foundOeuvre = findOeuvreById($id, $oeuvres);

                    if ($foundOeuvre) :
                ?>

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
                        echo 'Oeuvre non trouvée.';
                    endif;
                } else {
                    echo 'ID de l\'oeuvre invalide ou manquant.';
                }
                ?>
            </article>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>