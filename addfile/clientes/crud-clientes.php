<?php
include '../conexao.php';

$operacao = $_GET['operacao'];
$conexao = Conexao::getInstance();

if ($operacao=="inserir") {
  $codigo 	= $_POST['codigo'];
  $fantasia = $_POST['fantasia'];
  $nome 	= $_POST['nome'];
  $endereco = $_POST['endereco'];
  $bairro 	= $_POST['bairro'];
  $cidade 	= $_POST['cidade'];
  $uf 		= $_POST['uf'];
  $mail 	= $_POST['mail'];
  $hp 		= $_POST['hp'];
  $obs 		= $_POST['obs'];
  $cep 		= $_POST['cep'];
  $telefone = $_POST['telefone'];
  $fax 		= $_POST['fax'];
  $cgc 		= $_POST['cgc'];
  $inscricao= $_POST['inscricao'];  
  
  $sql = "INSERT INTO TBCLI (N_CODIGO, C_FANTASIA, C_NOME, C_ENDERECO, C_BAIRRO, C_CIDADE, C_UF, C_MAIL, C_HP, M_OBS, C_CEP, C_TELEFONE, C_FAX, C_CPFCNPJ, C_INSCRICAO) "+
		 " VALUES (:CODIGO, :FANTASIA, :NOME, :ENDERECO, :BAIRRO, :CIDADE, :UF, :MAIL, :HP, :OBS, :CEP, :TELEFONE, :FAX, :CPFCNPJ, :INSCRICAO)";
   
  $inserir = $conexao->prepare($sql);

  $inserir->bindParam(':CODIGO',$codigo);
  $inserir->bindParam(':FANTASIA',$fantasia);
  $inserir->bindParam(':NOME',$nome);
  $inserir->bindParam(':ENDERECO',$endereco);
  $inserir->bindParam(':BAIRRO',$bairro);
  $inserir->bindParam(':CIDADE',$cidade);
  $inserir->bindParam(':UF',$uf);
  $inserir->bindParam(':MAIL',$mail);
  $inserir->bindParam(':HP',$hp);
  $inserir->bindParam(':OBS',$obs);
  $inserir->bindParam(':CEP',$cep);
  $inserir->bindParam(':TELEFONE',$telefone);
  $inserir->bindParam(':FAX',$fax);
  $inserir->bindParam(':CPFCNPJ',$cgc);
  $inserir->bindParam(':INSCRICAO',$inscricao);
  $inserir->execute();
}

elseif ($operacao=="excluir") {
  $codigo = $_POST['codigo'];

  $excluir = $conexao->prepare("DELETE FROM TBCLI WHERE N_CODIGO=:codigo");
  $excluir->bindParam(':codigo',$codigo);
  $excluir->execute();
}

elseif ($operacao=="mostrar") {
     $codigo = $_POST['codigo'];
     $mostrar =$conexao->prepare("SELECT * FROM TBCLI WHERE N_CODIGO=:codigo");
     $mostrar->bindParam(':codigo',$codigo);
     $mostrar->execute();
     $data = $mostrar->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($operacao=="update") {
  $codigo 	= $_POST['codigo'];
  $fantasia = $_POST['fantasia'];
  $nome 	= $_POST['nome'];
  $endereco = $_POST['endereco'];
  $bairro 	= $_POST['bairro'];
  $cidade 	= $_POST['cidade'];
  $uf 		= $_POST['uf'];
  $mail 	= $_POST['mail'];
  $hp 		= $_POST['hp'];
  $obs 		= $_POST['obs'];
  $cep 		= $_POST['cep'];
  $telefone = $_POST['telefone'];
  $fax 		= $_POST['fax'];
  $cgc 		= $_POST['cgc'];
  $inscricao= $_POST['inscricao'];  
    
    $sql = "UPDATE TBCLI SET C_FANTASIA = :FANTASIA, "+
							"C_NOME = :NOME, "+
							"C_ENDERECO = :ENDERECO, "+
							"C_BAIRRO = :BAIRRO, "+
							"C_CIDADE = :CIDADE, "+
							"C_UF = :UF, "+
							"C_MAIL = :MAIL, "+
							"C_HP = :HP, "+
							"M_OBS = :OBS, "+
							"C_CEP = :CEP, "+
							"C_TELEFONE = :TELEFONE, "+
							"C_FAX = :FAX, "+
							"C_CPFCNPJ = :CPFCNPJ, "+
							"C_INSCRICAO = :INSCRICAO ";
    $update = $conexao->prepare($sql);

  $update->bindParam(':CODIGO',$codigo);
  $update->bindParam(':FANTASIA',$fantasia);
  $update->bindParam(':NOME',$nome);
  $update->bindParam(':ENDERECO',$endereco);
  $update->bindParam(':BAIRRO',$bairro);
  $update->bindParam(':CIDADE',$cidade);
  $update->bindParam(':UF',$uf);
  $update->bindParam(':MAIL',$mail);
  $update->bindParam(':HP',$hp);
  $update->bindParam(':OBS',$obs);
  $update->bindParam(':CEP',$cep);
  $update->bindParam(':TELEFONE',$telefone);
  $update->bindParam(':FAX',$fax);
  $update->bindParam(':CPFCNPJ',$cgc);
  $update->bindParam(':INSCRICAO',$inscricao);
   }
?>
