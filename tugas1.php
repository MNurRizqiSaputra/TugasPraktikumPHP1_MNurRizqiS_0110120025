<!-- Nama : M Nur Rizqi Saputra -->
<!-- NIM : 0110120025 -->
<!-- Kelas : SI 02 -->
<!-- Method : Get -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>

<body>

    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    <marquee style="color:  rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">Web Pengisian Nilai Mahasiswa</marquee>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">Nama Mahasiswa</label>
                    <input type="text" name="nama" value="" placeholder="Masukan Nama" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">NIM</label>
                    <input type="text" name="nim" value="" placeholder="Masukan NIM" class="form-control">
                </div>
                <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">Mata Kuliah</label>
                <select class="form-select form-control" name="matkul" class="form-control">
                    <option selected  >Pilih Mata Kuliah :</option>
                    <option value="WEB PROGRAMMING">Web Programming</option>
                    <option value="DATABASE">Database</option>
                    <option value="STATISKA">Statiska</option>
                    <option value="PKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <br>
                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;"> Nilai UTS</label>
                    <input type="number" name="uts" value="" placeholder="Masukan Nilai UTS" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">Nilai UAS</label>
                    <input type="number" name="uas" value="" placeholder="Masukan Nilai UAS" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="" style="color:  rgb(0, 0, 128); font-family: Arial; font-weight: bold;">Nilai Tugas</label>
                    <input type="number" name="tugas" value="" placeholder="Masukan Nilai Tugas" class="form-control">
                </div>

                <input type="submit" value="SIMPAN" name="proses" class="btn btn-primary btn-sm btn-block" style="border-radius: 30px; line-height: 200%;">

            </form>
            </div>

            <?php
            $_nama = $_GET['nama'];
            $_nim    = $_GET['nim'];
            $_matkul = $_GET['matkul'];
            $_uts = $_GET['uts'];
            $_uas = $_GET['uas'];
            $_tugas = $_GET['tugas'];
            $_a = array($_uts,$_uas, $_tugas);
            $_total = array_sum($_a);
            $_rata = $_total/3;
            
            if ($_rata == 0)
            {
                $_huruf = "-";
            }
            elseif ($_rata >= 85) {
                $_huruf = "A";
            }
            elseif ($_rata >= 70) {
                $_huruf = "B";
            }
            elseif ($_rata >= 60) {
                $_huruf = "C";
            }
            elseif ($_rata >= 40) {
                $_huruf = "D";
            }
            elseif ($_rata < 40) {
                $_huruf = "E";
            }

            $_save = $_GET['proses'];
            ?>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    <h5 style="color:  rgb(255, 255, 0); font-weight: bold;">Rincian Nilai Mahasiswa</h5>
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama Mahasiswa : <?php echo $_nama; ?></li>
                    <li class="list-group-item">NIM :  <?php echo $_nim; ?></li>
                    <li class="list-group-item">Mata Kuliah : <?php echo $_matkul; ?></li>
                    <li class="list-group-item">Nilai UTS : <?php echo $_uts; ?></li>
                    <li class="list-group-item">Nilai UAS :  <?php echo $_uas; ?></li>
                    <li class="list-group-item">Nilai TUGAS : <?php echo $_tugas; ?></li>
                    <li class="list-group-item">Nilai Total :  <?php echo $_total; ?></li>
                    <li class="list-group-item">Rata-Rata Nilai :  <?php echo $_rata; ?></li>
                    <li class="list-group-item">Nilai Dalam Alphabet : <?php echo $_huruf; ?> </li>
                    
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    <h5 style="color:  rgb(255, 255, 0); font-weight: bold;">Nilai Dalam Alphabet<br>Berdasar Rata-Rata Nilai</h5>
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
    <marquee style="color:  rgb(255, 255, 255);background-color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">Dibuat oleh Muhammad Nur Rizqi Saputra (0110120025)</marquee>
</body>
</html>
