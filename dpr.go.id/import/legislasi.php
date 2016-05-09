<?php
require_once 'database.php';

$file = new SplFileObject("../Legislasi/legislasi.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE legislasi');

$query = $access->prepare('INSERT INTO legislasi (kategori, tahun, judul, pengusul, page_url)
               VALUES (:kategori, :tahun, :judul, :pengusul, :page_url)
               ON DUPLICATE KEY UPDATE
                kategori = VALUES(kategori),
                tahun = VALUES(tahun),
                judul = VALUES(judul),
                pengusul = VALUES(pengusul),
                page_url = VALUES(page_url)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($kategori, $tahun, $judul, $pengusul, $page_url) = $row;

      //skip first row
      if ($kategori != 'kategori'){
        $query->bindParam(':kategori', $kategori, PDO::PARAM_STR);
        $query->bindParam(':tahun', $tahun, PDO::PARAM_STR);
        $query->bindParam(':judul', $judul, PDO::PARAM_STR);
        $query->bindParam(':pengusul', $pengusul, PDO::PARAM_STR);
        $query->bindParam(':page_url', $page_url, PDO::PARAM_STR);
        $query->execute();

        echo $kategori . "\n";
      }
    }
}
?>
