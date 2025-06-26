<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    @vite(['resources/css/login1.css', 'resources/css/login2.css', 'resources/css/login3.css'])
  </head>
  <body>
    <div class="login">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="creat-account">
            
            <!-- Judul -->
            <div class="text-wrapper" onclick="handleMasuk()">Masuk</div>

            <!-- Input email -->
            <div class="overlap-2">
              <input type="email" class="input-email" placeholder="Email" />
            </div>

            <!-- Input password -->
            <div class="overlap-group">
              <input type="password" class="input-sandi" placeholder="Kata Sandi" />
              <div class="view-hide">
                <div class="overlap-group-2">
                 
                </div>
              </div>
            </div>

            <!-- Tombol login -->
            <div class="frame">
              <div class="div" onclick="handleMasuk()">Masuk</div>
            </div>

            <!-- Daftar -->
            <div class="text-wrapper-2">Belum punya akun ?</div>
            <div class="text-wrapper-3"><a href="/register">Daftar</a></div>

          </div>

          <!-- Gambar -->
          <img class="rectangle" src="https://c.animaapp.com/mcc2brtoKLgbXq/img/rectangle-4371.png" />
          <img class="grammar-correction" src="https://c.animaapp.com/mcc2brtoKLgbXq/img/grammar-correction-amico--1--2.png" />
        </div>
      </div>
    </div>

    <script>
      function handleMasuk() {
        const email = document.querySelector('.input-email').value;
        const sandi = document.querySelector('.input-sandi').value;
        alert(`Email: ${email}\nKata Sandi: ${sandi}`);
      }
    </script>
  </body>
</html>
