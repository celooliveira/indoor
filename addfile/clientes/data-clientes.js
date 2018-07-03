$(document).ready(function(e) {

  busca_registros();

});
function busca_registros() {
  $.ajax({
    type: "GET",
    url: "addfile/clientes/lista-clientes.php",
    success: function (data){
      $('.tampil-data-siswa').html(data)
    }
  });

  $.ajax({
      type: "GET",
      url: "addfile/cards/jml-laki-laki.php",
      success: function (data) {
        $('.tampil-jml-laki-laki').html(data)
        var sas = val(data);
      }
  });

  $.ajax({
      type: "GET",
      url: "addfile/cards/jml-perempuan.php",
      success: function (data) {
        $('.tampil-jml-perempuan').html(data)
      }
  });

  $.ajax({
      type: "GET",
      url: "addfile/cards/jml-siswa.php",
      success: function (data) {
        $('.tampil-jml-siswa').html(data)
      }
  });
}

function limpa_registros() {
  $("#codigo").val("");
  $("#fatasia").val("");
  $("#nome").val("");
  $("#endereco").val("");
  $("#bairro").val("");
  $("#cidade").val("");
  $("#uf").val("");
  $("#mail").val("");
  $("#hp").val("");
  $("#obs").val("");
  $("#cep").val("");
  $("#telefone").val("");
  $("#fax").val("");
  $("#cgc").val("");
  $("#inscricao").val("");
}
function limpa_update() {
  $("#codigo_update").val("");
  $("#fatasia_update").val("");
  $("#nome_update").val("");
  $("#endereco_update").val("");
  $("#bairro_update").val("");
  $("#cidade_update").val("");
  $("#uf_update").val("");
  $("#mail_update").val("");
  $("#hp_update").val("");
  $("#obs_update").val("");
  $("#cep_update").val("");
  $("#telefone_update").val("");
  $("#fax_update").val("");
  $("#cgc_update").val("");
  $("#inscricao_update").val("");
}
