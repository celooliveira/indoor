<?php
include 'conexao.php';

$operacao = $_GET['operacao'];
$konoperacaoi = Conexao::getInstance();

if ($operacao=="inserir") {
  $codigo = $_POST['codigo'];
  $nome = $_POST['nome'];
  $cidade = $_POST['cidade'];
  $uf = $_POST['uf'];

  $sql = "INSERT INTO TBAGE (N_CODIGO,C_NOME,C_CIDADE,C_UF) VALUES (:codigo,:nome,:cidade,:uf)";
  $simpan = $konoperacaoi->prepare($sql);

  $simpan->bindParam(':codigo',$codigo);
  $simpan->bindParam(':nome',$nome);
  $simpan->bindParam(':cidade',$cidade);
  $simpan->bindParam(':uf',$uf);
  $simpan->execute();
}

elseif ($operacao=="excluir") {
  $codigo = $_POST['codigo'];

  $hapus = $konoperacaoi->prepare("DELETE FROM TBAGE WHERE N_CODIGO=:codigo");
  $hapus->bindParam(':codigo',$codigo);
  $hapus->execute();
}

elseif ($operacao=="mostrar") {
     $codigo = $_POST['codigo'];
     $tampil =$konoperacaoi->prepare("SELECT * FROM TBAGE WHERE N_CODIGO=:CODIGO");
     $tampil->bindParam(':CODIGO',$codigo);
     $tampil->execute();
     $data = $tampil->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($operacao=="update") {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    $sql = "UPDATE TBAGE SET C_NOME=:NOME,C_CIDADE=:CIDADE,C_UF=:UF WHERE N_CODIGO=:CODIGO ";
    $update = $konoperacaoi->prepare($sql);

    $update->bindParam(':CODIGO',$codigo);
    $update->bindParam(':NOME',$nome);
    $update->bindParam(':CIDADE',$cidade);
    $update->bindParam(':UF',$uf);
    $update->execute();
   }



?>
