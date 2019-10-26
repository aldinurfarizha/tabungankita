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

	<h1><center>Data Siswa</center><br></h1>
	    
	<?php if($this->session->flashdata('message') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Data Berhasil Disimpan ...
</div> 
<?php endif; ?>
<form action="<?=site_url('admin/siswa/cari')?>" method="post">
	<input type="text" placeholder="Cari Berdasarkan Nama" name="cari">
  <button type="submit" class="btn btn-success"  value="Cari" ><i class="fa fa-search"></i></button>
  <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
 Tambah Siswa
</button>
</form>

    


	
	<br>
		<table class="table">
	
<tr>
	<th>NIS</th>
	<th>Nama Siswa</th>
	<th>Jenis Kelamin</th>
	<th>Alamat</th>
	<th>Telepon</th>
  <th>Kelas</th>
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
                        $kelas=$sws['kelas'];
                ?>
<tr>
	<td><?php echo $id_siswa;?></td>
	<td><?php echo $nama;?></td>
	<td><?php echo $jenis_kelamin;?></td>
	<td><?php echo $alamat;?></td>
	<td><?php echo $telepon;?></td>
  <td><?php echo $kelas;?></td>
  
	<td><a class="btn btn-xs btn-warning" href="#modalEditSiswa<?php echo $id_siswa?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a></td>
    <td><a class="btn btn-xs btn-danger" href="#modalHapusSiswa<?php echo $id_siswa?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a></td>
		
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
		<input type="text" name="id_siswa" class="form-control" required>
		<label>Nama Siswa</label>
		<input type="text" name="nama" class="form-control" required>
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control"required>
		<label>Telepon</label>
		<input type="number" name="telepon" class="form-control"required>
    <label>Kelas</label>
		<select name="kelas" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kelas" data-width="80%" placeholder="Pilih Kelas" required>
                                <option>-Pilih Kelas-</option>
                                <option>1A</option>
                                <option>1B</option>
                                <option>1C</option>
                                <option>1D</option>
                                <option>1E</option>
                                <option>2A</option>
                                <option>2B</option>
                                <option>2C</option>
                                <option>2D</option>
                                <option>2E</option>
                                <option>3A</option>
                                <option>3B</option>
                                <option>3C</option>
                                <option>3D</option>
                                <option>3E</option>
                                <option>4A</option>
                                <option>4B</option>
                                <option>4C</option>
                                <option>4D</option>
                                <option>4E</option>
                                <option>5A</option>
                                <option>5B</option>
                                <option>5C</option>
                                <option>5D</option>
                                <option>5E</option>
                                <option>6A</option>
                                <option>6B</option>
                                <option>6C</option>
                                <option>6D</option>
                                <option>6E</option>
                             </select>
		<label>Jenis Kelamin</label>
		<div class="radio" required>
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki" >Laki-laki
			</label>
      <br>
      <label>
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
			</label>
		</div>
	
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
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
<div class="modal fade" id="modalEditSiswa<?php echo $id_siswa?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
               <form method="post" action="<?php echo base_url().'admin/siswa/edit_siswa' ?>">
      <div class="modal-body">

      <div class="form-group">
                            <label>NIS</label>
                            
                                <input name="id_siswa" class="form-control" type="text" value="<?php echo $id_siswa;?>" placeholder="NIS..." readonly>
                          
                        </div>

       <div class="form-group">
                            <label>Nama</label>
                            
                                <input name="nama" class="form-control" type="text" value="<?php echo $nama;?>" placeholder="Nama..." required>
                         
                        </div>

        <div class="form-group">
                            <label>Alamat</label>
                        
                                <input name="alamat" class="form-control" type="text" value="<?php echo $alamat;?>" placeholder="Alamat..."  required>
                          
                        </div>

       <div class="form-group">
                            <label>Telepon</label>
                          
                                <input name="telepon" class="form-control" type="text" value="<?php echo $telepon;?>" placeholder="Telepon..." required>
                       
                        </div>
        <div class="form-group">
                            <label>Kelas</label>
                          
                            <select name="kelas" class="selectpicker show-tick form-control"  data-live-search="true" title="Pilih Kelas" data-width="80%" placeholder="Pilih Kelas" required>
                                <option>-Pilih Kelas-</option>
                                <option>1A</option>
                                <option>1B</option>
                                <option>1C</option>
                                <option>1D</option>
                                <option>1E</option>
                                <option>2A</option>
                                <option>2B</option>
                                <option>2C</option>
                                <option>2D</option>
                                <option>2E</option>
                                <option>3A</option>
                                <option>3B</option>
                                <option>3C</option>
                                <option>3D</option>
                                <option>3E</option>
                                <option>4A</option>
                                <option>4B</option>
                                <option>4C</option>
                                <option>4D</option>
                                <option>4E</option>
                                <option>5A</option>
                                <option>5B</option>
                                <option>5C</option>
                                <option>5D</option>
                                <option>5E</option>
                                <option>6A</option>
                                <option>6B</option>
                                <option>6C</option>
                                <option>6D</option>
                                <option>6E</option>
                             </select>
                        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
        }
        ?>
          <!-- ============ MODAL PUPUS =============== -->
        <?php 
                  
                  foreach ($data->result_array() as $sws){
                      
                      $id_siswa=$sws['id_siswa'];
                      $nama=$sws['nama'];
                      $alamat=$sws['alamat'];
                      $telepon=$sws['telepon'];
              ?>
               <div id="modalHapusSiswa<?php echo $id_siswa?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Hapus Siswa</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/siswa/hapus_siswa'?>">
                        <div class="modal-body">
                            <p>Yakin bade hapus data siswa nu ieu?</p>
                                   <input name="id_siswa" type="hidden" value="<?php echo $id_siswa; ?>"> 
                                    <input class="form-control" name="nama"value="<?php echo $nama; ?>" readonly>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
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


