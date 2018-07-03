    <!--Awal Modal Tambah Siswa-->
        <div class="modal" id="modal-tambah-siswa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Cadastro de bairros</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    < <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Bairros</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="bairro" maxlength="20" placeholder="Nome do bairro..">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary tambah-siswa" data-dismiss="modal">Gravar</button>
              </div>
            </div>
          </div>
        </div>
    <!--Akhir Modal Tambah Siswa-->

    <!--Awal Modal UPDATE Siswa-->
    <div class="modal" id="modal-update-siswa">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Alterar bairro</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Bairro</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="bairro_update" maxlength="20" placeholder="Nome do bairro">
                      </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-warning update-siswa" data-dismiss="modal">Gravar</button>
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Modal UPDATE Siswa-->
    <script type="text/javascript">
    $(document).ready(function () {
               $('.picker_tgl_lahir').datepicker({
                   format: "dd M yyyy",
                   autoclose:true
               });
           });
    </script>
