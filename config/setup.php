<?php
require_once("database.php");
include('../View/header.php');
try {
    $db = database_connect();
    $sql_create_data_tbl = <<<EOSQL
CREATE TABLE data (
  id int(11) NOT NULL AUTO_INCREMENT,
  login varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  picture text COLLATE utf8_unicode_ci NOT NULL,
  likes int(11) DEFAULT '0',
  liker text COLLATE utf8_unicode_ci,
  comments text COLLATE utf8_unicode_ci,
  PRIMARY KEY (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE=utf8_unicode_ci
EOSQL;

    $sql_create_user_db_tbl = <<<EOSQL
CREATE TABLE user 
( `id` INT NOT NULL AUTO_INCREMENT,
`username` VARCHAR(8) NOT NULL,
`mail` VARCHAR(255) NOT NULL,
`passwd` VARCHAR(255) NOT NULL,
`active` binary(1) NOT NULL default '0',
`cle` VARCHAR(255) NOT NULL,
PRIMARY KEY (`id`))
ENGINE = InnoDB;
EOSQL;
    $msg = '';

    $r = $db->exec($sql_create_data_tbl);

    if ($r !== false) {

        $r = $db->exec($sql_create_user_db_tbl);

        if ($r !== false) {
            $msg = "Tables are created successfully!." . "<br>";
        } else {
            $msg = "Error creating the employees table." . "<br>";
        }

    } else {
        $msg = "Error creating the departments table." . "<br>";
    }

    // display the message
    if ($msg != '')
        echo $msg . "\n";

} catch (PDOException $e) {
    echo "<br>" . $e->getMessage();
}

