<?php
require_once 'database.php';

$file = new SplFileObject("../BeritaDPR/berita.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE berita');

$query = $access->prepare('INSERT INTO berita (kategori, tanggal, judul, deskripsi, page_url)
               VALUES (:kategori, :tanggal, :judul, :deskripsi, :page_url)
               ON DUPLICATE KEY UPDATE
               kategori = VALUES(kategori),
               tanggal = VALUES(tanggal),
               judul = VALUES(judul),
               deskripsi = VALUES(deskripsi),
               page_url = VALUES(page_url)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($kategori, $tanggal, $judul, $deskripsi, $page_url) = $row;

      //skip first row
      if ($kategori != 'kategori'){
        $query->bindParam(':kategori', $kategori, PDO::PARAM_STR);
        $query->bindParam(':tanggal', $tanggal , PDO::PARAM_STR);
        $query->bindParam(':judul', $judul, PDO::PARAM_STR);
        $query->bindParam(':deskripsi', $deskripsi, PDO::PARAM_STR);
        $query->bindParam(':page_url', $page_url, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
}
?>
