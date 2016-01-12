<?php

require_once('database.php');

$file = new SplFileObject("recapitulations.csv");
$file->setFlags(SplFileObject::READ_CSV);

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

// Drop the target table
$dbh->query('TRUNCATE TABLE recapitulations');
$sth = $dbh->prepare('INSERT INTO recapitulations (
    id,
    entity_type,
    entity_id,
    sub_districts_id,
    voice,
    description
) VALUES (
    :id,
    :entity_type,
    :entity_id,
    :sub_districts_id,
    :voice,
    :description
) ON DUPLICATE KEY UPDATE
    id = VALUES(id),
    entity_type = VALUES(entity_type),
    entity_id = VALUES(entity_id),
    sub_districts_id = VALUES(sub_districts_id),
    voice = VALUES(voice),
    description = VALUES(description)
');

foreach ($file as $row) {
    if($row[0] != 'id') {
        $row = array_filter($row);
        if(!empty($row)){
            list(
                $id,
                $entity_type,
                $entity_id,
                $sub_districts_id,
                $voice,
                $description
            ) = $row;

            // Skip first row
            if ($id != 'id') {
                $sth->bindParam(':id', $id, PDO::PARAM_STR);
                $sth->bindParam(':entity_type', $entity_type, PDO::PARAM_STR);
                $sth->bindParam(':entity_id', $entity_id, PDO::PARAM_STR);
                $sth->bindParam(':sub_districts_id', $sub_districts_id, PDO::PARAM_STR);
                $sth->bindParam(':voice', $voice, PDO::PARAM_STR);
                $sth->bindParam(':description', $description, PDO::PARAM_STR);
                $sth->execute();

                echo $description . "\n";
            }
        }
    }
}
?>