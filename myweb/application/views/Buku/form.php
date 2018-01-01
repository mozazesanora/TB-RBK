<div class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah data buku</h3>
            </div>

            <form action="<?php echo base_url('index.php/cbuku/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">
            

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">nomer</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomerBuku" placeholder="" value="">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">judul buku</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judulBuku" placeholder="" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">penulis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" placeholder="" value="">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->

              
              <div class="box-footer">
           
               <button type="submit" class="btn btn-info pull-right" name="simpan">simpan </button>

                
              </div>
              <!-- /.box-footer -->
              <div class="box-header">
              <h3 class="box-title">Data buku</h3>
            </div>
            </form>
            <!-- /.box-header -->
           <?php echo $this->session->flashdata('hasil'); ?>
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
             <thead>
            <tr>
                <th width="30%">nomerBuku</th>
                <th width="50%">judulBuku</th>
                <th width="30%">penulis</th>
                <th width="30%">ACTION</th>


                
            </tr>
        </thead>
        <tbody>
           <?php foreach ($bukudata as $key) {
           ?>
           <tr>
          <td><?php echo $key->nomerBuku ?></td>
          <td><?php echo $key->judulBuku; ?></td>
           <td><?php echo $key->penulis; ?></td>
          <td><a href="<?php echo base_url('index.php/cbuku/edit/').$key->idDataBuku; ?>" class="btn btn-primary">Update</a>


          <a href="<?php echo base_url('index.php/cbuku/delete/').$key->idDataBuku; ?>" class="btn btn-danger">Delete</a>


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
 