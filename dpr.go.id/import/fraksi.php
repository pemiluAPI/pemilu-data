<?php
require_once 'database.php';

$file = new SplFileObject("../fraksi.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE fraksi');

$query = $access->prepare('INSERT INTO fraksi (nama, singkatan, jumlah_anggota, presentase)
               VALUES (:nama, :singkatan, :jumlah_anggota, :presentase)
               ON DUPLICATE KEY UPDATE
               nama = VALUES(nama),
               singkatan = VALUES(singkatan),
               jumlah_anggota = VALUES(jumlah_anggota),
               presentase = VALUES(presentase)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($nama, $singkatan, $jumlah_anggota, $presentase) = $row;

      //skip first row
      if ($nama != 'nama_fraksi'){
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->bindParam(':singkatan', $singkatan, PDO::PARAM_STR);
        $query->bindParam(':jumlah_anggota', $jumlah_anggota, PDO::PARAM_INT);
        $query->bindParam(':presentase', $presentase, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
}
?>
