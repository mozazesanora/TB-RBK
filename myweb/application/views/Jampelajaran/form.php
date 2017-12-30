<div class="content">
          
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah data Jam Pelajaran</h3>
            </div>

           <form action="<?php echo base_url('index.php/cjampelajaran/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">
            

              

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jam Pelajaran</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="JamPelajaran" placeholder="Jam Pelajaran ex.(1-2)" value="">
                  </div>
                </div>
                
              </div>
             

              
              <div class="box-footer">
           
               <button type="submit" class="btn btn-info pull-right" name="simpan">simpan </button>

                
              </div>
             
              <div class="box-header">
              <h3 class="box-title">Data Jam Pelajaran</h3>
            </div>
            </form>  
            <!-- /.box-header -->
           <?php echo $this->session->flashdata('hasil'); ?>
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
             <thead>
            <tr>
                <th width="30%">id Data Jam Pelajaran</th>
                <th width="30%">Jam Pelajaran</th>
                 <th width="30%">Action</th>


                
            </tr>
        </thead>
        <tbody>
           <?php foreach ($jampelajarandata as $key) {
           ?>
           <tr>
            <td><?php echo $key->idDataJamPelajaran ?></td>
          <td><?php echo $key->jamPelajaran?></td>
        
          <td><a href="<?php echo base_url('index.php/cjampelajaran/edit/').$key->idDataJamPelajaran; ?>" class="btn btn-primary">Update</a></td>

         <td> <a href="<?php echo base_url('index.php/cjampelajaran/delete/').$key->idDataJamPelajaran; ?>" class="btn btn-danger">Delete</a>


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
 