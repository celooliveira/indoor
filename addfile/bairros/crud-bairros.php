<?php
include '../conexao.php';

$operacao = $_GET['operacao'];
$conexao = Conexao::getInstance();

if ($operacao=="inserir") {
  $bairro = $_POST['bairro'];
  
  $sql = "INSERT INTO TBBAI (C_BAIRRO) VALUES (:bairro)";
  $inserir = $conexao->prepare($sql);

  $inserir->bindParam(':bairro',$bairro);
  $inserir->execute();
}

elseif ($operacao=="excluir") {
  $bairro = $_POST['bairro'];

  $excluir = $conexao->prepare("DELETE FROM TBBAI WHERE C_BAIRRO=:bairro");
  $excluir->bindParam(':bairro',$bairro);
  $excluir->execute();
}

elseif ($operacao=="mostrar") {
     $bairro = $_POST['bairro'];
     $mostrar =$conexao->prepare("SELECT * FROM TBBAI WHERE C_BAIRRO=:BAIRRO");
     $mostrar->bindParam(':BAIRRO',$bairro);
     $mostrar->execute();
     $data = $mostrar->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($operacao=="update") {
    $bairro = $_POST['bairro'];
    
    $sql = "UPDATE TBBAI SET C_BAIRRO=:BAIRRO WHERE C_BAIRRO=:BAIRRO ";
    $update = $conexao->prepare($sql);

    $update->bindParam(':BAIRRO',$bairro);
    $update->execute();
   }
?>
