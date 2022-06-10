<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <met<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <h2>Belanja Online</h2>
    <form method="POST" action="form_belanja.php">
    <hr>
    <div class="container row col-12">
        <div class="col-6">
            <div class="form-group row">
                <label for="customer" class="col-4 col-form-label"><b><p class="text-right">Customer</p></b></label> 
                <div class="col-6">
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4"><b><p class="text-right">Produk Pilihan</p></b></label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label"><b><p class="text-right">Jumlah Beli</p></b></label> 
                <div class="col-4">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" value="Simpan" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="container col-6" style="float:right;">
                <div class="list-group" style="width: 20rem;">
                <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
                <a href="#" class="list-group-item list-group-item-action">TV : 4.200.000</a>
                <a href="#" class="list-group-item list-group-item-action">KULKAS : 3.100.000</a>
                <a href="#" class="list-group-item list-group-item-action">MESIN CUCI : 3.800.000</a>
                <a href="#" class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</a>
                </div>
            </div>
        </div> 
    </div>
    <hr>
</form>
<?php
$proses = $_POST['proses'];
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
if ($produk == 'TELEVISI') {
    $total = $jumlah * 4200000;
}elseif ($produk == 'KULKAS'){
    $total = $jumlah * 3100000;
}elseif($produk == 'MESIN CUCI'){
    $total = $jumlah * 3800000;
}


if(!empty($proses)){
    echo "Nama Customer : $customer";
    echo "<br/>Produk Pilihan : $produk";
    echo "<br/>Jumlah Beli : $jumlah";
    echo "<br/>Total Belanja : Rp" .number_format($total,2,',','.');
}
?>
</body>
</html>