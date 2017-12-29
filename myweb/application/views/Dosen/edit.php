  <div class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url() ?>dosen/update/" method="post" class="form-horizontal">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idDataDosen" placeholder="" value="<?php echo $dosen[0]->idDataDosen; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIDN</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nidn" placeholder="" value="<?php echo $dosen[0]->nidn; ?>">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Dosen</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaDosen" placeholder="" value="<?php echo $dosen[0]->namaDosen; ?>">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="<?php echo base_url('index.php/cdosen/'); ?>" class="btn btn-default">kembali</a>
               <button type="submit" class="btn btn-info pull-right" name="mit">simpan </button>

                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        

















