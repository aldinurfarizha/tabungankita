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

	<h1>Detail Tabungan<br></h1>
	<p align="right">
	<a class="btn btn-primary" href="http://localhost/tabungankita/admin/tabungan">Kembali</a>
</p>
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
	<?php 
                  $no=0;
                    foreach ($siswa->result_array() as $sws):
                        $no++;
						$nama=$sws['nama'];
						$telepon=$sws['telepon'];
                        $alamat=$sws['alamat'];
                    
            
                ?>
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
			<?php endforeach; ?>
		
			<br>
			
			<table class="table table-striped">
					<tr>
						<th>
							No
						</th>
						<th>
							Setoran
						</th>
						<th>
							Penarikan
						</th>
						<th>
							Saldo
						</th>
					</tr>
					<?php 
                  $no=0;
                    foreach ($tabungan->result_array() as $tbg):
                        $no++;
						$setoran=$tbg['setoran'];
						$penarikan=$tbg['penarikan'];
                        $saldo=$tbg['saldo'];
                    
            
                ?>
			<tr>
				<td><?php echo $no ; ?></td>
				<td><?php echo $setoran ; ?></td>
				<td><?php echo $penarikan ; ?></td>
				<td><?php echo $saldo ; ?></td>
				</tr>
					<?php endforeach; ?>
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
	<!-- Button trigger modal -->
	
	

</body>
</html>


