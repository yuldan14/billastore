<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Billastore | Beranda</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/Billastore.png" type="image/x-icon" />
  <!-- feather icon -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    @font-face {
      font-family: NunitoSans;
      src: url(NunitoSans.ttf);
    }
  </style>
</head>

<body>
<nav>
    <div class="logo">
      BILLA <span>STORE</span>
    </div>
    <div class="navbar">
      <div class="menu">
        <ul>
          <li><a href="index.php" >BERANDA</a></li>
          <li><a href="product.php" style="color:white;">PRODUK</a></li>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn btn-outline-success" id="search" type="submit""><i data-feather="search"></i></button>
          </form>
        </ul>
      </div>
      <div class="extra-menu">
        <div class="cart">
          <a href="cart.php"><img src="img/cart.png" alt="" /></a>
        </div>
        <!-- Belum Login -->
        <!-- <div class="login">
          <a href="login.php
          ">LOGIN</a>
        </div> -->
        <!-- Sudah Login -->
        <div class="profil">
          <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <button class="btn " data-bs-toggle="dropdown" aria-expanded="false">
                    <i data-feather="user"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-dark" id="dropdown">
                    <li><a class="dropdown-item" href="profil.php">Profil Saya</a></li>
                    <li><a class="dropdown-item" href="cart.php">Pesanan Saya</a></li>
                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </nav>
  <section id="produk-page">
    <div id="kategori-left">
      <div class="kategori-head-product">
        <h5 style="color:#E45826">Kategori</h5>
      </div>
      <div class="list" id="kategori-list">
        <ul>
          <li><a href="">Pakaian Pria</a></li>
          <li><a href="">Pakaian Wanita</a></li>
          <li><a href="">Mukena</a></li>
          <li><a href="">Aksesoris</a></li>
        </ul>
      </div>
      <div class="sortir-head">
          <h5 style="color:#E45826">Sortir</h5>
      </div>
      <div class="list" id="sortir-list">
        <ul>
          <li><a href="">Paling Sesuai</a></li>
          <li><a href="">Terlaris</a></li>
          <li><a href="">Ulasan</a></li>
          <li><a href="">Harga</a></li>
        </ul>
      </div>
    </div>
    <div class="kategori-right">
      <div class="right-head">
        <h2>DAFTAR PRODUK</h2>
      </div>
      <!-- Card Produk -->
      <div class="card-container">
        <div class="card-produk">
          <div class="card-image">
            <img src="img/kemeja-pria.png" alt="">
          </div>
          <div class="produk-detail">
            <div class="nama-produk">
              <h5>Kemeja Coklat Pria</h5>
            </div>
            <div class="harga-produk">
              <b>Rp. 108.000</b>
            </div>
            <div class="rating">
              5.0 | 500 terjual
            </div>
          </div>
          <div class="lihat-detail">
            <a href="checkout.php">Lihat Detail</a>
          </div>
        </div>
        <div class="card-produk">
          <div class="card-image">
            <img src="img/kemeja-pria.png" alt="">
          </div>
          <div class="produk-detail">
            <div class="nama-produk">
              <h5>Kemeja Coklat Pria</h5>
            </div>
            <div class="harga-produk">
              <b>Rp. 108.000</b>
            </div>
            <div class="rating">
              5.0 | 500 terjual
            </div>
          </div>
          <div class="lihat-detail">
            <a href="checkout.php">Lihat Detail</a>
          </div>
        </div>
        <div class="card-produk">
          <div class="card-image">
            <img src="img/kemeja-pria.png" alt="">
          </div>
          <div class="produk-detail">
            <div class="nama-produk">
              <h5>Kemeja Coklat Pria</h5>
            </div>
            <div class="harga-produk">
              <b>Rp. 108.000</b>
            </div>
            <div class="rating">
              5.0 | 500 terjual
            </div>
          </div>
          <div class="lihat-detail">
            <a href="checkout.php">Lihat Detail</a>
          </div>
        </div>
        <div class="card-produk">
          <div class="card-image">
            <img src="img/kemeja-pria.png" alt="">
          </div>
          <div class="produk-detail">
            <div class="nama-produk">
              <h5>Kemeja Coklat Pria</h5>
            </div>
            <div class="harga-produk">
              <b>Rp. 108.000</b>
            </div>
            <div class="rating">
              5.0 | 500 terjual
            </div>
          </div>
          <div class="lihat-detail">
            <a href="checkout.php">Lihat Detail</a>
          </div>
        </div>
        <div class="card-produk">
          <div class="card-image">
            <img src="img/kemeja-pria.png" alt="">
          </div>
          <div class="produk-detail">
            <div class="nama-produk">
              <h5>Kemeja Coklat Pria</h5>
            </div>
            <div class="harga-produk">
              <b>Rp. 108.000</b>
            </div>
            <div class="rating">
              5.0 | 500 terjual
            </div>
          </div>
          <div class="lihat-detail">
            <a href="checkout.php">Lihat Detail</a>
          </div>
        </div>
        <div class="card-produk">
          <div class="card-image">
            <img src="img/kemeja-pria.png" alt="">
          </div>
          <div class="produk-detail">
            <div class="nama-produk">
              <h5>Kemeja Coklat Pria</h5>
            </div>
            <div class="harga-produk">
              <b>Rp. 108.000</b>
            </div>
            <div class="rating">
              5.0 | 500 terjual
            </div>
          </div>
          <div class="lihat-detail">
            <a href="checkout.php">Lihat Detail</a>
          </div>
        </div>
        <div class="card-produk">
          <div class="card-image">
            <img src="img/kemeja-pria.png" alt="">
          </div>
          <div class="produk-detail">
            <div class="nama-produk">
              <h5>Kemeja Coklat Pria</h5>
            </div>
            <div class="harga-produk">
              <b>Rp. 108.000</b>
            </div>
            <div class="rating">
              5.0 | 500 terjual
            </div>
          </div>
          <div class="lihat-detail">
            <a href="checkout.php">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </section>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- feather icon -->
  <script>
    feather.replace();
  </script>
</body>

</html>