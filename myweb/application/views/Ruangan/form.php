<div class="content">
          <!-- Horizontal Form -->
          
            <!-- /.box-header -->
            <!-- form start -->
            
          
          
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah data Ruangan</h3>
            </div>

            <form action="<?php echo base_url('index.php/cruangan/create'); ?>" method="post" class="form-horizontal">
              <div class="box-body">
            

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nomor Ruangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomerRuangan" placeholder="nomerRuangan" value="">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kondisi Ruangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kondisiRuangan" placeholder="kondisiRuangan" value="">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Lokasi Ruangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lokasiRuangan" placeholder="lokasiRuangan" value="">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->

              
              <div class="box-footer">
           
               <button type="submit" class="btn btn-info pull-right" name="simpan">simpan </button>

                
              </div>
              <!-- /.box-footer -->
              <div class="box-header">
              <h3 class="box-title">Data Ruangan</h3>
            </div>
            </form>
            <!-- /.box-header -->
           <?php echo $this->session->flashdata('hasil'); ?>
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
             <thead>
            <tr>
                <th width="40%">Nomer Ruangan</th>
                <th width="40%">Kondisi Ruangan</th>
                <th width="40%">Lokasi Ruang</th>
                <th width="30%">ACTION</th>


                
            </tr>
        </thead>
        <tbody>
           <?php foreach ($ruangandata as $key) {
           ?>
           <tr>
          <td><?php echo $key->nomerRuangan; ?></td>
          <td><?php echo $key->kondisiRuangan; ?></td>
           <td><?php echo $key->lokasiRuangan; ?></td>
          <td><a href="<?php echo base_url('index.php/cruangan/edit/').$key->idDataRuangan; ?>" class="btn btn-primary">Update</a>


          <a href="<?php echo base_url('index.php/cruangan/delete/').$key->idDataRuangan; ?>" class="btn btn-danger">Delete</a>


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
 