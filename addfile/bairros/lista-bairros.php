<html>
  <head>
    <?php require_once '../conexao.php'; ?>
    <?php include 'modal-bairros.php'; ?>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-siswa">
      <thead>
        <tr class="success">
          <th>Bairro</th>
          <th>Ação</th>
        </tr>
      </thead>

      <tbody>
      <?php
	  $konoperacaoi = Conexao::getInstance();
      $tampil = $konoperacaoi->prepare("SELECT * FROM TBBAI");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>      
		<tr>      
		  <td><?php echo $data['C_BAIRRO']; ?></td>
          <td><button type="button" id="<?php echo $data['C_BAIRRO']; ?>" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
            <button type="button" id="<?php echo $data['C_BAIRRO']; ?>" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
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
    var bairro = $("#bairro").val().trim();
    
    if (bairro=="") {
      alert("Informe o bairro");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/bairros/crud-bairros.php?operacao=inserir",
        data: "bairro="+bairro,
        success: function (msg) {
        busca_registros();
        limpa_registros();
        }
      });
    }
  });

  $('.hapus-siswa').click(function() {
    var bairro = this.id;
    var conf = confirm("Deseja excluir o bairro :" +bairro+"?");
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/bairros/crud-bairros.php?operacao=excluir",
          data: "bairro="+bairro,
          success: function (msg) {
            busca_registros();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var bairro = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/bairros/crud-bairros.php?operacao=mostrar",
      data: "bairro="+bairro,
      dataType: "json",
      success: function (data) {
        $('#bairro_update').val(data.C_BAIRRO);
        $('#modal-update-siswa').modal("show");
      }
    });
  });

  $('.update-siswa').click(function () {
    var cidade = $("#bairro_update").val().trim();
    
    $.ajax({
        type: "POST",
        url: "addfile/bairros/crud-bairros.php?operacao=update",
        data: "bairro="+bairro,
        success: function (msg) {
        busca_registros();
        limpa_update();

        }
    });
  });
$('.data-bairros').DataTable(); //datatables
});
</script>
