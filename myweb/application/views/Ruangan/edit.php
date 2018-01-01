<?php ; ?>
  <div class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('index.php/cruangan/edit') ?>" method="post" class="form-horizontal">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idDataRuangan" placeholder="" value="<?php echo $ruangandata[0]->idDataRuangan; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nomor Ruangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomerRuangan" placeholder="" value="<?php echo $ruangandata[0]->nomerRuangan; ?>">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kondisi Ruangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kondisiRuangan" placeholder="" value="<?php echo $ruangandata[0]->kondisiRuangan; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Lokasi Ruangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lokasiRuangan" placeholder="" value="<?php echo $ruangandata[0]->lokasiRuangan; ?>">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="<?php echo base_url('index.php/cruangan/'); ?>" class="btn btn-default">kembali</a>
               <button type="submit" class="btn btn-info pull-right" name="mit">simpan </button>

                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        

















