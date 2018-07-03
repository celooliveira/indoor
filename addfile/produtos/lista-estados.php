<html>
  <head>
    <?php require_once '../conexao.php'; ?>
    <?php include 'modal-estados.php'; ?>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-siswa">
      <thead>
        <tr class="success">
          <th>UF</th>
          <th>Estado</th>
		  <th>Ação</th>
        </tr>
      </thead>

      <tbody>
      <?php
	  $konoperacaoi = Conexao::getInstance();
      $tampil = $konoperacaoi->prepare("SELECT * FROM TBEST");
      $tampil->execute();
      $tampil->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$tampil->fetch(PDO::FETCH_ORI_NEXT)) { ?>      
		<tr>      
		  <td><?php echo $data['C_UF']; ?></td>
          <td><?php echo $data['C_ESTADO']; ?></td>
          <td><button type="button" id="<?php echo $data['C_UF']; ?>" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
            <button type="button" id="<?php echo $data['C_UF']; ?>" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
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
    var uf = $("#uf").val().trim();
    var estado = $("#estado").val().trim();

    if (uf=="") {
      alert("Informe a UF");
    }
    else {
      $.ajax({
        type: "POST",
        url: "addfile/estados/crud-estados.php?operacao=inserir",
        data: "uf="+uf+"&estado="+estado,
        success: function (msg) {
        busca_registros();
        limpa_registros();
        }
      });
    }
  });

  $('.hapus-siswa').click(function() {
    var uf = this.id;
    var conf = confirm("Deseja excluir a UF :" +uf+"?");
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/estados/crud-estados.php?operacao=excluir",
          data: "uf="+uf,
          success: function (msg) {
            busca_registros();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var uf = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/estados/crud-estados.php?operacao=mostrar",
      data: "uf="+uf,
      dataType: "json",
      success: function (data) {
        $('#uf_update').val(data.C_UF);
        $('#estado_update').val(data.C_ESTADO);
        $('#modal-update-siswa').modal("show");
      }
    });
  });

  $('.update-siswa').click(function () {
    var uf = $("#uf_update").val().trim();
    var estado = $('#estado_update').val().trim();
    
    $.ajax({
        type: "POST",
        url: "addfile/estados/crud-estados.php?operacao=update",
        data: "uf="+uf+"&estado="+estado,
        success: function (msg) {
        busca_registros();
        limpa_update();

        }
    });
  });
$('.data-estados').DataTable(); //datatables
});
</script>
