<br> <br> <br> <br> <br> <br>


<div class="card" style="width: 600px; height: auto; border-radius: 10px; margin-left: 380px;">
 <h2 style="text-align: center;"><?php echo $detail['nama_produk'];?></h2>
 
	<form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf8">
		<div class="kotak2" style="text-align: center;">
			<img class="img-responsive" src="<?php echo base_url() .'gambar/'.$detail['gambar']; ?>" />
			<h5><b>Harga: Rp. <?php echo number_format($detail['harga'],0,",",".");?></b></h5>
			<p class="card-text">
			<strong> Deskripsi : </strong><br>
			<?php echo $detail['deskripsi'];?></p>
	 			<input type="hidden" name="id" value="<?php echo $detail['id_produk']; ?>" />
	 			<input type="hidden" name="nama" value="<?php echo $detail['nama_produk']; ?>" />
	 			<input type="hidden" name="harga" value="<?php echo $detail['harga']; ?>" />
	 			<input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
	 			<input type="hidden" name="qty" value="1" />
			<button class="btn btn-lg btn-success" type="submit"><i class="icon-basket"></i> Beli Produk Ini</button>
			</div>
		</div>

	</form>