<?php
require_once 'database.php';

$file = new SplFileObject("../AKD/anggota_akd.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE anggota_alat_kelengkapan');

$query = $access->prepare('INSERT INTO anggota_alat_kelengkapan (no_anggota, nama, foto_url, daerah_pemilihan, fraksi, jabatan, alat_kelengkapan, page_url)
               VALUES (:no_anggota, :nama, :foto_url, :daerah_pemilihan, :fraksi, :jabatan, :alat_kelengkapan, :page_url)
               ON DUPLICATE KEY UPDATE
                no_anggota = VALUES(no_anggota),
                nama = VALUES(nama),
                foto_url = VALUES(foto_url),
                daerah_pemilihan = VALUES(daerah_pemilihan),
                fraksi = VALUES(fraksi),
                jabatan = VALUES(jabatan),
                alat_kelengkapan = VALUES(alat_kelengkapan),
                page_url = VALUES(page_url)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($no_anggota, $nama, $foto_url, $daerah_pemilihan, $fraksi, $jabatan, $alat_kelengkapan, $page_url) = $row;

      //skip first row
      if ($no_anggota != 'no_anggota'){
        $query->bindParam(':no_anggota', $no_anggota, PDO::PARAM_STR);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->bindParam(':foto_url', $foto_url, PDO::PARAM_STR);
        $query->bindParam(':daerah_pemilihan', $daerah_pemilihan, PDO::PARAM_STR);
        $query->bindParam(':fraksi', $fraksi, PDO::PARAM_STR);
        $query->bindParam(':jabatan', $jabatan, PDO::PARAM_STR);
        $query->bindParam(':alat_kelengkapan', $alat_kelengkapan, PDO::PARAM_STR);
        $query->bindParam(':page_url', $page_url, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
}
?>
