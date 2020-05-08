<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Produk</title>
    <!--Load file bootstrap.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
  
<div class="container">
    <h1>Data <strong>Produk</strong></h1>
 
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID PRODUK</th>
                <th>NAMA PRODUK</th>
                <th>HARGA</th>
                <th>GAMBAR</th>
                <th>DESKRIPSI</th>
                <th>KATEGORI</th>
            </tr>
        </thead>
        <tbody>
            <!--Fetch data dari database-->
            <?php foreach ($data->result() as $row) :?>
                <tr>
                    <td><?php echo $row->id_produk; ?></td>
                    <td><?php echo $row->nama_produk; ?></td>
                    <td><?php echo $row->harga; ?></td>
                    <td><img src="<?php echo base_url('gambar/'.$row->gambar.''); ?>" class="m-auto" width="200px" alt="..." > </td>
                    <td><?php echo $row->deskripsi; ?></td>
                    <td><?php echo $row->kategori; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
      
 
</div>
<!--Load file bootstrap.js-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>