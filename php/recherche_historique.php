<?php include 'basededonnée.php' ?>

<?php
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    $historique = $bdd->prepare("SELECT movie.title FROM movie INNER JOIN movie_schedule ON movie_schedule.id_movie = movie.id INNER JOIN membership_log ON membership_log.id_session = movie_schedule.id INNER JOIN membership ON membership.id = membership_log.id_membership INNER JOIN user ON membership.id_user= user.id WHERE user.firstname LIKE '$prenom' AND user.lastname LIKE '$nom' LIMIT 50");
    $historique->execute();
    $film = $historique->fetchAll(PDO::FETCH_ASSOC);
?>

<div>
    <ul>
        <?php foreach ($film as $value) {
            echo "<li>" . $value['name'] . "  " . $value["title"] . "</li>";}
        ?>
    </ul>
</div>