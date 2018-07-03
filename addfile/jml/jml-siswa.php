<?php
include '../conexao.php';
$konoperacaoi = Conexao::getInstance();
$siswa = $konoperacaoi->prepare("SELECT COUNT(C_UF) FROM TBAGE");
$siswa->execute();
$data = $siswa->fetch(PDO::FETCH_NUM);
echo $data[0];
 ?>
