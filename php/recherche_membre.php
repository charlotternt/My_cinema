  <?php include 'basededonnée.php' ?>

  <?php
  if (!empty($_POST["search"]) || $_POST["search"] != "") {
    $membre = $_POST['search'];
    $select_membre = $bdd->prepare("SELECT firstname, lastname FROM user WHERE firstname LIKE '%" . $membre . "%' OR lastname LIKE '%" . $membre . "%' LIMIT 50");
    $select_membre->execute();
    $result = $select_membre->fetchAll(PDO::FETCH_ASSOC);
  }
  ?>

  <div>
    <ul>
      <?php foreach ($result as $value) {
        echo "<li>" . $value["firstname"] . " " . $value["lastname"] . "</li>";
      }
      ?>
    </ul>
  </div>