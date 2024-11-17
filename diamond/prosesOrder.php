<?php

    session_start();
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submitform'])){
            if(isset($_POST['id']) && isset( $_POST['server']) && isset($_POST['nomor']) && isset($_POST['options-outlined']) ){
                
                include "../koneksi/cn.php";

                // Inisialisasi variabel inputan
                $id = $_POST['id'];
                $server = $_POST['server'];

                $idProduk = $_POST['options-outlined'];
                $nomor = $_POST['nomor'];


                // ubah jadi string
                $id = mysqli_real_escape_string($cn, $id);
                $server = mysqli_real_escape_string($cn, $server);
                $idProduk = mysqli_real_escape_string($cn, $idProduk);
                $nomor = mysqli_real_escape_string($cn, $nomor);


                // Mengambil data produk dari db
                $data = mysqli_query($cn,"select * from items where itemID = '$idProduk'");
                $pd = mysqli_fetch_array($data);
                
                $namaProduk = $pd['name'];
                $price = $pd['price'];


                
                // Membelah nama paket dengan harga

                //====================== Midtrans =============================
                require_once dirname(__FILE__) . '/midtrans-php-master/Midtrans.php';

                // Set your Merchant Server Key
                \Midtrans\Config::$serverKey = 'SB-Mid-server-Xy5xm9bYMDYzsGcpo9LGp-S6';
                // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                \Midtrans\Config::$isProduction = false;
                // Set sanitization on (default)
                \Midtrans\Config::$isSanitized = false;
                // Set 3DS transaction for credit card to true
                \Midtrans\Config::$is3ds = true;
                
                // Param untuk dikirim ke midtrans dashboard

                $username = "Mode Tamu";
                $userID = 0;
                
                if(isset($_SESSION['username'])){
                    $username = $_SESSION['username'];
                    $userID = $_SESSION['userID'];
                }
                
                $params = array(
                    'transaction_details' => array(
                        'order_id' => rand(),
                        'gross_amount' => $price,
                    ),
                    'item_details' => array(
                        array(
                            'id' => $idProduk,
                            'price' => $price,
                            'quantity' => 1,
                            'name' => $namaProduk
                        ),
                    ),
                    'customer_details' => array(
                        'first_name' => $username,
                        'email' => "tamu@gmail.com",
                        'phone' => $nomor,
                    ),
                );

                $snapToken = \Midtrans\Snap::getSnapToken($params);
                //====================== Midtrans =============================

                
                // Kirim ke database
                $query = mysqli_query($cn,"insert into payment values ('$snapToken',DEFAULT,'$userID','pending','$idProduk',1,'None','none', 'none', 'none', '$id', '$server', '$nomor')");
                if($query){
                    header("Location: order.php?token=$snapToken");
                }else{
                    $pesan = mysqli_error($cn);
                    header("Location: order.php?pesan$pesan");
                }
                
                exit();
                

            }
        }
    }

    header("location:order.php?pesan=kosong");


?>