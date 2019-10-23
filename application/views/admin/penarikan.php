<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

	<center><h1>Penarikan<br></h1></center>
	<form action="<?=site_url('admin/siswa/cari')?>" method="post">
	<input type="text" placeholder="Cari Berdasarkan Nama" name="cari">
  <button type="submit" class="btn btn-success"  value="Cari" ><i class="fa fa-search"></i></button>
</form>
	<?php if($this->session->flashdata('message') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Data Berhasil Disimpan ...
</div> 
<?php endif; ?>
	
	
	<br>
		<table class="table">
	
<tr>
	<th>NIS</th>
	<th>Nama Siswa</th>
	<th>Jenis Kelamin</th>
	<th>Alamat</th>
	<th>Telepon</th>
	<th>Setor</th>
	
</tr>

<?php 
                  
                    foreach ($data->result_array() as $sws):
                        
                        $id_siswa=$sws['id_siswa'];
                        $nama=$sws['nama'];
                        $jenis_kelamin=$sws['jenis_kelamin'];
                        $alamat=$sws['alamat'];
                        $telepon=$sws['telepon'];
                ?>
<tr>
	<td><?php echo $id_siswa;?></td>
	<td><?php echo $nama;?></td>
	<td><?php echo $jenis_kelamin;?></td>
	<td><?php echo $alamat;?></td>
	<td><?php echo $telepon;?></td>
	<td><a class="btn btn-xs btn-danger" href="#modalEditSiswa<?php echo $id_siswa?>" data-toggle="modal" title="Edit"><span class="fa fa-download"></span> Penarikan</a></td>
   
		
</tr>
<?php endforeach; ?>
  </table>
  </div>
		

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
	<!-- Button trigger modal -->



<!-- Modal nu kadua-->
<?php 
                  
                    foreach ($data->result_array() as $sws){
                        
                        $id_siswa=$sws['id_siswa'];
                        $nama=$sws['nama'];
                        $alamat=$sws['alamat'];
                        $telepon=$sws['telepon'];
                ?>
                
<div class="modal fade" id="modalEditSiswa<?php echo $id_siswa?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penarikan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
               <form method="post" action="<?php echo base_url().'admin/penarikan/penarikan' ?>">
      <div class="modal-body">
   
	<table class="table">
				<tr>
					<td style="width:10%;">
						Nama 
					</td>
					<td>
						: <?php echo $nama;?>
					</td>
				</tr>
				<tr>					
					<td>
						Telepon
					</td>
					<td>
						: <?php echo $telepon ; ?>
					</td>
				</tr>
				<tr>		
					<td>
						Alamat
					</td>
					<td>
						: <?php echo $alamat ; ?>
					</td>
				</tr>
			</table>
            <br>
            <div class="form-group">
                             <input name="id_siswa" value="<?php echo $id_siswa;?>" class="form-control" type="text"  placeholder="Jumlah Setor..." hidden>
                                <input name="penarikan" class="form-control" type="text"  placeholder="Jumlah penarikan..." required>
                          
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Tarik</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
        }
        ?>
          
</body>
</html>


