<!-- Nama : M Nur Rizqi Saputra -->
<!-- NIM : 0110120025 -->
<!-- Kelas : SI 02 -->
<!-- Method : Post -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    <marquee style="color:  rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">SELAMAT BERBELANJA</marquee>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tes.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;"> NAMA PEMBELI</label>
                    <input type="text" name="pembeli" value="" placeholder="Masukan Nama Pembeli" class="form-control">
            </div>
                <hr>
                <div class="form-group">
                <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">ITEM</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tv" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="kulkas" id="inlineRadio2" value="KULKAS">
                    <label class="form-check-label" for="inlineRadio2">KULKAS</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cuci" id="inlineRadio3" value="MESIN CUCI">
                    <label class="form-check-label" for="inlineRadio3">MESIN CUCI</label>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">TOTAL ITEM</label>
                    <input type="number" name="jumitem" value="" placeholder="Masukan Jumlah Item Yang Akan Di beli" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">BERAPA UNIT TV YANG DI BELI:</label>
                    <input type="number" name="jumtv" value="" placeholder="Masukan Jumlah Unit TV atau Kosongkan Jika tidak membeli" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">BERAPA UNIT KULKAS YANG DI BELI</label>
                    <input type="number" name="jumkulkas" value="" placeholder="Masukan Jumlah Unit Kulkas atau Kosongkan Jika tidak membeli" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">BERAPA UNIT MESIN CUCI YANG DI BELI</label>
                    <input type="number" name="jumcuci" value="" placeholder="Masukan Jumlah Unit Mesin Cuci atau Kosongkan Jika tidak membeli" class="form-control">
                </div>
                <hr>
                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">WAKTU PEMBELIAN</label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>

                <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">LAYANAN EKSPEDISI</label>
                <select class="form-select form-control" class="form-control" name="kurir">
                    <option selected>Pilih Layanan Ekspedisi :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">ALAMAT YANG DI TUJU</label>
                    <textarea class="form-control" name="alamat" id="" placeholder="Masukan Alamat Tujuan" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">BIAYA ONGKIR</label>
                    <input type="text" name="hargakurir" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">BIAYA ASURANSI</label>
                    <input type="text" name="hargaasuransi" value="" class="form-control">
                </div>
                <input type="submit" value="SIMPAN" name="simpan" class="btn btn-success btn-sm btn-block" style="border-radius: 30px; line-height: 200%;">
            </form>
            </div>

            <?php
            $_pembeli = $_POST['pembeli'];
            $_tv = $_POST['tv'];
            $_kulkas = $_POST['kulkas'];
            $_cuci = $_POST['cuci'];
            $_item = array($_tv, $_kulkas, $_cuci);

            $_jumitem = $_POST['jumitem'];

            $_jumtv = $_POST['jumtv'];
            $_totaltv = (int)$_jumtv * 3000000;

            $_jumkulkas = $_POST['jumkulkas'];
            $_totalkulkas = (int)$_jumkulkas * 6000000;

            $_jumcuci = $_POST['jumcuci'];
            $_totalcuci = (int)$_jumcuci * 4000000;

            $_tanggal = $_POST['tanggal'];
            $_kurir = $_POST['kurir'];
            $_alamat = $_POST['alamat'];
            $_hargakurir = $_POST['hargakurir'];
            $_hargaasuransi = $_POST['hargaasuransi'];
            $_barang = $_POST['barang'];

            $_a = array($_totaltv,$_totalkulkas, $_totalcuci, $_hargakurir, $_hargaasuransi);
            $_total = array_sum($_a);
            
            
	        foreach ($_item as $skill) {
		    if ( isset($_POST['skill_' . $skill]) )
		    {
			$_item[] = $skill;
            }
            }
            
            $_save = $_POST['simpan'];
            ?>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white" >
                    <h5 style="color:  rgb(255, 255, 0);">RINCIAN BELANJA ANDA</h5>
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama Pembeli : <?php echo $_pembeli; ?></li>
                    <li class="list-group-item">Item : <?php echo ($_item ? join($_item, ' , ') : '-') ?> </li>
                    <li class="list-group-item">Jumlah Item : <?php echo $_jumitem; ?></li>
                    <li class="list-group-item">Total Beli TV : <?php echo $_jumtv." ".', dengan harga total Rp.'." ". $_totaltv; ?></li>
                    <li class="list-group-item">Total Beli Kulkas : <?php echo $_jumkulkas." ".', dengan harga total Rp.'." ". $_totalkulkas; ?></li>
                    <li class="list-group-item">Total Beli Mesin Cuci : <?php echo $_jumcuci." ".', dengan harga total Rp.'." ". $_totalcuci; ?></li>
                    <li class="list-group-item">Waktu Belanja : <?php echo $_tanggal; ?> </li>
                    <li class="list-group-item">Layanan Ekspedisi : <?php echo $_kurir; ?></li>
                    <li class="list-group-item">Alamat : <?php echo $_alamat; ?></li>
                    <li class="list-group-item">Biaya Ongkir : <?php echo 'Rp.'.$_hargakurir; ?> </li>
                    <li class="list-group-item">Biaya Asuransi : <?php echo 'Rp.'.$_hargaasuransi; ?> </li>
                    <li class="list-group-item" style="color: rgb(255, 255, 0) ; background-color: rgb(255, 0, 0); font-weight: bold;" >Total Yang harus dibayar : <?php echo 'Rp.'.$_total; ?></li>
                </ul> 
                </div>
                
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    <h5 style="color:  rgb(255, 255, 0);">DAFTAR HARGA SATUAN</h5>
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3.000.000</li>
                    <li class="list-group-item">KULKAS : Rp.6.000.000</li>
                    <li class="list-group-item">MESIN CUCI : Rp. 4.000.000</li>
                </ul>
                </div>
            </div>
            
            
        </div>
        
    </div>
    <marquee style="color:  rgb(255, 255, 255);background-color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">Dibuat oleh Muhammad Nur Rizqi Saputra (0110120025)</marquee>
</body>
</html>