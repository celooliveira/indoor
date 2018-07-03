$(document).ready(function(e) {

  tampil_data_siswa();

});
function tampil_data_siswa() {
  $.ajax({
    type: "GET",
    url: "addfile/tabel-data-siswa.php",
    success: function (data){
      $('.tampil-data-siswa').html(data)
    }
  });

  $.ajax({
      type: "GET",
      url: "addfile/jml/jml-laki-laki.php",
      success: function (data) {
        $('.tampil-jml-laki-laki').html(data)
        var sas = val(data);
      }
  });

  $.ajax({
      type: "GET",
      url: "addfile/jml/jml-perempuan.php",
      success: function (data) {
        $('.tampil-jml-perempuan').html(data)
      }
  });

  $.ajax({
      type: "GET",
      url: "addfile/jml/jml-siswa.php",
      success: function (data) {
        $('.tampil-jml-siswa').html(data)
      }
  });
}

function clear_siswa_tambah() {
  $("#codigo").val("");
  $("#nome").val("");
  $("#cidade").val("");
  $("#uf").val("");
}
function clear_update_tambah() {
  $("#codigo_update").val("");
  $("#nome_update").val("");
  $("#cidade_update").val("");
  $("#uf_update").val("");
}
