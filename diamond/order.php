<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:wght@700&family=Poppins:wght@600&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="../style.css"><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="shortcut icon" href="https://cryptologos.cc/logos/aave-aave-logo.png">
    <title>Home</title>

    <!--Midtrans-->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-r6DqOvfiFbuwqmXd"></script>
</head>

<body style="background-color: rgb(24, 24, 59)">

        <?php
        if(isset($_GET['pesan']) && $_GET['pesan'] == 'kosong'){
                ?>
                <div class="alert border border-light alert-dismissible fade show" role="alert" style="width: 80vw;
                    position:sticky; top:15%; left: 10%; z-index:1000;
                    background: rgba(210,0,0,0.8);">
                    <strong class="text-light">Semua field harus terisi !</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
        }else if(isset($_GET['pesan']) && $_GET['pesan'] == 'sukses'){
            ?>
                <div class="alert border border-light alert-dismissible fade show" role="alert" style="width: 80vw;
                    position:sticky; top:15%; left: 10%; z-index:1000;
                    background: rgba(0,210,0,0.8);">
                    <strong class="text-light">Transaksi berhasil !</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php

        }
        ?>

    <div class="editnav">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" style="margin-right: 30px;margin-left: 112px; background-color: rgb(36, 36, 242); border-style: none;" aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" fill="white" class="bi bi-list" viewBox="0 0 16 16"  >
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>

            <a class="navbar-brand" href="home.html"><img src="https://cryptologos.cc/logos/aave-aave-logo.png" alt="" style="height: 40px; "></a>
            <a class="navbar-brand" href="home.html" style="color:white ; font-family:Poppins;">Ai Store</a>

            <span style="color:white ;margin-left: 50px; font-family:Poppins;font-style: oblique;font-size: 12px;">Website Top Up Anti Buta Map, Tercepat Dan Terpercaya Di Indonesia.</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] == "login"){
                    ?>
                        <div class="navbar-nav ml-auto">    
                            <a class="btn " href="../logout.php" role="button" style="font-size:16px; border-color: white; font-family: Poppins; color:white;border-radius:10px;">Log Out</a>
                        </div>
                    <?php
                    }
                    else{
                    ?>
                        <div class="navbar-nav ml-auto">    
                            <a class="btn " href="../daftar/daftar.php" role="button" style="font-size:16px; border-color: white; font-family: Poppins; color:white;border-radius:10px;">Daftar</a>
                            <a class="btn" href="../daftar/loginPage.php" role="button" style=" font-size:16px;margin-left: 10px; background-color: rgb(255, 245, 235) ; border-style:none; color: black; font-family: Poppins;border-radius:10px;margin-right: 112px;">Masuk</a>
                        </div>
                    <?php
                    }
                ?>
            </div>
        </nav>


    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-color: rgb(6, 6, 87); color: white;">
        <div class="offcanvas-header">
            <img src="https://cryptologos.cc/logos/aave-aave-logo.png" alt="logo AiStore"
                width="60px">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="font-family: Poppins;font-size: 30px;">Ai Store</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="dropdown mt-3">
                
                

                           <a href="../home.php" style="text-decoration: none; color: white;font-family: Poppins;font-size: 20px; margin-bottom: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 5px; margin-right:10px;" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                              </svg>Beranda</a> <br><br>
                           <a href="../transaksi.php" style="text-decoration: none; color: white;font-family: Poppins;font-size: 20px; margin-bottom: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 4px; margin-right:10px;" width="20" height="20" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                              </svg>History Pemesanan</a> <br><br>
                           <a href="../customerService/contactus.php" style="text-decoration: none; color: white;font-family: Poppins;font-size: 20px; margin-bottom: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 4px; margin-right:10px;" width="20" height="20" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
                              </svg>Hubungi Kami</a>

                              <br>
                              <hr>

                              <a class="btn " href="daftar.html" role="button" style="margin-left: 30px; font-size:16px; border-color: white; font-family: Poppins; color:white;border-radius:10px;">Daftar</a>
                              <a class="btn" href="login.html" role="button" style=" font-size:16px;margin-left: 10px; background-color: rgb(36, 36, 242) ; border-style:none; color: black; font-family: Poppins; color:white;border-radius:10px;margin-right: 112px;">Masuk</a>
          

    
               
            </div>
        </div>
    </div>
      
    <div class="editgambar container">

            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgTRnMED4Y3DuY2kAJG-OrEZNjbPXTzW305uTP-f0toHVC3N88fEt7JYnl20seBwtLFJI-5es9AC0oEoPOMGMPSVAnh8IrRbfgQD74FzzGhMMyn4J8sLCcT9rDsia6JGGOi4uPUt7alIJfWOqynmM3eUe5WO9nNWiQOFfZPCV_vI6vA70EdEOoctaueeBii/s3840/nolan-wallpaper-mobile-legends%20(1).png" style="height: 300px;" class="d-block w-100" alt="...">
            
    </div>

    
