<?php

echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        }

        .nav {
            background-color: blue;
        }

        .nav-link {
            color: #fff;
        }
    </style>
</head>

<body style="overflow-x: hidden;">
    <!-- navbar -->
    <div class="row">
        <div class="col-md-12">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bisnis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perusahaan</a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="#">Indonesia</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="img_navbar_footer/xl-logo.png" width="50px" class="img-fluid mx-2">
                    </a>
                    <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Mobile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Prabayar</a>
                                  <a class="dropdown-item" href="#">Pascabayar</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Promo</a>
                                </div>
                              </li>
                              <li class="nav-item active mx-4">
                                <a class="nav-link" href="#">Mobile Broadband</a>
                              </li>
                              <li class="nav-item active mx-4">
                                <a class="nav-link" href="#">Bantuan</a>
                              </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script>
        $(window).scroll(function(){
            var y = $(window).scrollTop();

            if(y >=50){
                $(".nav").hide(200),
                $(".navbar").addClass("fixed-top");
            }else{
                $(".nav").show(100)
                $(".navbar").removeClass("fixed-top");
            }
        })
    </script>
</body>
</html>'

?>