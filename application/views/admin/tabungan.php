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

	<h1>Data Tabungan<br></h1>
	    
	<?php if($this->session->flashdata('message') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Data Berhasil Disimpan ...
</div> 
<?php endif; ?>
	<p align="right">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
 Tambah Siswa
</button>
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
                        $penarikan=$sws['jumlah_penarikan'];
                        $setoran=$sws['jumlah_setoran'];
            
                ?>
<tr>
	<td><?php echo $no;?></td>
	<td><?php echo $id_siswa;?></td>
	<td><?php echo $nama;?></td>
	<td><?php echo $alamat;?></td>
	<td><?php echo $setoran-$penarikan;?></td>
	<td><a class="btn btn-xs btn-warning" href="#modalEditSiswa<?php echo $id_siswa?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Detail</a></td>
		
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