<section class="container" style="display: flex; margin-top: 30px;">

<div class="cardleft" >


    <div class="cardleft1" style="width: 400px;">
        <img src="https://play-lh.googleusercontent.com/wRXSrwwbzBBlTpowK6onSs3rfBV-4nqVvLJJ7yAZa7jzdGNHpHH2hDhKCyKWj_3nqw=w240-h480-rw" alt="">
    
        <h3 style="font-family: Poppins;">Mobile Legends Bang Bang</h3>

        <hr>

        <p>Top Up Diamond Mobile Legends</p>
        <p>Proses Fast 3-5 menit Setelah Pembayaran</p> <br>
        <p>1. Masukkan ID (SERVER)</p>
        <p>2. Pilih Nominal Diamond</p>
        <p>3. Pilih Metode Pembayaran</p>
        <p>4. Tulis nomor whatsapp yang benar!</p>
        <p>5. Klik Beli & lakukan Pembayaran</p>
        <p>6. Diamond akan diproses dan masuk ke akun anda</p>
        <br>
        <br>

        <center>
            <h5 style="color: goldenrod;font-family: Poppins;">Top Up Buka 24 Jam</h5>

        </center>
    </div>

    <div class="cardleft2">
    
        <h3 style="font-family: Poppins;">Testimoni</h3>

        <hr >
<br>
        <p>0881****1665</p>
        <p>18-11-2023 12:21:01</p> <br>
        <p style="font-style: oblique;">“Proses topup nya cepat dan harga nya murah banget!”</p>
        <hr>
        <br>
        <p>0821****3112</p>
        <p>20-11-2023 18:59:54</p> <br>
        <p style="font-style: oblique;">“Murah banget woilah cik”</p>
        <hr>
        <br>
        <p>0872****0020</p>
        <p>23-11-2023 08:41:31</p> <br>
        <p style="font-style: oblique;">“Diskonnya gila bgt woiiii!!!!!!!”</p>
        <hr>
        <br>
        <p>0811****7723</p>
        <p>24-11-2023 22:01:01</p> <br>
        <p style="font-style: oblique;">“Tau gitu aku dari dulu order disini zzzz”</p>
        <hr>
        <br>
    </div>

</div>

