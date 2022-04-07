  <?php include 'basededonnée.php' ?>
  <?php
 
 if(!empty($_POST["genre"])){
    $genre = $_POST["genre"];
    $select_genre = $bdd->prepare("SELECT genre.name, movie.title FROM movie_genre INNER JOIN genre ON movie_genre.id_genre = genre.id JOIN movie ON movie.id = movie_genre.id_movie WHERE genre.name LIKE '%" . $genre . "%' LIMIT 20");
    $select_genre->execute();
    $resultat = $select_genre->fetchAll(PDO::FETCH_ASSOC);
 }
  ?>

  <div>
    <ul>
      <?php foreach ($resultat as $value) {
        echo "<li>" . $value["name"] . " - ". $value["title"] . "</li>";
      }
      ?>
    </ul>
  </div>