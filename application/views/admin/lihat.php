<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<form action="<?=site_url('admin/detail/android_filter_bulan')?>" method="post">
		
<?php 
                  $no=0;
                    foreach ($siswa->result_array() as $sws):
						$no++;
						$id_siswa=$sws['id_siswa'];
						$nama=$sws['nama'];
						$telepon=$sws['telepon'];
                        $alamat=$sws['alamat'];
                    
            
                ?>
				<?php endforeach; ?>
			<select name="bulan" class="form-control select2" style="width: 100%;">
                        <option selected="selected">-Pilih Bulan-</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">juni</option>
                    <option value="7">juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                    
                      </select>
                    </div>
                  </div>
      <br>
	  
	  <input name="id_siswa"  type="text"  value="<?php echo $id_siswa;?>" hidden>
			<input type="submit" class="btn btn-primary" value="FILTER">
     
		</form>
	<br>

<div id="wrapper">



	<div id="content-wrapper">

		<div class="container-fluid">

	<h1>Detail Tabungan<br></h1>
	
	
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
						$id_siswa=$sws['id_siswa'];
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
						<th>
							Tanggal
						</th>
					</tr>
					<?php 
                  $no=0;
                    foreach ($tabungan->result_array() as $tbg):
                        $no++;
						$setoran=$tbg['setoran'];
						$penarikan=$tbg['penarikan'];
                        $saldo=$tbg['saldo'];
						$tgl=$tbg['tgl']; 
            
                ?>
			<tr>
				<td><?php echo $no ; ?></td>
				<td><?php echo $setoran ; ?></td>
				<td><?php echo $penarikan ; ?></td>
				<td><?php echo $saldo ; ?></td>
				<td><?php echo $tgl ; ?></td>
				</tr>
					<?php endforeach; ?>
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
	<!-- Button trigger modal -->
	
	

</body>
</html>


