<?php ; ?>
  <div class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('index.php/cjampelajaran/edit') ?>" method="post" class="form-horizontal">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idDataJamPelajaran" placeholder="" value="<?php echo $jampelajarandata[0]->idDataJamPelajaran; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jam Pelajaran</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jamPelajaran" placeholder="" value="<?php echo $jampelajarandata[0]->jamPelajaran; ?>">
                  
                  </div>
                </div>

              
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="<?php echo base_url('index.php/cjampelajaran/'); ?>" class="btn btn-default">kembali</a>
               <button type="submit" class="btn btn-info pull-right" name="mit">simpan </button>

                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        

















