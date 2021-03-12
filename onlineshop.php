<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body style="background-color:white;">
    <div class="bg-success p-1">
    <h1 class="text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6" style="color:green;">
            <form action="onlineshop.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for="">Pembeli</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Produk</label><br>
                  <div class="form-check form-check-inline" style="color:black;">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline" style="color:black;">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="Kulkas">
                    <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                    </div>
                    <div class="form-check form-check-inline" style="color:black;">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="Mesin Cuci">
                    <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Produk</label>
                    <input type="number" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""> Tanggal Pembelian</label>
                    <input type="date" name="tanggal_order" value="" class="form-control">
                </div>
                <label for="">Jenis Layanan</label>
                <select class="form-select form-control" name= "kurir" class="form-control">
                    <option selected>Pilih Jenis Layanan :</option>
                    <option value="JNT">JNT</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value=" JNE">JNE</option>
                    <option value=" Grab">Grab</option>
                    <option value=" Gojek">Gojek</option>
                </select>
                <br>
                <div class="form-group">
                    <label for="">Alamat Pengiriman</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Biaya Ongkir</label>
                    <input type="number" name="biaya_antar" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Biaya Asuransi</label>
                    <input type="number" name="asuransi" value="" class="form-control">
                </div>
                <br>
                <input type="submit" value="Simpan" name="simpan" class="ml-0 btn btn-success ">
            </form>
            <?php

error_reporting(0);
    
    $customer = $_POST['customer'];
    $item = $_POST['item'];
    $total_item = $_POST['total_item'];
    $tanggal_order = $_POST['tanggal_order'];
    $kurir = $_POST['kurir'];
    $alamat = $_POST['alamat'];
    $biaya_antar = $_POST['biaya_antar'];
    $asuransi = $_POST['asuransi'];
    $simpan = $_POST['simpan'];
    if($item == "TV") {
        $total_cost = (3000000 * $total_item) + ($biaya_antar + $asuransi);
    } else if ($item == "Refrigator") {
        $total_cost = (6000000 * $total_item) + ($biaya_antar + $asuransi);
    } else{
        $total_cost = (4000000 * $total_item) + ($biaya_antar + $asuransi);
    }
?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Hasil
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pembeli :<?= $customer; ?></li>
                    <li class="list-group-item">Produk : <?= $item; ?></li>
                    <li class="list-group-item">Total Produk : <?= $total_item; ?> pcs</li>
                    <li class="list-group-item">Tanggal Pembelian : <?= $tanggal_order; ?> </li>
                    <li class="list-group-item">Jenis Layanan : <?= $kurir; ?></li>
                    <li class="list-group-item">Alamat Pengiriman : <?= $alamat; ?></li>
                    <li class="list-group-item">Biaya Ongkir : Rp <?= number_format($biaya_antar,0,".","."); ?> </li>
                    <li class="list-group-item">Biaya Asuransi : Rp <?= number_format($asuransi,0,".","."); ?> </li>
                    <li class="list-group-item">Total Biaya : Rp <?= number_format($total_cost,0,".","."); ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Daftar Harga
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3.000.000</li>
                    <li class="list-group-item">Kulkas : Rp.6.000.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp. 4.000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>