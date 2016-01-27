<?php
require_once 'database.php';

$file = new SplFileObject("../locations.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE locations');

$query = $access->prepare('INSERT INTO locations (id, name, home_url)
               VALUES (:id, :name, :home_url)
               ON DUPLICATE KEY UPDATE
               id = VALUES (id),
               name = VALUES (name),
               home_url = VALUES (home_url)');

foreach ($file as $row) {
  if($row[0] != 'id') {
        $row = array_filter($row);
        if(!empty($row)){
          list(
               $id,
               $name,
               $home_url
          ) = $row;

      //skip first row
      if ($id != 'id'){
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':home_url', $home_url, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
  }
}
?>