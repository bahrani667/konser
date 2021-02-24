<?php

session_start();

$tiketID = $_GET['id'];

if(!$_SESSION['cart']){
  $_SESSION['cart'][] = ["id" => $tiketID,"qty" => 1];
  $_SESSION['message'] = "Cart Berhasil Ditambahkan";
}else{
  for ($i=0 ; $i < count($_SESSION['cart']) ; $i++){
    if($tiketID == $_SESSION['cart'][$i]['id']){
      //logika untuk pembatasan jumlah pemesanan tiket
      $_SESSION['cart'][$i]['qty'] += 1;
    }
  }
  $_SESSION['message'] = "Cart Berhasil Ditambahkan";
}

header('location: page_event_cart_list.php');

 ?>
