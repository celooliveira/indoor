$(document).ready(function(e) {

  busca_registros();

});
function busca_registros() {
  $.ajax({
    type: "GET",
    url: "addfile/estados/lista-estados.php",
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
  $("#uf").val("");
  $("#estado").val("");
}
function limpa_update() {
  $("#uf_update").val("");
  $("#estado_update").val("");
}
