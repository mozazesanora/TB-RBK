<div class="content">
          <!-- Horizontal Form -->
          
            <!-- /.box-header -->
            <!-- form start -->
            
          
          
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah data Barang</h3>
            </div>

            <form action="<?php echo base_url('index.php/cbarang/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">
            

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaBarang" placeholder="namaBarang" value="">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenisBarang" placeholder="jenisBarang" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlahBarang" placeholder="jumlahBarang" value="">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->

              
              <div class="box-footer">
           
               <button type="submit" class="btn btn-info pull-right" name="simpan">simpan </button>

                
              </div>
              <!-- /.box-footer -->
              <div class="box-header">
              <h3 class="box-title">Data Dosen</h3>
            </div>
            </form>
            <!-- /.box-header -->
           <?php echo $this->session->flashdata('hasil'); ?>
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
             <thead>
            <tr>
                <th width="30%">nama Barang</th>
                <th width="50%">jenis Barang</th>
                <th width="30%">jumlah Barang</th>
                <th width="30%">ACTION</th>


                
            </tr>
        </thead>
        <tbody>
           <?php foreach ($barangdata as $key) {
           ?>
           <tr>
          <td><?php echo $key->namaBarang?></td>
          <td><?php echo $key->jenisBarang; ?></td>
          <td><?php echo $key->jumlahBarang; ?></td>
          <td><a href="<?php echo base_url('index.php/cbarang/edit/').$key->idDataBarang; ?>" class="btn btn-primary">Update</a>


          <a href="<?php echo base_url('index.php/cbarang/delete/').$key->idDataBarang; ?>" class="btn btn-danger">Delete</a>


          </td>
          </tr>
          <?php } ?>
        </tbody>
                
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
 