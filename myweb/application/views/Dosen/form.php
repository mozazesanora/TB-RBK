<div class="content">
          <!-- Horizontal Form -->
          
            <!-- /.box-header -->
            <!-- form start -->
            
          
          
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah data Dosen</h3>
            </div>

            <form action="<?php echo base_url('index.php/cdosen/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">
            

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIDN</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nidn" placeholder="NIDN" value="">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Dosen</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaDosen" placeholder="NAMA" value="">
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
                <th width="10%">ID</th>
                <th width="20%">NIDN</th>
                <th width="40%">NAMA</th>
                <th width="20%">ACTION</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($dosendata as $key) {
           ?>

          <tr>
          <td><?php echo $key->idDataDosen; ?></td>
          <td><?php echo $key->nidn ?></td>
          <td><?php echo $key->namaDosen; ?></td>
          <td><a href="<?php echo base_url('dosen/edit/').$key->idDataDosen; ?>" class="btn btn-primary">Update</a>


          <a href="<?php echo base_url('dosen/delete/').$key->idDataDosen; ?>" class="btn btn-danger" onClick="myFunction()">Delete</a>


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
  <script type="text/javascript">
    function myFunction() {
      alert("Apakah Anda Yakin ingin menghapus?");
    }
  </script>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
 