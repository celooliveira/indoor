<html>
  <head>
    <?php require_once '../conexao.php'; ?>
    <?php include 'modal-clientes.php'; ?>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-siswa">
      <thead>
        <tr class="success">
          <th>Código</th>
          <th>Nome</th>
          <th>Cidade</th>
          <th>e-mail</th>
          <th>Telefone</th>
          <th>CGC</th>
		  <th>Ação</th>
        </tr>
      </thead>

      <tbody>
      <?php
	  $konoperacaoi = Conexao::getInstance();
      $tampil = $konoperacaoi->prepare("SELECT * FROM TBCLI");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>      
		<tr>      
		  <td><?php echo $data['N_CODIGO']; ?></td>
		  <td><?php echo $data['C_NOME']; ?></td>
          <td><?php echo $data['C_CIDADE']."-".$data['C_UF']; ?></td>
          <td><?php echo $data['C_MAIL']; ?></td>
          <td><?php echo $data['C_TELEFONE']; ?></td>
          <td><?php echo $data['C_CPFCNPJ']; ?></td>
          <td><button type="button" id="<?php echo $data['N_CODIGO']; ?>" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
            <button type="button" id="<?php echo $data['N_CODIGO']; ?>" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
            </td>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(e) {
  //CRUD data-siswa
  $('.tambah-siswa').click (function() {
    var codigo = $("#codigo").val().trim();
    var fantasia = $("#fantasia").val().trim();
    var nome = $("#nome").val().trim();
    var endereco = $("#endereco").val().trim();
    var bairro = $("#bairro").val().trim();
    var cidade = $("#cidade").val().trim();
    var uf = $("#uf").val().trim();
    var mail = $("#mail").val().trim();
    var hp = $("#hp").val().trim();
    var obs = $("#obs").val().trim();
    var cep = $("#cep").val().trim();
    var telefone = $("#telefone").val().trim();
    var fax = $("#fax").val().trim();
    var cgc = $("#cgc").val().trim();
    var inscricao = $("#inscricao").val().trim();

    if (nome=="") {
      alert("Informe o nome do cliente");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/clientes/crud-clientes.php?operacao=inserir",
        data: "codigo="+codigo+"&fantasia="+fantasia+"&nome="+nome+"&endereco="+endereco+
			  "&bairro="+bairro+"&cidade="+cidade+"&uf="+uf+"&mail="+mail+"&hp="+hp+"&obs="+obs+
			  "&cep="+cep+"&telefone="+telefone+"&fax="+fax+"&cgc="+cgc+"&inscricao="+inscricao,
        success: function (msg) {
        busca_registros();
        limpa_registros();
        }
      });
    }
  });

  $('.hapus-siswa').click(function() {
    var codigo = this.id;
    var conf = confirm("Deseja excluir o cliente :" +codigo+"?");
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/clientes/crud-clientes.php?operacao=excluir",
          data: "codigo="+codigo,
          success: function (msg) {
            busca_registros();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var codigo = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/clientes/crud-clientes.php?operacao=mostrar",
      data: "codigo="+codigo,
      dataType: "json",
      success: function (data) {
        $('#uf_update').val(data.C_UF);
        $('#estado_update').val(data.C_ESTADO);
        $('#modal-update-siswa').modal("show");
      }
    });
  });

  $('.update-siswa').click(function () {
    var codigo = $("#codigo_update").val().trim();
    var fantasia = $('#fantasia_update').val().trim();
    var nome = $("#nome_update").val().trim();
    var endereco = $('#endereco_update').val().trim();
    var bairro = $("#bairro_update").val().trim();
    var cidade = $('#cidade_update').val().trim();
    var uf = $("#uf_update").val().trim();
    var mail = $('#mail_update').val().trim();
    var hp = $("#hp_update").val().trim();
    var obs = $('#obs_update').val().trim();
    var cep = $("#cep_update").val().trim();
    var telefone = $('#telefone_update').val().trim();
    var fax = $("#fax_update").val().trim();
    var cgc = $('#cgc_update').val().trim();
    var inscricao = $("#inscricao_update").val().trim();
    
    $.ajax({
        type: "POST",
        url: "addfile/clientes/crud-clientes.php?operacao=update",
        data: "codigo="+codigo+"&fantasia="+fantasia+"&nome="+nome+"&endereco="+endereco+
			  "&bairro="+bairro+"&cidade="+cidade+"&uf="+uf+"&mail="+mail+"&hp="+hp+"&obs="+obs+
			  "&cep="+cep+"&telefone="+telefone+"&fax="+fax+"&cgc="+cgc+"&inscricao="+inscricao,
        success: function (msg) {
        busca_registros();
        limpa_update();

        }
    });
  });
$('.data-clientes').DataTable(); //datatables
});
</script>
