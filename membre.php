<!DOCTYPE html>
<html lang="fr">

<head>
    <title>My Cinema</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@1,200;1,300&family=Red+Hat+Mono:ital,wght@1,300&family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a class="navbar" href="my_cinema.php">Accueil</a>
        <a class="navbar" href="historique.php">Historique</a>
    </header>

    <div class="recherche_membre">
        <h2>Recherche un membre</h2>
        <form method="POST" class="formulaire">
            <input name="search" type="text" placeholder="ex: Léa" />
            <input name="button" type="submit" value="recherche" />
            <?php include 'php/recherche_membre.php' ?>
        </form>
    </div>

    <footer>
        <p>© There is no birds here Look around.</p>
    </footer>

</body>

</html>