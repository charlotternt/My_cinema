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
        <h1>Cinéma</h1>

        <nav>
            <a class="navbar" href="membre.php">Membre</a>
            <a class="navbar" href="historique.php">Historique</a>
        </nav>
        </div>
    </header>

    <div class="position-affiche">
        <img class="affiche" src="style/conjuring2.jpg" alt="affiche Conjuring 2">
        <img class="affiche" src="style/captain_america.jpg" alt="affiche Captain America">
        <img class="affiche" src="style/film_silence.jpg" alt="affiche Silence">
    </div>

    <h2>Qu'est-ce qu'on regarde ce soir?</h2>

    <div class="searchbar-1">
        <h3>Recherche de film par titre</h3>
        <form action="" method="POST" class="formulaire">
            <input name="film" type="text" placeholder=" ex: Batman" />
            <input name="button" type="submit" value="recherche" />
            <?php include 'php/recherche_film.php' ?>
        </form>
    </div>

    <div class="searchbar-2">
        <h3>Recherche de film par distributeur</h3>
        <form method="POST" class="formulaire">
            <input name="search2" type="text" placeholder=" ex: Disney" />
            <input name="button" type="submit" value="recherche" />
            <?php include 'php/recherche_distributeur.php' ?>
        </form>
    </div>

    <div class="search">
        <h3>Recherche de film par genre</h3>
        <form method="POST" class="formulaire">

            <input type="radio" name="genre" value="action">
            <label for="genre">Action</label>

            <input type="radio" name="genre" value="adventure">
            <label for="genre">Aventure</label>

            <input type="radio" name="genre" value="Animation">
            <label for="genre">Animation</label> <br><br>

            <input type="radio" name="genre" value="Biography">
            <label for="genre">Biographie</label>

            <input type="radio" name="genre" value="comedy">
            <label for="genre">Comédie</label>

            <input type="radio" name="genre" value="crime">
            <label for="genre">Crime</label> <br><br>

            <input type="radio" name="genre" value="drama">
            <label for="genre">Drame</label>

            <input type="radio" name="genre" value="Family">
            <label for="genre">Familiale</label>

            <input type="radio" name="genre" value="Fantasy">
            <label for="genre">Fantastique</label> <br><br>

            <input type="radio" name="genre" value="Horror">
            <label for="genre">Horreur</label>

            <input type="radio" name="genre" value="Mystery">
            <label for="genre">Mystère</label>

            <input type="radio" name="genre" value="Romance">
            <label for="genre">Romance</label> <br><br>

            <input type="radio" name="genre" value="Sci-fi">
            <label for="genre">Science-fiction</label>

            <input type="radio" name="genre" value="Thriller">
            <label for="genre">Thriller</label>

            <input name="button" type="submit" value="recherche" />
            <?php include 'php/recherche_genre.php' ?>
        </form>
    </div>

    <div class="searchbar-3">
        <h3>Recherche un film par sa date de projection</h3>
        <form method="POST" class="formulaire">
            <input name="search" type="text" placeholder="date du film" />
            <input name="button" type="submit" value="valider" />
            <?php include 'php/date_projection.php' ?>
        </form>
    </div>

    <footer>
        <p>© There is no birds here Look around.</p>
    </footer>
</body>

</html>