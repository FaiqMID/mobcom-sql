<?php
$user = "";
$password = "";
$database = "";
$table = "";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  
  foreach($db->query("SELECT info FROM $table") as $row) {
    echo "<h1>" . $row['info'] . "</h1>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
