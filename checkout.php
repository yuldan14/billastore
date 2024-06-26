<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Billastore | Checkout</title>
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

    <!-- Checkout -->
    <div class="checkout-container">
        <!-- Informasi Pembayaran -->
        <div class="checkout-page">
            <div class="checkout-head">
                <h2>INFORMASI PEMBAYARAN</h2>
            </div>
            <!-- Alamat -->
            <div class="alamat">
                <div class="info-alamat">
                    <a id="alamat" href="cart.php">
                        Alamat Pengiriman
                        <br>
                        Yuldan Nur Addinsyah | (+62)857-0179-6316 <br>Jalan Sufyan Tsauri, Majenang, Cilacap
                    </a>
                </div>
                <div class="arrow-kanan">
                    <a href="profil.php">
                        <i data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Info-pembelian -->
            <ul>
                <li>
                    <div class="info-pembelian">
                        <div class="foto-barang">
                        <img src="img/kemeja-pria.png" alt="" />
                        </div>
                        <div class="keterangan-barang">
                            <div class="nama-barang">Kemeja Coklat Pria</div>
                            <div class="variasi">Variasi : L</div>
                            <div class="harga-dan-jumlah">
                                <div class="harga-checkout">
                                    Rp. 108.000
                                </div>
                                <div class="jumlah">
                                    x 2
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="voucher-pesan">
                <div class="voucher">
                    <p id="text">Masukkan Kode Voucher: <input type="text" name="voucher" id="voucher"></p>
                </div>
                <div class="pesan">
                    <p id="text">Pesan: <input type="text" name="pesan" id="pesan"></p>

                </div>
            </div>
            <div class="rincian-pembayaran">
                <i data-feather="dollar-sign"></i>Rincian Pembayaran
                <div class="rincian">
                    <!-- kiri -->
                    <div class="kiri">
                        <p id="text">Subtotal untuk Produk</p>
                        <p id="text">Subtotal Pengiriman</p>
                        <p id="text">Total Diskon Pengiriman</p>
                        <p id="text">Biaya Layanan</p>
                        <p id="text">Biaya Pengiriman</p>
                        <p id="text">Total Pembayaran</p>
                    </div>
                    <div class="kanan">
                        <p id="text">Rp. <input type="text" value="30000" readonly> </p>
                        <p id="text">Rp. <input type="text" value="30000" readonly> </p>
                        <p id="text">Rp. <input type="text" value="30000" readonly> </p>
                        <p id="text">Rp. <input type="text" value="30000" readonly> </p>
                        <p id="text">Rp. <input type="text" value="30000" readonly> </p>
                        <p id="text">Rp. <input type="text" value="30000" readonly> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- kanan -->
        <div class="cart-right">
            <div class="payment">
                <div class="payment-head">
                    <h3>METODE PEMBAYARAN</h3>
                </div>
                <div class="payment-method">
                    <div class="bri">
                        <input type="radio" name="payment" id="radio-bri" value="BRI" onclick="toggleInput('radio-bri')"> Bank BRI
                        <!-- <p><input type="text" name="norekbri" id="norekbri" placeholder="Masukkan No Rekening"></p> -->
                    </div>
                    <br>
                    <div class="dana">
                        <input type="radio" name="payment" id="radio-dana" value="dana" onclick="toggleInput('radio-dana')"> DANA
                        <!-- <p><input type="text" name="dana" id="dana" placeholder="Masukkan No DANA"></p> -->
                    </div>

                    <!-- <p><input type="radio" name="payment" id="payment" value="shoppe"> Shoppe</p> -->
                </div>
                <div class="jasa-pengiriman">
                    <div class="jasa-head">
                        <h3>JASA PENGIRIMAN</h3>
                    </div>
                    <div class="jasa" >
                        <input type="radio" name="jasa" id="jnt" value="jnt"> JNT Express <br>
                        <br>
                        <input type="radio" name="jasa" id="jne" value="jne"> JNE Express
                    </div>
                </div>
                <div class="checkout">
                    <button class="btn btn-primary" type="submit">Checkout</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        function toggleInput(radioButtonId) {
            var radioButton = document.getElementById(radioButtonId);
            var inputFieldId = radioButtonId === 'radio-bri' ? 'norekbri' : 'dana'; // Menentukan id input field yang akan ditampilkan
            var otherInputFieldId = radioButtonId === 'radio-bri' ? 'dana' : 'norekbri'; // Menentukan id input field yang akan disembunyikan

            var inputField = document.getElementById(inputFieldId);
            var otherInputField = document.getElementById(otherInputFieldId);
            
            if (radioButton.checked) {
                inputField.style.display = 'block'; // Tampilkan input field yang terkait
                otherInputField.style.display = 'none'; // Sembunyikan input field yang tidak terkait
                // inputField.classList.add('show'); // Tambahkan kelas show untuk memunculkan input field
                // otherInputField.classList.remove('show'); // Hapus kelas show untuk menyembunyikan input field yang tidak terkait
            }
        }

        // Panggil fungsi toggleInput() untuk mengatur tampilan input field saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            toggleInput('radio-bri'); // Atur tampilan input field sesuai radio button yang dipilih pada saat halaman dimuat
        });
    </script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- feather icon -->
    <script>
        feather.replace();
    </script>
</body>

</html>
