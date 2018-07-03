<?php
include '../conexao.php';

$operacao = $_GET['operacao'];
$conexao = Conexao::getInstance();

if ($operacao=="inserir") {
  $cidade = $_POST['cidade'];
  
  $sql = "INSERT INTO TBCID (C_CIDADE) VALUES (:cidade)";
  $inserir = $conexao->prepare($sql);

  $inserir->bindParam(':cidade',$cidade);
  $inserir->execute();
}

elseif ($operacao=="excluir") {
  $cidade = $_POST['cidade'];

  $excluir = $conexao->prepare("DELETE FROM TBCID WHERE C_CIDADE=:cidade");
  $excluir->bindParam(':cidade',$cidade);
  $excluir->execute();
}

elseif ($operacao=="mostrar") {
     $cidade = $_POST['cidade'];
     $mostrar =$conexao->prepare("SELECT * FROM TBCID WHERE C_CIDADE=:CIDADE");
     $mostrar->bindParam(':CIDADE',$cidade);
     $mostrar->execute();
     $data = $mostrar->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($operacao=="update") {
    $cidade = $_POST['cidade'];
    
    $sql = "UPDATE TBCID SET C_CIDADE=:CIDADE WHERE C_CIDADE=:CIDADE ";
    $update = $conexao->prepare($sql);

    $update->bindParam(':CIDADE',$cidade);
    $update->execute();
   }
?>
