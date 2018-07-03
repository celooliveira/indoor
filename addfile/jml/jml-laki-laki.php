<?php
include '../conexao.php';
$jk="SC";
$konoperacaoi = Conexao::getInstance();
$laki = $konoperacaoi->prepare("SELECT COUNT(C_UF) FROM TBAGE WHERE C_UF=:UF");
$laki->bindParam(':UF',$jk);
$laki->execute();
$data = $laki->fetch(PDO::FETCH_NUM);
echo $data[0];
?>
