<!doctype html>
<html lang="en">

<head>


    <style>
        body{
                background-image: url("https://images.unsplash.com/photo-1614850523011-8f49ffc73908?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
                background-repeat: no-repeat;
                background-size: cover;


        }

    </style>

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
</head>

<body>

    <div class="container" style="display: flex; gap: 20px;">

        <div class="login container">
            <div style="display: flex;margin-bottom: 20px;">
    
                <img src="https://cryptologos.cc/logos/aave-aave-logo.png" alt="logo AiStore"
                width="60px">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="margin-left: 20px; margin-top: 8px; font-family: Poppins;font-size: 30px;">Ai Store</h5>
            </div>
    <br>
            <h3 style="font-family: sans-serif;">Masuk</h3><br>
            <h6 style="font-family: sans-serif;">Masuk menggunakan akun terdaftar kamu.</h6>
    <br>
    <form action="login.php" method="post">
            <div class="mb-3">
                <input style="border-radius: 50px;width: 500px;height: 57px;margin-bottom: 30px; background-color: rgb(121, 121, 154);;border-style: none;" placeholder="username" type="text" class="form-control" name="user">
                <input style="border-radius: 50px;width: 500px;height: 57px;background-color: rgb(121, 121, 154);border-style: none;" placeholder="Password" type="password" class="form-control" id="inputPassword" name="pw">
              </div>
    
             
    
                <input style="margin-bottom: 30px;margin-left: 10px;margin-right: 6px;font-family: sans-serif;" type="checkbox" onclick="myFunction()">Tampilkan Password
    
                <script>
                    function myFunction() {
                        var x = document.getElementById("inputPassword");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <br>
                <button style="border-radius: 50px;width: 500px;height: 57px;margin-bottom: 30px; background-color: rgb(36, 36, 242) ;color: white; border-style: none;" class="btn " type="submit " name="submitform" >LOGIN</button>
            </form>
           
           <span style="margin-left: 170px; margin-bottom: 30px;font-family: sans-serif;">Belum Punya Akun?</span> <br>
    
          <a href="daftar.php"> <button style="margin-top: 30px; border-radius: 50px;width: 500px;height: 57px;margin-bottom: 30px; background-color: rgb(255, 255, 255) ;color: rgb(0, 0, 0); border-style: none;" class="btn ">Daftar</button></a>
    
          <br>
    
          <span style="font-family: sans-serif;">
              &copy;2023AiStore. Semua Hak Cipta
    
          </span> 
        </div>


        <div style="margin-top: 200px;padding-left: 0px;">
            <img src="https://ouch-cdn2.icons8.com/5glaSIA9HoWaFcj0vGBTGXfinZbqxcGu7Ex7B3nJsj8/rs:fit:368:427/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzgy/LzczNTdiOGM4LTUz/OGYtNDA5NC05NzU5/LTM4YjI5ZWQzODhk/ZS5wbmc.png" alt="">

        </div>
    
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
</body>

</html>