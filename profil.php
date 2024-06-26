<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Billastore | Profil</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Jumlah Cart -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="shortcut icon" href="img/Billastore.png" type="image/x-icon" />
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
    <!-- nav -->
    <nav>
    <div class="logo">
      BILLA <span>STORE</span>
    </div>
    <div class="navbar">
      <div class="menu">
        <ul>
          <li><a href="index.php" >BERANDA</a></li>
          <li><a href="product.php">PRODUK</a></li>
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

        <!-- Informasi Profil -->
    <section id="profil">
        <div class="profil-head">
            <h4><b>INFORMASI AKUN</b></h4>
        </div>
        <!-- Form Profil -->
        <div class="form-container">
        <!-- form action arahin buat save sril, sama tombol ubah nya -->
        <form action="">
        <table>
            <tr>
                <td style="width:200px"><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama" id="nama" value="Yuldan Nur Addinsyah" ></td>
                <td><button id="ubah-nama" class="ubah">Ubah</button></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="text" name="email" id="email" value="yuldann6@gmail.com" ></td>
                <td><button id="ubah-email" class="ubah">Ubah</button></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><input type="text" name="alamat" id="alamat" value="Jalan Siliwangi" ></td>
                <td><button id="ubah-alamat" class="ubah">Ubah</button></td>
            </tr>
        </table>
            <br><br><br>
            <div class="simpan">
            <button type="submit" id="simpan">Simpan</button>
            </div>
        </form>
        </div>
    </section>



    <!-- Script tombol ubah -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- feather icon -->
    <script>
        feather.replace();
    </script>
</body>

</html>