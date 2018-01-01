<?php ; ?>
  <div class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('index.php/cbarang/edit') ?>" method="post" class="form-horizontal">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idDatabarang" placeholder="" value="<?php echo $barangdata[0]->idDataBarang; ?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaBarang" placeholder="" value="<?php echo $barangdata[0]->namaBarang; ?>">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenisBarang" placeholder="" value="<?php echo $barangdata[0]->jenisBarang; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlahBarang" placeholder="" value="<?php echo $barangdata[0]->jumlahBarang; ?>">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <a href="<?php echo base_url('index.php/cbarang/'); ?>" class="btn btn-default">kembali</a>
               <button type="submit" class="btn btn-info pull-right" name="mit">simpan </button>

                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        

