<div class="cardright">
<form action="prosesOrder.php" method = "POST">
    <div class="cardright1" style="padding-left: 30px;">

        <h3><span style="color: goldenrod;">1. </span>Lengkapi Data</h3>
        <hr>

        <div style="display: flex;gap: 50px;">
            <div >
                <label style="margin-bottom: 20px;width:200px;" for="inputnama">User ID</label>
                <input type="text" class="form-control" id="inputnama" name="id" placeholder="Masukkan ID game anda" style="margin-bottom: 20px;width:300px;">

            </div>
            <div>
                <label style="margin-bottom: 20px;width:200px;" for="inputnama">Server ID</label>
                <input type="text" class="form-control" id="inputnama" name="server" placeholder="Masukkan Server ID anda" style="margin-bottom: 20px;width:300px;">

            </div>
        </div>
        <span style="font-style: oblique; color: rgb(203, 203, 203); font-size: 11px;">Untuk menemukan ID & Server akun Anda, klik avatar Anda di pojok kiri atas layar dan buka tab Info Umum. Contoh: 12345678 (9864), maka ID adalah 12345678 dan Server adalah 9864</span>
    </div>

    <div class="cardright2" style="padding-left: 30px;">

            <h3><span style="color: goldenrod;">2. </span> Pilih Nominal</h3>
            <hr>
        
            <h6>Special Items</h6>

            <div style="display: flex;gap: 40px; margin-bottom: 30px;margin-top: 20px;">
            
            <input value="wd1" type="radio" class="btn-check" name="options-outlined" id="btn-check-1-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; text-align: left; width: 230px;" for="btn-check-1-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">Weekly Diamond Pass</span>  <br>
                <span style="font-size: 12px;">Rp 26.500,-</span>
            </label>

            <input value="tp1" type="radio" class="btn-check" name="options-outlined" id="btn-check-2-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-2-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">Twilight Pass</span>  <br>
                <span style="font-size: 12px;">Rp 115.499,-</span>
            </label>

            <input value="sm1" type="radio" class="btn-check" name="options-outlined" id="btn-check-3-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-3-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">Starlight Member</span>  <br>
                <span style="font-size: 12px;">Rp 75.600,-</span>
            </label>
            

            
        </div>
        
        <h6>Top Up</h6>

        <div style="display: flex;gap: 40px; margin-bottom: 30px;margin-top: 20px;">
            
            <input value="d1" type="radio" class="btn-check" name="options-outlined" id="btn-check-4-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; text-align: left; width: 230px;" for="btn-check-4-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">5 (5+0) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 2.100,-</span>
            </label>

            <input value="d2" type="radio" class="btn-check" name="options-outlined" id="btn-check-5-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-5-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">18 (17+1) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 4.002,-</span>
            </label>

            <input value="d3" type="radio" class="btn-check" name="options-outlined" id="btn-check-6-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-6-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">44 (40+4) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 11.067,-</span>
            </label>
            

            
        </div>

        <div style="display: flex;gap: 40px; margin-bottom: 30px;margin-top: 20px;">
            
            <input value="d4" type="radio" class="btn-check" name="options-outlined" id="btn-check-7-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; text-align: left; width: 230px;" for="btn-check-7-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">74 (67+7) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 19.120,-</span>
            </label>

            <input value="d5" type="radio" class="btn-check" name="options-outlined" id="btn-check-8-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-8-outlined">
                <span style="color: rgb(254, 254, 255);font-size: 14px;">110 (100+10) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 30.101,-</span>
            </label>

            <input value="d6" type="radio" class="btn-check" name="options-outlined" id="btn-check-9-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-9-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">240 (217+23) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 62.710,-</span>
            </label>
            

            
        </div>

        <div style="display: flex;gap: 40px; margin-bottom: 30px;margin-top: 20px;">
            
            <input value="d7" type="radio" class="btn-check" name="options-outlined" id="btn-check-10-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; text-align: left; width: 230px;" for="btn-check-10-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">344 (312+32) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 97.432,-</span>
            </label>

            <input value="d8" type="radio" class="btn-check" name="options-outlined" id="btn-check-11-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-11-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">406 (366+40) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 109.410,-</span>
            </label>

            <input value="d9" type="radio" class="btn-check" name="options-outlined" id="btn-check-12-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-12-outlined">
                <span style="color: rgb(253, 253, 255);font-size: 14px;">514 (468+46) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 140.600,-</span>
            </label>
            

            
        </div>
        <div style="display: flex;gap: 40px; margin-bottom: 30px;margin-top: 20px;">
            
            <input value="d10" type="radio" class="btn-check" name="options-outlined" id="btn-check-13-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; text-align: left; width: 230px;" for="btn-check-13-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">600 (546+54) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 165.511,-</span>
            </label>

            <input value="d11" type="radio" class="btn-check" name="options-outlined" id="btn-check-14-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-14-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">751 (676+75) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 202.199,-</span>
            </label>

            <input value="d12" type="radio" class="btn-check" name="options-outlined" id="btn-check-15-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-15-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">874 (779+95) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 233.799,-</span>
            </label>
            

            
        </div>
        <div style="display: flex;gap: 40px; margin-bottom: 30px;margin-top: 20px;">
            
            <input value="d13" type="radio" class="btn-check" name="options-outlined" id="btn-check-16-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; text-align: left; width: 230px;" for="btn-check-16-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">1048 (936+112) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 280.200,-</span>
            </label>

            <input value="d14" type="radio" class="btn-check" name="options-outlined" id="btn-check-17-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-17-outlined">
                <span style="color: rgb(255, 255, 255);font-size: 14px;">2195 (1860+335) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 566.322,-</span>
            </label>

            <input value="d15" type="radio" class="btn-check" name="options-outlined" id="btn-check-18-outlined" autocomplete="off">
            <label class="btn " style="background-color: gray; width: 230px; text-align: left;" for="btn-check-18-outlined">
                <span style="color: rgb(253, 253, 253); font-size: 14px;">4394 (3724+670) Diamonds</span>  <br>
                <span style="font-size: 12px;">Rp 1.034.700,-</span>
            </label>
            

            
        </div>

        
    </div>

    <div class="cardright4" style="padding-left: 30px;">

            <h3><span style="color: goldenrod;">3. </span>Nomor whatsapp</h3>
            <hr>
        
                    <input type="text" class="form-control" id="inputnama" name="nomor" placeholder="08XXXXXXXXX" style="margin-bottom: 20px;width:590px;">
        
            
            <span style="font-style: oblique; color: rgb(203, 203, 203); font-size: 11px;">Perhatian : Ketika sudah menekan tombol konfirmasi pembayaran, Untuk pembayaran selanjutnya akan kami kirimkan langsung ke nomor whatsapp anda!</span><br>
            <button id="pay-button" style="font-size:16px;padding: 19px; background-color: rgb(36, 36, 242); border-style:none; color: black; font-family: Poppins; color:white;border-radius:10px;margin-right: 112px;" class="btn " type="submit " name="submitform" >Konfirmasi Order</button>
            <br>


    
    </div>
