<?php
include '../conexao.php';

$operacao = $_GET['operacao'];
$conexao = Conexao::getInstance();

if ($operacao=="inserir") {
  $uf = $_POST['uf'];
  $estado = $_POST['estado'];
  
  $sql = "INSERT INTO TBEST (C_UF,C_ESTADO) VALUES (:uf,:estado)";
  $inserir = $conexao->prepare($sql);

  $inserir->bindParam(':uf',$uf);
  $inserir->bindParam(':estado',$estado);
  $inserir->execute();
}

elseif ($operacao=="excluir") {
  $uf = $_POST['uf'];

  $excluir = $conexao->prepare("DELETE FROM TBEST WHERE C_UF=:uf");
  $excluir->bindParam(':uf',$uf);
  $excluir->execute();
}

elseif ($operacao=="mostrar") {
     $uf = $_POST['uf'];
     $mostrar =$conexao->prepare("SELECT * FROM TBEST WHERE C_UF=:UF");
     $mostrar->bindParam(':UF',$uf);
     $mostrar->execute();
     $data = $mostrar->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($operacao=="update") {
    $uf = $_POST['uf'];
    $estado = $_POST['estado'];
    
    $sql = "UPDATE TBEST SET C_ESTADO=:ESTADO WHERE C_UF=:UF ";
    $update = $conexao->prepare($sql);

    $update->bindParam(':UF',$uf);
    $update->bindParam(':ESTADO',$estado);
    $update->execute();
   }
?>
