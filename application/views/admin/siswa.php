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
<?php foreach ($siswa as $sws) : ?>
<tr>

	<td><?php echo $sws->id_siswa ?></td>
	<td><?php echo $sws->nama ?></td>
	<td><?php echo $sws->jenis_kelamin?></td>
	<td><?php echo $sws->alamat?></td>
	<td><?php echo $sws->telepon ?></td>
	<td onclick="javascript: return confirm('Anda Yakin Hapus ? ')"><?php echo anchor ('admin/siswa/hapus/'.$sws->id_siswa, '<div class="btn btn-danger btn-sm"><i class ="fa fa-trash"></i></div>')?></td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#asd<?php echo $sws->id_siswa?>"><i class="fa fa-edit"></i></button></td>
		
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

<!-- Modal nu kadua-->
<?php
                    foreach ($siswa as $a) {
                        $id=$a['id_siswa'];
                     
                    ?>
<div class="modal asd" id="asd<?php echo $sws->id_siswa?>" tabindex="-1" role="dialog" aria-labelledby="asd" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="asd">Edit Siswa</h5>
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
<?php
        }
        ?>
</body>
</html>


