<?php
require_once 'database.php';

$file = new SplFileObject("../riset_partisipasi.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE riset_partisipasis');

$query = $access->prepare('INSERT INTO riset_partisipasis (id, location_id, suara_data_id, pemilih_data_id)
               VALUES (:id, :location_id, :suara_data_id, :pemilih_data_id)
               ON DUPLICATE KEY UPDATE
                id = VALUES (id),
                location_id = VALUES (location_id),
                suara_data_id = VALUES (suara_data_id),
                pemilih_data_id = VALUES (pemilih_data_id)');

foreach ($file as $row) {
  if($row[0] != 'id') {
        $row = array_filter($row);
        if(!empty($row)){
          list(
              $id,
              $location_id,
              $suara_data_id,
              $pemilih_data_id
          ) = $row;

      //skip first row
      if ($id != 'id'){
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->bindParam(':location_id' ,$location_id, PDO::PARAM_STR);
        $query->bindParam(':suara_data_id' ,$suara_data_id, PDO::PARAM_STR);
        $query->bindParam(':pemilih_data_id' ,$pemilih_data_id, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
  }
}
?>