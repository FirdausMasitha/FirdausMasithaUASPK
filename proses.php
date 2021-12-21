<?php
 
$nama = $_POST['nama_barang'];
$harga = $_POST['harga_barang'];
$jumlah = $_POST['jumlah'];
 
$hitung = $harga * $jumlah;
 
if ($hitung >= 200000) {
  $diskon = 0.05 * $hitung;
}else{
  $diskon = 0;
}
 
$bayar = $hitung - $diskon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rcozy</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="header-left">
        <div class="header-logo"><a href="index.html">Rcozy</a></div>
        <div class="header-list">
          <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="produk.html">Produk</a></li>
            <li>
              <form>
                <input class="search" type="text" placeholder="Cari..." required>
                <input class="button" type="button" value="Cari">		
              </form>
            </li>
            <li><span class="fa fa-shopping-cart"></span>Keranjang</li>
          </ul>
        </div>
      </div>
      <div class="header-right">
        <a href="login.html" class="login"><span class="fa fa-user"></span>log in</a>
      </div>
    </div>
  </header>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Total Pemesanan</h2>
        <div class="underline-title"></div>
      </div>
        Nama Barang : <?php echo $nama ?><br>
        Harga Barang : <?php echo $harga ?><br>
        Jumlah Beli : <?php echo $jumlah ?><br>
        Total : <?php echo $hitung ?><br>
        Diskon : <?php echo $diskon ?><br>
        Bayar : <?php echo $bayar ?><br>
        <br>
        Semua produk dapat dichekout di e-commerce kesayangan anda...<br>
        <h2>Terimakasih!</h2>
    <a href="index.php"><< Kembali</a>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="footer-logo"><a href="About.html">Rcozy</a></div>
        <div class="footer-list">
          <h3>Hubungi Kami:</h3>
          <ul>
            <li><a href="https://www.facebook.com"><span class="fa fa-facebook"></span>facebook</a></li>
            <li><a href="https://www.twitter.com"><span class="fa fa-twitter"></span>twitter</a></li>
            <li><a href="https://www.instagram.com"><span class="fa fa-instagram"></span>instagram</a></li>
          </ul>
        </div>
      </ul>
    </div>
   </footer>
  </body>
  </html>