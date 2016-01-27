<?php
require_once 'database.php';

$file = new SplFileObject("../suara_data.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE suara_data');

$query = $access->prepare('INSERT INTO suara_data (id, location_id, suara_sah, suara_tidak_sah, total_suara, jumlah_suara_tertulis, selisih)
               VALUES (:id, :location_id, :suara_sah, :suara_tidak_sah, :total_suara, :jumlah_suara_tertulis, :selisih)
               ON DUPLICATE KEY UPDATE
               id = VALUES (id),
                location_id = VALUES (location_id),
                suara_sah = VALUES (suara_sah),
                suara_tidak_sah = VALUES (suara_tidak_sah),
                total_suara = VALUES (total_suara),
                jumlah_suara_tertulis = VALUES (jumlah_suara_tertulis),
                selisih = VALUES (selisih)');

foreach ($file as $row) {
  if($row[0] != 'id') {
        $row = array_filter($row);
        if(!empty($row)){
          list(
              $id,
              $location_id,
              $suara_sah,
              $suara_tidak_sah,
              $total_suara,
              $jumlah_suara_tertulis,
              $selisih
          ) = $row;

      //skip first row
      if ($id != 'id'){
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->bindParam(':location_id' ,$location_id, PDO::PARAM_STR);
        $query->bindParam(':suara_sah' ,$suara_sah, PDO::PARAM_STR);
        $query->bindParam(':suara_tidak_sah' ,$suara_tidak_sah, PDO::PARAM_STR);
        $query->bindParam(':total_suara' ,$total_suara, PDO::PARAM_STR);
        $query->bindParam(':jumlah_suara_tertulis' ,$jumlah_suara_tertulis, PDO::PARAM_STR);
        $query->bindParam(':selisih' ,$selisih, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
  }
}
?>