</form>




</section>







<section class="footer" style="background-color: rgb(6, 6, 87);margin-bottom: 0vw; margin-left: 0px; margin-right: 0px; margin-top:100px; padding: 30px; display: flex; ; display: flex; gap: 100px; padding-left: 9vw; width: 100%;">

    <div style="margin-top: 1vw; margin-right: 15vw;">
        <img src="https://cryptologos.cc/logos/aave-aave-logo.png" alt="logo AiStore"
                width="120px">
        
    </div>
    <div style="width: 300px;font-size: 0.9rem;margin-right: 10vw;">
        <b style="font-family: Poppins; color: #ffffff;">Ai Store</b>
        <br><br>

        <p style="color: white; width: 400px;">
            AI STORE (PT AI STORE INDONESIA) adalah tempat top up games yang aman, murah dan terpercaya. Proses cepat 1-3 Detik. Open 24 jam. Payment terlengkap. Jika ada kendala silahkan klik logo CS pada kanan bawah di website ini        </p>
        

    </div>

    
    
    <div>
        
        <b style="font-family: Poppins; color: #ffffff; font-size: 1.2rem;">Social Media</b><br> <br>
        <div style="gap :5px; ">

            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="3em" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg></a><br><br>

            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="3em" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg></a><br><br>
          <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="3em" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>
    </div>
        
    </div>
    
</section>

<div class="editmidmedia" style="background-color: rgb(40, 40, 40); padding: 9px; color: white; font-size: 9px; font-family: Poppins;">


<center>&copy;Projek IMK May & Sakti & Bagas 2023</center>

</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript">
    // Fungsi untuk mendapatkan parameter query dari URL
    function getQueryParameter(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    // Ambil token dari URL
    const token = getQueryParameter('token');

    // Panggil Midtrans Snap menggunakan token jika ada
    if (token) {
        window.snap.pay(token, {
        onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
            window.location.href = `https://559e-182-253-126-28.ngrok-free.app/projekimktopup2/updateDatabase/update.php?token=${token}&type=diamond`;
        },
        onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
        },
        onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
        },

        });
    } else {
        console.log("Token tidak tersedia di URL.");
    }

</script>
</body>

</html>