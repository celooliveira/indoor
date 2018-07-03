    <!--Awal Modal Tambah Siswa-->
        <div class="modal" id="modal-tambah-siswa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Cadastro modelo</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Código</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="codigo" maxlength="20" placeholder="Informe o código">
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Nome</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" id="nome" maxlength="200" placeholder="Nome..">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Cidade</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="cidade" maxlength="100" placeholder="Cidade">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">UF</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="uf" maxlength="200" placeholder="UF">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancealr</button>
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
            <h3 class="modal-title">Cadastro Modelo - Alteração</h3>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Código</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="codigo_update" maxlength="20" placeholder="Código" disabled="true">
                    </div>
                </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Nome</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="nome_update" maxlength="200" placeholder="Nome..">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Cidade</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="cidade_update" maxlength="100" placeholder="Cidade">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3 control-label">UF</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="uf_update" maxlength="200" placeholder="UF">
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
