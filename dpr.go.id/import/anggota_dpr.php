<?php
require_once 'database.php';

$file = new SplFileObject("../AnggotaDPR/anggota_dpr.csv");
$file->setFlags(SplFileObject::READ_CSV);

try{
  $access = new PDO($dsn, $user, $password);
  $access->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}

//drop the target table
$access->query('TRUNCATE TABLE anggota_dpr');

$query = $access->prepare('INSERT INTO anggota_dpr (no_anggota, no_anggota_lengkap, nama, fraksi, daerah_pemilihan, foto_url, agama, tempat_lahir, tanggal_lahir, riwayat_pendidikan, riwayat_pekerjaan, riwayat_organisasi, riwayat_pergerakan, riwayat_penghargaan, riwayat_kunjungan_luar_negri, page_url)
               VALUES (:no_anggota, :no_anggota_lengkap, :nama, :fraksi, :daerah_pemilihan, :foto_url, :agama, :tempat_lahir, :tanggal_lahir, :riwayat_pendidikan, :riwayat_pekerjaan, :riwayat_organisasi, :riwayat_pergerakan, :riwayat_penghargaan, :riwayat_kunjungan_luar_negri, :page_url)
               ON DUPLICATE KEY UPDATE
                no_anggota = VALUES(no_anggota),
                no_anggota_lengkap = VALUES(no_anggota_lengkap),
                nama = VALUES(nama),
                fraksi = VALUES(fraksi),
                daerah_pemilihan = VALUES(daerah_pemilihan),
                foto_url = VALUES(foto_url),
                agama = VALUES(agama),
                tempat_lahir = VALUES(tempat_lahir),
                tanggal_lahir = VALUES(tanggal_lahir),
                riwayat_pendidikan = VALUES(riwayat_pendidikan),
                riwayat_pekerjaan = VALUES(riwayat_pekerjaan),
                riwayat_organisasi = VALUES(riwayat_organisasi),
                riwayat_pergerakan = VALUES(riwayat_pergerakan),
                riwayat_penghargaan = VALUES(riwayat_penghargaan),
                riwayat_kunjungan_luar_negri = VALUES(riwayat_kunjungan_luar_negri),
                page_url = VALUES(page_url)');

foreach ($file as $row) {
    $row = array_filter($row);
    if(!empty($row)){
      list($no_anggota, $no_anggota_lengkap, $nama, $fraksi, $daerah_pemilihan, $foto_url, $agama, $tempat_lahir, $tanggal_lahir, $riwayat_pendidikan, $riwayat_pekerjaan, $riwayat_organisasi, $riwayat_pergerakan, $riwayat_penghargaan, $riwayat_kunjungan_luar_negri, $page_url) = $row;

      //skip first row
      if ($no_anggota != 'no_anggota'){
        $query->bindParam(':no_anggota', $no_anggota, PDO::PARAM_STR);
        $query->bindParam(':no_anggota_lengkap', $no_anggota_lengkap, PDO::PARAM_STR);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->bindParam(':fraksi', $fraksi, PDO::PARAM_STR);
        $query->bindParam(':daerah_pemilihan', $daerah_pemilihan, PDO::PARAM_STR);
        $query->bindParam(':foto_url', $foto_url, PDO::PARAM_STR);
        $query->bindParam(':agama', $agama, PDO::PARAM_STR);
        $query->bindParam(':tempat_lahir', $tempat_lahir, PDO::PARAM_STR);
        $query->bindParam(':tanggal_lahir', $tanggal_lahir, PDO::PARAM_STR);
        $query->bindParam(':riwayat_pendidikan', $riwayat_pendidikan, PDO::PARAM_STR);
        $query->bindParam(':riwayat_pekerjaan', $riwayat_pekerjaan, PDO::PARAM_STR);
        $query->bindParam(':riwayat_organisasi', $riwayat_organisasi, PDO::PARAM_STR);
        $query->bindParam(':riwayat_pergerakan', $riwayat_pergerakan, PDO::PARAM_STR);
        $query->bindParam(':riwayat_penghargaan', $riwayat_penghargaan, PDO::PARAM_STR);
        $query->bindParam(':riwayat_kunjungan_luar_negri', $riwayat_kunjungan_luar_negri, PDO::PARAM_STR);
        $query->bindParam(':page_url', $page_url, PDO::PARAM_STR);
        $query->execute();

        echo $id . "\n";
      }
    }
}
?>
