<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<fieldset>
        <legend>Belanja Online</legend>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="row col-12">
  <div class="col-6">
  <form method="POST" action="ini.php">
  <div class="form-group row">
    <label for="customer" class="col-3 col-form-label">Customer</label> 
    <div class="col-7">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div  id="produk" name="produk" class="form-group row">
    <label class="col-3">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-3 col-form-label">Jumlah</label> 
    <div class="col-7">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-3">
      <button name="proses" type="submit" value="Kirim" class="btn btn-success">Kirim</button>
    </div>
  </div>
  </div>
</form>
<div class="col-6">
		<div style="float: right" class="col-md-6">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV : 4.200.000
				</div>
        <div class="list-group-item">
					Kulkas : 3.100.000
				</div>
        <div class="list-group-item">
					MESIN CUCI : 3.800.000
				</div><a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</a>
			</div>
    </div>
</div>
</div>
</fieldset>
</body>
</html>
<?php
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$total = $jumlah + $produk;

if(!empty($proses)){
echo "Nama Customer : $customer";
echo "<br/>Produk Pilihan : $produk";
echo "<br/>Jumlah Beli : $jumlah";
echo "<br/>Total Belanja : $total";
}
?>