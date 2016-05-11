<?php
require_once 'database.php';

$file = new SplFileObject("../JDIH/jdih_kategori.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE jdih_kategori');

$query = $access->prepare('INSERT INTO jdih_kategori (nama)
               VALUES (:nama)
               ON DUPLICATE KEY UPDATE
               nama = VALUES(nama)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($nama) = $row;

      //skip first row
      if ($nama != 'nama'){
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->execute();

        echo $nama . "\n";
      }
    }
}
?>
