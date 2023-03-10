<?php

@include 'config.php';

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Font Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- My Style-->
    <link rel="stylesheet" href="styles.css">

    <!-- Logo Title-->
    <link rel="icon" href="logo.png"
    type="image/x-icon">

    <title>SMART CAR WASH</title>
</head>

<body>
    


    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark nav-color position-fixed w-100">
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="#">
            <img src="logo.png" alt="" width="80" height="34" class="d-inline-block align-text-top me-4">
            Smart Car Wash</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a  class="nav-link active text-dark" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark " href="#Layanan">Layanan</a class="text-dark">
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark " href="chatbot/chatbot/chatbot.html">Chat Bot</a class="text-dark">
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#contact">Kontak</a class="text-dark">
              </li>
            </ul>
            <div>
                <button class="button-tree"><a class="text-dark" style="text-decoration:none" href="https://www.google.co.id/maps/search/cuci+mobil+terdekat/@-6.9041318,107.5019776,14z/data=!3m1!4b1">Lokasi Terdekat</a></button>
                <button class="button-primary"><a class="text-dark" style="text-decoration:none" href="register_form.php">Daftar</a></button>
                <button class="button-secondary"><a class="text-dark" style="text-decoration:none" href="login_form.php">Masuk</a></button>
          </div>
        </div>
      </nav>


    <!-- Hero Section-->
    

    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="hero-tagline my-auto">
                    <h1 class="md-8">SELAMAT DATANG DI SMART CAR WASH</h1>
                     <p class="md-5">Smart Car Wash Hadir Untuk Anda, Kini Mencuci Mobil tidak perlu mengantri lama karna kami menyediakan layanan booking</p>
                        <button class="button-lg-primary"><a href="Booking.html"text-decoration:none>Booking!</a>

                        </button>
                     </p>   
                    
                </div>
            </div>
            <img src="man.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
        </div>
    </section>        
    
    <!-- Layanan Section -->
    <section id="Layanan">
        <div class="container" style="padding-bottom: 5rem;">
            <div class="row" style="padding-bottom: 2rem;">
                <div class="col-12 text-center">
                    <h2> Our Service</h2>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col md-4 text-center">
                    <div class="Card-Pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="" alt="" class="position-absolute top-40 start-50 translate middle">
                        </div>
                        <h3 class="sub-title mt-4">Terima Booking</h3>
                        <p>Cukup Membooking lewat website anda sudag terdaftar diantrian</p>
                    </div>
                </div>

                <div class="col md-4 text-center">
                    <div class="Card-Pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="" alt="" class="position-absolute top-40 start-50 translate middle">
                        </div>
                        <h3 class="sub-title mt-4">Body Polish</h3>
                        <p>Kami menjadikan mobil anda seperti baru</p>
                    </div>
                </div>

                <div class="col md-4 text-center">
                    <div class="Card-Pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="" alt="" class="position-absolute top-40 start-50 translate middle">
                        </div>
                        <h3 class="sub-title mt-4">Menghilangkan Baret</h3>
                        <p>Baret Kaca(Bekas Wiper) dan baret pada body</p>
                    </div>
                </div>

                <div class="col md-4 text-center">
                    <div class="Card-Pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="" alt="" class="position-absolute top-40 start-50 translate middle">
                        </div>
                        <h3 class="sub-title mt-4">Interior</h3>
                        <p>Termasuk Dashboard, Cuci Karpet, Jok, dan Plafon</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #Tentang-->
    <!-- Quotes -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="foto/1.png" class="d-block w-100" alt="..." />
            <div class="carousel-content" style="margin-bottom: -3.5rem; margin-left: -20rem; margin-right: 30rem; align-content: center">
            </div>
          </div>
          <div class="carousel-item">
            <img src="foto/2.png" class="d-block w-100" alt="..." />
            <div class="carousel-content" style="margin-bottom: -1rem; margin-left: -12rem">
            </div>
          </div>
          <div class="carousel-item">
            <img src="foto/3.png" class="d-block w-100" alt="..." />
            <div class="carousel-content" style="margin-bottom: -3rem; margin-left: -8rem">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Akhir Quotes -->
    <!-- Contact Us-->
    <section id="contact">
        <div class="container">
          <div class="row text-center">
            <div class="col mb-4">
              <h2 class="text-warning fw-bold">Contact Us</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" name="name" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-warning text-white">Kirim</button>
              </form>
            </div>
          </div>
        </div>
   </section>
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
            <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-1">
            <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                ><i class="bi bi-twitter"></i
                ></a>
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="bi bi-google"></i
                    ></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="bi bi-instagram"></i
                        ></a>
                        <!-- Github -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                          ><i class="bi bi-github"></i
                            ></a>
            </section>

    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->


        <div class="container">
          <section id="sosmed" class="mb-4"></section>
        </div>
  
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">Copyright © 2022 <a style="text-decoration:none" target="_blank" href="https://www.instagram.com/m.salmant/" class="text-white">SMART CAR WASH</a>. All rights reserved.</div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/scroll.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    

    


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>