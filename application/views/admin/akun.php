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

	<h1><center>Akun Pengelola</center><br></h1>
	    
	<?php if($this->session->flashdata('message') == TRUE):?>
	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
  <strong>Sukses !</strong> Data Berhasil Disimpan ...
</div> 
<?php endif; ?>
<
  
  <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
 Tambah Akun
</button>

    


	
	<br>
		<table class="table">
	
<tr>
	<th>ID</th>
	<th>Username</th>
	<th>Kelas</th>
    <th>Hapus</th>

</tr>

<?php 
                  
                    foreach ($data->result_array() as $sws):
                        
                        $id_akun=$sws['user_id'];
                        $username=$sws['username'];
                        $nama=$sws['nama'];
                  
                ?>
<tr>
	<td><?php echo $id_akun;?></td>
	<td><?php echo $username;?></td>
	<td><?php echo $nama;?></td>
    <td><a class="btn btn-xs btn-danger" href="#modalHapusSiswa<?php echo $id_akun?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a></td>
		
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

        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/akun/tambah_aksi'; ?>">
		<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" required>
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
		<label>Password</label>
		<input type="text" name="password" class="form-control"required>
	
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

          <!-- ============ MODAL PUPUS =============== -->
        <?php 
                  
                  foreach ($data->result_array() as $sws){
                      
                    $id_akun=$sws['user_id'];
                    $username=$sws['username'];
                    $nama=$sws['nama'];
              ?>
               <div id="modalHapusSiswa<?php echo $id_akun?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Hapus Akun</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/akun/hapus_akun'?>">
                        <div class="modal-body">
                            <p>Yakin bade hapus data siswa nu ieu?</p>
                                   <input name="id_akun" type="hidden" value="<?php echo $id_akun; ?>"> 
                                    <input class="form-control" name="nama"value="<?php echo $username; ?>" readonly>
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


