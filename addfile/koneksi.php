<?php
try {
    $koneksi = New PDO ("firebird:dbname=127.0.0.1:C:/edital/banco/INDOOR.FDB", "SYSDBA", "masterkey");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
