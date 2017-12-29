<div class="content">
          <!-- Horizontal Form -->
          
            <!-- /.box-header -->
            <!-- form start -->
            
          
          
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah data Matakuliah</h3>
            </div>

           <form action="<?php echo base_url('matakuliah/create') ?>" method="post" class="form-horizontal">
              <div class="box-body">
            

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id Matakuliah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="idMatkul" placeholder="ID MATKUL" value="">
                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Matakuiah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaMatkul" placeholder="NAMA MATKUL" value="">
                  </div>
                </div>
                
              </div>
             

              
              <div class="box-footer">
           
               <button type="submit" class="btn btn-info pull-right" name="simpan">simpan </button>

                
              </div>
             
              <div class="box-header">
              <h3 class="box-title">Data Matakuliah</h3>
            </div>
            </form>  
            <!-- /.box-header -->
           <?php echo $this->session->flashdata('hasil'); ?>
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
             <thead>
            <tr>
                <th width="30%">id Data Matkul</th>
                <th width="30%">id Matkul</th>
                <th width="30%">Nama Matkul</th>
                 <th width="30%">Action</th>


                
            </tr>
        </thead>
        <tbody>
           <?php foreach ($matkuldata as $key) {
           ?>
           <tr>
            <td><?php echo $key->idDataMatkul ?></td>
          <td><?php echo $key->idMatkul ?></td>
          <td><?php echo $key->namaMatkul; ?></td>
          <td><a href="<?php echo base_url('matakuliah/edit/').$key->idDataMatkul; ?>" class="btn btn-primary">Update</a></td>

         <td> <a href="<?php echo base_url('matakuliah/delete/').$key->idDataMatkul; ?>" class="btn btn-danger">Delete</a>


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
 