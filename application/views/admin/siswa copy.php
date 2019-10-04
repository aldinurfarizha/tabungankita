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

	<h1>Data Siswa<br></h1>
	    
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
	<th>NIS</th>
	<th>Nama Siswa</th>
	<th>Jenis Kelamin</th>
	<th>Alamat</th>
	<th>Telepon</th>
	<th>Hapus</th>
	<th>Edit</th>
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
	<td><a class="btn btn-xs btn-warning" href="#modalEditSiswa<?php echo $id_siswa?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a></td>
    <td><a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id_siswa?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a></td>
		
</tr>
<?php endforeach; ?>
  </table>
  </div>
		

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
	<!-- Button trigger modal -->


<!-- Modal nu kahiji-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/siswa/tambah_aksi'; ?>">
		<div class="form-group">
		<label>NIS</label>
		<input type="text" name="id_siswa" class="form-control">
		<label>Nama Siswa</label>
		<input type="text" name="nama" class="form-control">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control">
		<label>Telepon</label>
		<input type="number" name="telepon" class="form-control">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
			</label>
		</div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal nu kadua-->
<?php 
                  
                    foreach ($data->result_array() as $sws){
                        
                        $id_siswa=$sws['id_siswa'];
                        $nama=$sws['nama'];
                        $alamat=$sws['alamat'];
                        $telepon=$sws['telepon'];
                ?>
	<div class="modal fade" id="modalEditSiswa<?php echo $id_siswa?>" tabindex="-1" role="dialog" aria-labelledby="asd" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/siswa/edit_siswa' ?>">
		<div class="form-group">
		<label>NIS</label>
		<input type="text" value="<?php echo $id_siswa;?>" name="id_siswa" class="form-control" readonly>
		<label>Nama Siswa</label>
		<input type="text" value="<?php echo $nama;?>" name="nama" class="form-control" required>
		<label>Alamat</label>
		<input type="text" value="<?php echo $alamat;?>" name="alamat" class="form-control"required>
		<label>Telepon</label>
		<input type="number" value="<?php echo $telepon;?>" name="telepon" class="form-control"required>
		
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<?php
        }
        ?>
</body>
</html>


