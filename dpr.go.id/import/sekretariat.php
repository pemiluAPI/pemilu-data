<?php
require_once 'database.php';

$file = new SplFileObject("../AKD/sekretariat.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE sekretariat_alat_kelengkapans');

$query = $access->prepare('INSERT INTO sekretariat_alat_kelengkapans (nip, nama, foto_url, jabatan, alat_kelengkapan, page_url)
               VALUES (:nip, :nama, :foto_url, :jabatan, :alat_kelengkapan, :page_url)
               ON DUPLICATE KEY UPDATE
               nip = VALUES (nip),
               nama = VALUES (nama),
               foto_url = VALUES (foto_url),
               jabatan = VALUES (jabatan),
               alat_kelengkapan = VALUES (alat_kelengkapan),
               page_url = VALUES (page_url)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($nip, $nama, $foto_url, $jabatan, $alat_kelengkapan, $page_url) = $row;

      //skip first row
      if ($nip != 'nip'){
        $query->bindParam(':nip', $nip, PDO::PARAM_STR);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->bindParam(':foto_url', $foto_url, PDO::PARAM_STR);
        $query->bindParam(':jabatan', $jabatan, PDO::PARAM_STR);
        $query->bindParam(':alat_kelengkapan', $alat_kelengkapan, PDO::PARAM_STR);
        $query->bindParam(':page_url', $page_url, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
}
?>
