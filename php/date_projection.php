 <?php include 'basededonnée.php' ?>

         <?php
            if (!empty($_POST["search"]) || $_POST["search"] != "") {
                $date = $_POST['search'];

                $seance = $bdd->prepare("SELECT movie.title, movie_schedule.date_begin FROM movie INNER JOIN movie_schedule ON movie_schedule.id_movie = movie.id WHERE movie_schedule.date_begin LIKE '%$date%'  LIMIT 20");
                $seance->execute();
                $heure = $seance->fetchAll(PDO::FETCH_ASSOC);
            }
            ?>

         <div>
             <ul>
                 <?php foreach ($heure as $value) {
                        echo "<li>" . $value["date_begin"] . " - " . $value["title"] . "</li>";
                    }
                    ?>
             </ul>
         </div>
