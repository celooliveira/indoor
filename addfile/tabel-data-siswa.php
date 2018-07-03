<html>
  <head>
    <?php require_once 'conexao.php'; ?>
    <?php include 'modal.php'; ?>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-siswa">
      <thead>
        <tr class="success">
          <th>Código</th>
          <th>Nome</th>
          <th>Cidade</th>
          <th>UF</th>
          <th>Coluna</th>
          <th>Coluna</th>
        </tr>
      </thead>

      <tbody>
      <?php
	  $konoperacaoi = Conexao::getInstance();
      $tampil = $konoperacaoi->prepare("SELECT * FROM TBAGE");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>      
		<tr>      
		  <td><?php echo $data['N_CODIGO']; ?></td>
          <td><?php echo $data['C_NOME']; ?></td>
          <td><?php echo $data['C_CIDADE']; ?></td>
          <td><?php echo $data['C_UF']; ?></td>
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
    var nome = $("#nome").val().trim();
    var cidade = $("#cidade").val().trim();
    var uf = $("#uf").val().trim();

    if (codigo=="") {
      alert("Código is Required");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/crud-siswa.php?operacao=inserir",
        data: "codigo="+codigo+"&nome="+nome+"&cidade="+cidade+"&uf="+uf,
        success: function (msg) {
        tampil_data_siswa();
        clear_siswa_tambah();
        }
      });
    }
  });

  $('.hapus-siswa').click(function() {
    var codigo = this.id;
    var conf = confirm("Deseja excluir o registro Código :" +codigo);
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/crud-siswa.php?operacao=excluir",
          data: "codigo="+codigo,
          success: function (msg) {
            tampil_data_siswa();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var codigo = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/crud-siswa.php?operacao=mostrar",
      data: "codigo="+codigo,
      dataType: "json",
      success: function (data) {
        $('#codigo_update').val(data.N_CODIGO);
        $('#nome_update').val(data.C_NOME);
        $('#cidade_update').val(data.C_CIDADE);
        $('#uf_update').val(data.C_UF);
        $('#modal-update-siswa').modal("show");
      }
    });
  });

  $('.update-siswa').click(function () {
    var codigo = $("#codigo_update").val().trim();
    var nome = $('#nome_update').val().trim();
    var cidade = $('#cidade_update').val().trim();
    var uf = $('#uf_update').val().trim();

    $.ajax({
        type: "POST",
        url: "addfile/crud-siswa.php?operacao=update",
        data: "codigo="+codigo+"&nome="+nome+"&cidade="+cidade+"&uf="+uf,
        success: function (msg) {
        tampil_data_siswa();
        clear_siswa_update();

        }
    });
  });
$('.data-modelo').DataTable(); //datatables
});
</script>
