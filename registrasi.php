<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bielshop | Registrasi</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <!-- Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/Bielshop.png" type="image/x-icon" />
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    @font-face {
      font-family: NunitoSans;
      src: url(NunitoSans.ttf);
    }
  </style>
</head>

<body>
  <div class="container-login">
    <form action="index.php">
      <h1>BUAT <span>AKUN</span></h1>
      <div class="form">
        <div class="email" id="form">
          <p><label for="email">Email</label></p>
          <p><input type="text" placeholder="Email" name="email" required></p>
        </div>
        <div class="notelepon" id="form">
          <p><label for="phone">No Telepon</label></p>
          <p> <input id="phone" type="tel" name="phone" required />
          </p>
        </div>
        <div class="user" id="form">
          <p><label for="username">Username</label></p>
          <p><input type="text" placeholder="Username" name="username" required /></p>
        </div>
        <div class="password" id="form">
          <p><label for="password">Password</label></p>
          <p><input type="password" placeholder="Password" name="password" id="password" required />
            <i class="bi bi-eye-slash" id="togglePassword"></i>
          </p>
        </div>
        <div class="tanggal-lahir" id="form">
          <label for="">Tanggal Lahir</label>
          <table>
            <tr>
              <td>
                <select name="tanggallahir">
                  <?php
                  for ($i = 1; $i <= 31; $i++) {
                  ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </td>
              <td>
                <select name="bulan">
                  <?php
                  for ($i = 1; $i <= 12; $i++) {
                  ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </td>
              <td>
                <select name="tahun">
                  <?php
                  for ($i = 1990; $i <= 2018; $i++) {
                  ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </td>
            </tr>

          </table>
        </div>

      </div>
      <div class="button">
        <button type="submit">BUAT AKUN</button>
      </div>
      <div class="registrasi">
        <p id="text">Sudah memiliki akun? <a href="login.php"> Masuk ke akun</a></p>
      </div>
    </form>
  </div>
  <script>
    feather.replace();
  </script>
  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>
  <script src="script.js"></script>
</body>

</html>