<?php
$akses = "SELENGKAPNYA";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #foto {
            height : 350px;
        }

        #text {
            margin-top : 200px;
            height : 150px;
            background-color : black;
            opacity : 0.5;
        }
    </style>
</head>
<body>
    
    <div class="container text-center">
        <h3 style="color: darkblue">Penawaran Terbaik XL</h3>
        <p>Nikmati berbagai pilihan untuk semua kebutuhan komunikasi Anda.</p>

        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-dark text-white">
                    <img src="img/1.jpg" class="card-img" id="foto">
                    <div class="card-img-overlay" id="text">
                        <h4>Xtra Combo VIP</h4>
                        <p>Nikmati pengalaman internetan dan nelpon dalam satu paket dengan Xtra keuntungan VIP</p>
                        <p><a href="#"><?php echo $akses; ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-dark text-white">
                    <img src="img/2.jpg" class="card-img" id="foto">
                    <div class="card-img-overlay" id="text">
                        <h4>XL PRIORITAS</h4>
                        <p>Rasakan pengalaman menjelajahi internet yang cepat dan andal</p><br>
                        <p><a href="#"><?php echo $akses; ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-dark text-white">
                    <img src="img/3.jpg" class="card-img" id="foto">
                    <div class="card-img-overlay" id="text">
                        <h4>XL Home</h4>
                        <p>Nikmati hiburan kekinian dengan internet fiber optic super cepat dan stabil</p>
                        <p><a href="#"><?php echo $akses; ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-dark text-white">
                    <img src="img/4.jpg" class="card-img" id="foto">
                    <div class="card-img-overlay" id="text">
                        <h4>XL PRIORITAS</h4>
                        <p>Rasakan pengalaman menjelajahi internet yang cepat dan andal</p><br>
                        <p><a href="#"><?php echo $akses; ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>