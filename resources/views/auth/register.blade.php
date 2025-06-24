<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>

    @vite(['resources/css/register1.css', 'resources/css/register2.css'])
  </head>
  <body>
    <div class="register" data-model-id="629:590">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="creat-account">
            <div class="text-wrapper">Daftar</div>
            <form action="{{ route('register') }}" method="POST">
              @csrf
              <div class="frame"><button type="submit" class="div">Daftar</button></div>

              <div class="overlap-2">
                <div class="frame-4"><div class="text-wrapper-5">Nama Depan</div></div>
                <input type="text" name="nama_depan" class="text-wrapper-7" value="{{ old('nama_depan') }}" required />
              </div>

              <div class="overlap-3">
                <div class="frame-5"><div class="text-wrapper-5">Nama Belakang</div></div>
                <input type="text" name="nama_belakang" class="text-wrapper-8" value="{{ old('nama_belakang') }}" required />
              </div>

              <div class="overlap-group">
                <div class="frame-3"></div>
                <div class="div-wrapper"><div class="text-wrapper-5">Email</div></div>
                <input type="email" name="email" class="text-wrapper-6" value="{{ old('email') }}" required />
              </div>

              <div class="overlap-4">
                <div class="frame-3"></div>
                <div class="div-wrapper"><div class="text-wrapper-5">Kata Sandi</div></div>
                <input type="password" name="password" class="text-wrapper-9" required />
              </div>

              <div class="overlap-4">
                <div class="div-wrapper"><div class="text-wrapper-5">Konfirmasi Sandi</div></div>
                <input type="password" name="password_confirmation" class="text-wrapper-9" required />
              </div>
            </form>

            <div class="frame-2">
              <div class="masuk-dengan-google-wrapper">
                <div class="masuk-dengan-google"><br><br>Masuk dengan Google</div>
              </div>
              <img class="icon-google" src="https://c.animaapp.com/OszWd3hq/img/---icon--google-@2x.png" />
            </div>

            <div class="text-wrapper-2">Sudah punya akun ?</div>
            <div class="text-wrapper-3">atau</div>
            <a href="{{ route('login') }}" class="text-wrapper-4">Masuk</a>

            <img class="line" src="https://c.animaapp.com/OszWd3hq/img/line-3.svg" />

            <div class="overlap-5">
              <img class="image" src="https://c.animaapp.com/OszWd3hq/img/image-7.png" />
              <div class="text-wrapper-10">Download Aplikasi</div>
            </div>
          </div>
          <div class="rectangle"></div>
          <img class="grammar-correction" src="https://c.animaapp.com/OszWd3hq/img/grammar-correction-amico--1--1@2x.png" />
        </div>
      </div>
    </div>
  </body>
</html>
