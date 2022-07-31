<?php 

require_once 'db.php';

if (isset($_POST['query'])) {
  $inpText = $_POST['query'];
  $sql = 'SELECT brand FROM getfile WHERE brand LIKE :brand';
  $stmt = $database->prepare($sql);
  $stmt->execute(['brand' => '%' . $inpText . '%']);
  $result = $stmt->fetchAll();

  if ($result) {
    foreach ($result as $row) {
      echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['brand'] . '</a>';
    }
  } else {
    echo '<p class="list-group-item border-1">No Record</p>';
  }
}
//   header("location:index.php");
  ?>