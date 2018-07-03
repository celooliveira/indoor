<html>
  <head>
    <?php require_once '../conexao.php'; ?>
    <?php include 'modal-cidades.php'; ?>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-siswa">
      <thead>
        <tr class="success">
          <th>Cidade</th>
          <th>Ação</th>
        </tr>
      </thead>

      <tbody>
      <?php
	  $konoperacaoi = Conexao::getInstance();
      $tampil = $konoperacaoi->prepare("SELECT * FROM TBCID");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>      
		<tr>      
		  <td><?php echo $data['C_CIDADE']; ?></td>
          <td><button type="button" id="<?php echo $data['C_CIDADE']; ?>" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
            <button type="button" id="<?php echo $data['C_CIDADE']; ?>" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
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
    var cidade = $("#cidade").val().trim();
    
    if (cidade=="") {
      alert("Informe a cidade");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/cidades/crud-cidades.php?operacao=inserir",
        data: "cidade="+cidade,
        success: function (msg) {
        busca_registros();
        limpa_registros();
        }
      });
    }
  });

  $('.hapus-siswa').click(function() {
    var cidade = this.id;
    var conf = confirm("Deseja excluir a cidade :" +cidade+"?");
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/cidades/crud-cidades.php?operacao=excluir",
          data: "cidade="+cidade,
          success: function (msg) {
            busca_registros();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var cidade = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/cidades/crud-cidades.php?operacao=mostrar",
      data: "cidade="+cidade,
      dataType: "json",
      success: function (data) {
        $('#cidade_update').val(data.C_CIDADE);
        $('#modal-update-siswa').modal("show");
      }
    });
  });

  $('.update-siswa').click(function () {
    var cidade = $("#cidade_update").val().trim();
    
    $.ajax({
        type: "POST",
        url: "addfile/cidades/crud-cidades.php?operacao=update",
        data: "cidade="+cidade,
        success: function (msg) {
        busca_registros();
        limpa_update();

        }
    });
  });
$('.data-cidades').DataTable(); //datatables
});
</script>
