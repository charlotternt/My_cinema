<?php include 'basededonnée.php' ?>
<?php
if (!empty($_POST["film"]) || $_POST["film"] != "") {
  $mot = $_POST["film"];

  $select_mot = $bdd->prepare("SELECT title FROM movie WHERE title LIKE '%" . $mot . "%'  LIMIT 20");
  $select_mot->execute();
  $result = $select_mot->fetchAll(PDO::FETCH_ASSOC);

}
?>
<div>
  <ul>
    <?php foreach ($result as $value) {
      echo "<li>" . $value["title"] . "</li>";
    }
    ?>
  </ul>
</div>