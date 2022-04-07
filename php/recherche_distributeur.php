 <?php include 'basededonnée.php' ?>
 <?php
  if (!empty($_POST["search2"]) || $_POST["search2"] != "") {
    $real = $_POST['search2'];

    $select_real = $bdd->prepare("SELECT distributor.name, movie.title FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id WHERE name LIKE '" . $real . "%' LIMIT 30");
    $select_real->execute();
    $resultats = $select_real->fetchAll(PDO::FETCH_ASSOC);
  }
  ?>

 <div>
   <ul>
     <?php foreach ($resultats as $value) {
        echo "<li>" . $value['name'] . " - " . $value["title"] . "</li>";
      }
      ?>
   </ul>
 </div>

 