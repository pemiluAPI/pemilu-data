<?php
require_once 'database.php';

$file = new SplFileObject("../CSV/cities.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE cities');

$query = $access->prepare('INSERT INTO cities (id, region_id, region_name, name, pemilih, pengguna_hak_pilih, perolehan_suara, suara_sah, suara_tidak_sah, total_suara, link, resource)
               VALUES (:id, :region_id, :region_name, :name, :pemilih, :pengguna_hak_pilih, :perolehan_suara, :suara_sah, :suara_tidak_sah, :total_suara, :link, :resource)
               ON DUPLICATE KEY UPDATE
                id = VALUES(id),
                region_id = VALUES(region_id),
                region_name = VALUES(region_name),
                name = VALUES(name),
                pemilih = VALUES(pemilih),
                pengguna_hak_pilih = VALUES(pengguna_hak_pilih),
                perolehan_suara = VALUES(perolehan_suara),
                suara_sah = VALUES(suara_sah),
                suara_tidak_sah = VALUES(suara_tidak_sah),
                total_suara = VALUES(total_suara),
                link = VALUES(link),
                resource = VALUES(resource)
               ');

foreach ($file as $row) {
  if($row[0] != 'id') {
        $row = array_filter($row);
        if(!empty($row)){
          list(
              $id,
              $region_id,
              $region_name,
              $name,
              $pemilih,
              $pengguna_hak_pilih,
              $perolehan_suara,
              $suara_sah,
              $suara_tidak_sah,
              $total_suara,
              $link,
              $resource
          ) = $row;

      //skip first row
      if ($id != 'id'){
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->bindParam(':region_id', $region_id, PDO::PARAM_STR);
        $query->bindParam(':region_name', $region_name, PDO::PARAM_STR);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':pemilih', $pemilih, PDO::PARAM_STR);
        $query->bindParam(':pengguna_hak_pilih', $pengguna_hak_pilih, PDO::PARAM_STR);
        $query->bindParam(':perolehan_suara', $perolehan_suara, PDO::PARAM_STR);
        $query->bindParam(':suara_sah', $suara_sah, PDO::PARAM_STR);
        $query->bindParam(':suara_tidak_sah', $suara_tidak_sah, PDO::PARAM_STR);
        $query->bindParam(':total_suara', $total_suara, PDO::PARAM_STR);
        $query->bindParam(':link', $link, PDO::PARAM_STR);
        $query->bindParam(':resource', $resource, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
  }
}
?>