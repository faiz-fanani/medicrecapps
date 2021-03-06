<div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
	<div>
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo base_url();?>pasien/daftar_pengguna">Daftar Pengguna</a>
            </li>
           
        </ul>
    </div>
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Daftar Pengguna</h2>

      
    </div>
    <div class="box-content">
	
	<?php 
	if(isset($pesan)){
		echo'
	<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Well done!</strong>'.$pesan.'.
                </div>
				';
	}
				?>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
		<th>No</th>
        <th>Nama Lengkap</th>
        <th>Nama Panggilan</th>
		<th>Peran</th>
		 <th>Kwarganegaraan</th>
        <th>Status</th>
        
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php $no =0;
	foreach($isi->result() as $row){ $no++; ?>
	
	<tr>
	 <td>
	<?php echo $no; ?>
	</td>
	
	<td>
	<?php echo $row->nama_lengkap; ?>
	</td>
	
	<td>
	<?php echo $row->nama_panggilan; ?>
	</td>
	
	<td>
	<?php if($row->role==1){echo "Admin";} 
			else if($row->role==2){ echo "Dokter Gigi";}
				else if($row->role==3){ echo "Klinik";} 
					else{ echo "DVI";} 
					?>
	</td>
	
	
		
		<td>
	<?php echo $row->kewarganegaraan; ?>
	</td>
	<td>
	<?php if($row->status==0){
 echo '<span class="label label-warning">Pending</span>';
	} else{  echo '<span class="label label-success">Disetujui</span>'; } ?>
	</td>
	 <td class="center">
            <a class="btn btn-info"  href="<?php echo base_url(); ?>user/edit/<?php echo $row->id_user;?>  ">
                <i class="glyphicon glyphicon-edit icon-white" >  </i>
                Edit
            </a>
            <a class="btn btn-danger"  onclick="return confirm('Anda Yakin untuk Menghapus user <?php echo $row->username;; ?> ?')"  href="<?php echo base_url(); ?>user/delete/<?php echo $row->id_user;?> "> 
                <i class="glyphicon glyphicon-trash icon-white"></i> 
                Delete
            
			</a>
        </td>
		
	</tr>
	<?php }?>
	
    
   
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
