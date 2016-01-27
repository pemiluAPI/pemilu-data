<?php
require_once 'database.php';

$file = new SplFileObject("../pemilih_data.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE pemilih_data');

$query = $access->prepare('INSERT INTO pemilih_data (id, location_id, jumlah_pemilih_laki_laki, pengguna_hak_pilih_laki_laki, jumlah_pemilih_perempuan, pengguna_hak_pilih_perempuan, total_pemilih, total_pengguna_hak_pilih, jumlah_pemilih_disabilitas, pengguna_hak_pilih)
               VALUES (:id, :location_id, :jumlah_pemilih_laki_laki, :pengguna_hak_pilih_laki_laki, :jumlah_pemilih_perempuan, :pengguna_hak_pilih_perempuan, :total_pemilih, :total_pengguna_hak_pilih, :jumlah_pemilih_disabilitas, :pengguna_hak_pilih)
               ON DUPLICATE KEY UPDATE
                id = VALUES (id),
                location_id = VALUES (location_id),
                jumlah_pemilih_laki_laki = VALUES (jumlah_pemilih_laki_laki),
                pengguna_hak_pilih_laki_laki = VALUES (pengguna_hak_pilih_laki_laki),
                jumlah_pemilih_perempuan = VALUES (jumlah_pemilih_perempuan),
                pengguna_hak_pilih_perempuan = VALUES (pengguna_hak_pilih_perempuan),
                total_pemilih = VALUES (total_pemilih),
                total_pengguna_hak_pilih = VALUES (total_pengguna_hak_pilih),
                jumlah_pemilih_disabilitas = VALUES (jumlah_pemilih_disabilitas),
                pengguna_hak_pilih = VALUES (pengguna_hak_pilih)');

foreach ($file as $row) {
  if($row[0] != 'id') {
        $row = array_filter($row);
        if(!empty($row)){
          list(
              $id,
              $location_id,
              $jumlah_pemilih_laki_laki,
              $pengguna_hak_pilih_laki_laki,
              $jumlah_pemilih_perempuan,
              $pengguna_hak_pilih_perempuan,
              $total_pemilih,
              $total_pengguna_hak_pilih,
              $jumlah_pemilih_disabilitas,
              $pengguna_hak_pilih
          ) = $row;

      //skip first row
      if ($id != 'id'){
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->bindParam(':location_id', $location_id, PDO::PARAM_STR);
        $query->bindParam(':jumlah_pemilih_laki_laki', $jumlah_pemilih_laki_laki, PDO::PARAM_STR);
        $query->bindParam(':pengguna_hak_pilih_laki_laki', $pengguna_hak_pilih_laki_laki, PDO::PARAM_STR);
        $query->bindParam(':jumlah_pemilih_perempuan', $jumlah_pemilih_perempuan, PDO::PARAM_STR);
        $query->bindParam(':pengguna_hak_pilih_perempuan', $pengguna_hak_pilih_perempuan, PDO::PARAM_STR);
        $query->bindParam(':total_pemilih', $total_pemilih, PDO::PARAM_STR);
        $query->bindParam(':total_pengguna_hak_pilih', $total_pengguna_hak_pilih, PDO::PARAM_STR);
        $query->bindParam(':jumlah_pemilih_disabilitas', $jumlah_pemilih_disabilitas, PDO::PARAM_STR);
        $query->bindParam(':pengguna_hak_pilih', $pengguna_hak_pilih, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
  }
}
?>