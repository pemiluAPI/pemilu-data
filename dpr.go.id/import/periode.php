<?php
require_once 'database.php';

$file = new SplFileObject("../periode.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE periode_dpr');

$query = $access->prepare('INSERT INTO periode_dpr (nama, periode)
               VALUES (:nama, :periode)
               ON DUPLICATE KEY UPDATE
               nama = VALUES(nama),
               periode = VALUES(periode)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($nama, $periode) = $row;

      //skip first row
      if ($nama != 'nama'){
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->bindParam(':periode', $periode, PDO::PARAM_STR);
        $query->execute();

        echo $nama . "\n";
      }
    }
}
?>
