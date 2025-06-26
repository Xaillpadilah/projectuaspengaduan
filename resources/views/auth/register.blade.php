<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>

    @vite(['resources/css/register1.css', 'resources/css/register2.css'])
  </head>
  <body>
    <div class="register">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="creat-account">
            
            <div class="text-wrapper">Daftar</div>

            <form action="{{ route('register') }}" method="POST">
              @csrf
              
              <!-- Nama Depan -->
              <div class="overlap-2">
                <input type="text" name="nama_depan" class="input-nama-depan" placeholder="Nama Depan" value="{{ old('nama_depan') }}" required />
              </div>

              <!-- Nama Belakang -->
              <div class="overlap-3">
                <input type="text" name="nama_belakang" class="input-nama-belakang" placeholder="Nama Belakang" value="{{ old('nama_belakang') }}" required />
              </div>

              <!-- Email -->
              <div class="overlap-group">
                <input type="email" name="email" class="input-email" placeholder="Email" value="{{ old('email') }}" required />
              </div>

              <!-- Kata Sandi -->
              <div class="overlap-4">
                <input type="password" name="password" class="input-sandi" placeholder="Kata Sandi" required />
              </div>

              <!-- Konfirmasi Sandi -->
              <div class="overlap-4">
                <input type="password" name="password_confirmation" class="input-sandi" placeholder="Konfirmasi Sandi" required />
              </div>

              <!-- Tombol daftar -->
              <div class="frame">
                <button type="submit" class="btn-daftar">Daftar</button>
              </div>
            </form>

            <!-- Link login -->
            <div class="text-wrapper-2">Sudah punya akun?</div>
            <a href="{{ route('login') }}" class="text-wrapper-4">Masuk</a>

            <!-- Login dengan Google -->
            <div class="frame-2">
              <div class="masuk-dengan-google-wrapper">
                <div class="masuk-dengan-google">Masuk dengan Google</div>
              </div>
              <img class="icon-google" src="https://c.animaapp.com/OszWd3hq/img/---icon--google-@2x.png" />
            </div>
          </div>

          <div class="rectangle"></div>
          <img class="grammar-correction" src="https://c.animaapp.com/OszWd3hq/img/grammar-correction-amico--1--1@2x.png" />
        </div>
      </div>
    </div>
  </body>
</html>
