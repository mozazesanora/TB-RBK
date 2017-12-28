
  <div class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('index.php/cmatakuliah/edit') ?>" method="post" class="form-horizontal">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idDataMatkul" placeholder="" value="<?php echo $matkuldata[0]->idDataMatkul; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id Mata Kuliah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idMatkul" placeholder="" value="<?php echo $matkuldata[0]->idMatkul; ?>">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Mata kuliah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaMatkul" placeholder="" value="<?php echo $matkuldata[0]->namaMatkul; ?>">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="<?php echo base_url('index.php/cmatakuliah/'); ?>" class="btn btn-default">kembali</a>
               <button type="submit" class="btn btn-info pull-right" name="mit">simpan </button>

                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        

















