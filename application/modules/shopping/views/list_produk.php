
<div class="row">
<div class="col-md-9  ml-auto" style="margin-top: -280px;">
	<h3>Daftar Produk</h3>
	<div class="row row-cols-3">
		<?php foreach ($data->result() as $row) :?>
      
    <div class="col-4 my-3">
      <div class="card border rounded pt-2" style="width: 18rem;">
		  <img src="<?php echo base_url('gambar/'.$row->gambar.''); ?>" class="m-auto"
		  width="200px" alt="..." >
			 <div class="card-body">
	 			<h4 class="card-title">
	 				<a href="#" style="color: #000;"><?php echo $row->nama_produk;?></a>
	 			</h4>
					<h5>Rp. <?php echo number_format($row->harga,0,",",".");?></h5>
	 					<p class="card-text"><?php echo $row->deskripsi;?></p>
	 		 </div>

	 		<div class="card-footer">
	 			<form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf8">
	 				<a href="<?php echo base_url();?>shopping/detail_produk/<?php echo $row->id_produk;?>" class="btn btn-sm btn-default"><i class="icon-magnifier"></i> Detail
	 				</a>
	 				<input type="hidden" name="id" value="<?php echo $row->id_produk; ?>" />
	 				<input type="hidden" name="nama" value="<?php echo $row->nama_produk; ?>" />
	 				<input type="hidden" name="harga" value="<?php echo $row->harga; ?>" />
	 				<input type="hidden" name="gambar" value="<?php echo $row->gambar; ?>" />
	 				<input type="hidden" name="qty" value="1" />
	 				<button type="submit" class="btn btn-sm btn-success"><i class="icon-basket"></i>Beli</button>
 				</form>
 			</div>

		</div>
    </div>
	<?php endforeach; ?>
	<?php  ?>
	</div>
	<?php echo $pagination; ?>
 </div>
</div>