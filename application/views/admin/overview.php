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

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>
		<?php 
                  
				  foreach ($saldo->result_array() as $a_saldo):
					  
					  $a_saldo=$a_saldo['saldo'];
				
					 
			  ?>
			  <?php endforeach; ?>
			  <?php 
                  
				  foreach ($siswa->result_array() as $a_jml_siswa):
					  
					  $a_jml_siswa=$a_jml_siswa['jml_siswa'];
				
					 
			  ?>
			  <?php endforeach; ?>
			  
			  <?php 
                  
				  foreach ($setor->result_array() as $a_setor):
					  
					  $a_setor=$a_setor['jml_setoran'];
				
					 
			  ?>
			  <?php endforeach; ?>
			  <?php 
                  
				  foreach ($penarikan->result_array() as $a_penarikan):
					  
					  $a_penarikan=$a_penarikan['jml_penarikan'];
				
					 
			  ?>
			  <?php endforeach; ?>
			  
			  
			 
		<!-- Icon Cards-->
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-usd"></i>
				</div>
				<div class="mr-5"><h3>Rp. <?php echo $a_saldo;?></h3> Total Saldo Tabungan</div>
				</div>
			
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-warning o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-list"></i>
				</div>
				<div class="mr-5"><h3><?php echo $a_jml_siswa;?></h3> Siswa Terdaftar</div>
				</div>
				
	
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-success o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-shopping-cart"></i>
				</div>
				<div class="mr-5"><h3>Rp. <?php echo $a_setor;?></h3> Total Setor</div>
				</div>
				
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-life-ring"></i>
				</div>
				<div class="mr-5"><h3>Rp. <?php echo $a_penarikan;?></h3> Total Penarikan</div>
				</div>
			</div>
			</div>
		</div>


		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>