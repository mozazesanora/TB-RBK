<div class="content">
          <!-- Horizontal Form -->
          
            <!-- /.box-header -->
            <!-- form start -->
            
          
          
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah data TA</h3>
            </div>

           <form action="<?php echo base_url('index.php/cta/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">
            

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">nomer</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomerTA" placeholder="ID MATKUL" value="">
                  
                  </div>
                </div>
                

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judulTA" placeholder="" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">penulis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" placeholder="" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">tahun</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahunTA" placeholder="" value="">
                  </div>
                </div>
              </div>
             

              
              <div class="box-footer">
           
               <button type="submit" class="btn btn-info pull-right" name="simpan">simpan </button>

                
              </div>
             
              <div class="box-header">
              <h3 class="box-title">Data TA</h3>
            </div>
            </form>  
            <!-- /.box-header -->
           <?php echo $this->session->flashdata('hasil'); ?>
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
             <thead>
            <tr>
                <th width="30%">nomor</th>
                <th width="30%">judul</th>
                <th width="30%">penulis</th>
                  <th width="30%">tahun</th>
                 <th width="30%">Action</th>


                
            </tr>
        </thead>
        <tbody>
           <?php foreach ($tadata as $key) {
           ?>
           <tr>
            <td><?php echo $key->nomerTA; ?></td>
          <td><?php echo $key->judulTA; ?></td>
          <td><?php echo $key->penulis; ?></td>
          <td><?php echo $key->tahunTA; ?></td>
          <td><a href="<?php echo base_url('index.php/cta/edit/').$key->idData; ?>" class="btn btn-primary">Update</a></td>

         <td> <a href="<?php echo base_url('index.php/cta/delete/').$key->idData; ?>" class="btn btn-danger">Delete</a>


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
 