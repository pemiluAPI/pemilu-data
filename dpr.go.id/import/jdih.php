<?php
require_once 'database.php';

$file = new SplFileObject("../JDIH/jdih.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE jdih');

$query = $access->prepare('INSERT INTO jdih (kategori, tentang, dokumen_url, tanggal_ditetapkan)
               VALUES (:kategori, :tentang, :dokumen_url, :tanggal_ditetapkan)
               ON DUPLICATE KEY UPDATE
                kategori = VALUES(kategori),
                tentang = VALUES(tentang),
                dokumen_url = VALUES(dokumen_url),
                tanggal_ditetapkan = VALUES(tanggal_ditetapkan)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($kategori, $tentang, $dokumen_url, $tanggal_ditetapkan) = $row;

      //skip first row
      if ($kategori != 'kategori'){
        $query->bindParam(':kategori', $kategori, PDO::PARAM_STR);
        $query->bindParam(':tentang', $tentang, PDO::PARAM_STR);
        $query->bindParam(':dokumen_url', $dokumen_url, PDO::PARAM_STR);
        $query->bindParam(':tanggal_ditetapkan', $tanggal_ditetapkan, PDO::PARAM_STR);
        $query->execute();

        echo $kategori . "\n";
      }
    }
}
?>
