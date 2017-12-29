<?php echo form_open('dosen/edit');?>
<?php echo form_hidden('idDataDosen',$dosen[0]->idDataDosen);?>

<table>
    <tr><td>NIDN</td><td><?php echo form_input('nidn',$dosen[0]->nidn);?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('namaDosen',$dosen[0]->namaDosen);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>