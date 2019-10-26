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

<center><h1>Data Tabungan<br></h1></center>
	<form action="<?=site_url('admin/tabungan/cari')?>" method="post">
	<input type="text" placeholder="Cari berdasarkan NISN" name="cari" required>
  <button type="submit" class="btn btn-primary"  value="Cari" ><i class="fa fa-search"></i></button>
</form>
	<?php if($this->session->flashdata('message') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Data Berhasil Disimpan ...
</div> 
<?php endif; ?>
	<p align="right">
	
</p>
	
	<br>
		<table class="table">
	
<tr>
	<th>NO.</th>
    <th>NISN</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>Saldo</th>
	<th>Pilihan</th>

</tr>

<?php 
                  $no=0;
                    foreach ($data->result_array() as $sws):
                        $no++;
                        $id_siswa=$sws['id_siswa'];
                        $nama=$sws['nama'];
                        $alamat=$sws['alamat'];
                        $saldo=$sws['saldo'];
                       
            
                ?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $id_siswa;?></td>
	<td><?php echo $nama;?></td>
	<td><?php echo $alamat;?></td>
	<td><?php echo $saldo;?></td>
	<td><?php echo anchor ('admin/detail/rinci/'.$id_siswa, '<div class="btn btn-primary btn-sm"><i class ="fa fa-edit">Detail</i></div>')?></td>
	
		
</tr>
<?php endforeach; ?>
  </table>
  </div>
		

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
	<!-- Button trigger modal -->
	
	

</body>
</html>


