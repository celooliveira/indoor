<?php
include '../conexao.php';
$jk="PR";
$konoperacaoi = Conexao::getInstance();
$perempuan = $konoperacaoi->prepare("SELECT COUNT(C_UF) FROM TBAGE WHERE C_UF=:UF");
$perempuan->bindParam(':UF',$jk);
$perempuan->execute();
$data = $perempuan->fetch(PDO::FETCH_NUM);
echo $data[0];
 ?>
