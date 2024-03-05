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
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) : ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                        <img src="<?php echo $oeuvre['picture']; ?>" alt="<?php echo $oeuvre['alt']; ?>">
                        <h2><?php echo $oeuvre['title']?></h2>
                        <p class="description"> <?php echo $oeuvre['artist']; ?> </p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>