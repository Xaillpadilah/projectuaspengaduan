<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    {{-- Vite --}}
    @vite('resources/css/app.css')

    {{-- Font untuk Poppins dan Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Poppins:wght@500;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="login">
  <div class="overlap-wrapper">
    <div class="overlap">
      <div class="creat-account">
        {{-- Judul --}}
        <div class="text-wrapper">Masuk</div>

        {{-- Form Login --}}
        <form action="{{ route('login') }}" method="POST">
            @csrf

            {{-- Email --}}
            <div class="overlap-2">
              <div class="div-2"></div>
              <div class="div-2"></div>
              <div class="frame-2">
                <label for="email" class="text-wrapper-4">Email</label>
                <input type="email" name="email" id="email" required class="input-field bg-transparent border-none outline-none w-full ml-2">
              </div>
            </div>

            {{-- Password --}}
            <div class="overlap-group">
              <div class="div-2"></div>
              <div class="div-wrapper">
                <label for="password" class="text-wrapper-4">Kata Sandi</label>
                <input type="password" name="password" id="password" required class="input-field bg-transparent border-none outline-none w-full ml-2">
              </div>
            </div>

            {{-- Tombol Masuk --}}
            <div class="frame">
              <button type="submit" class="div">Masuk</button>
            </div>
        </form>

        {{-- Link ke Register --}}
        <div class="text-wrapper-2">Belum punya akun ?</div>
        <a href="{{ route('register') }}" class="text-wrapper-3">Daftar</a>
      </div>

      {{-- Gambar Kiri --}}
      <img class="rectangle" src="https://c.animaapp.com/aDsVuure/img/rectangle-4371@4x.png" alt="Background kiri" />
      <img class="grammar-correction" src="https://c.animaapp.com/aDsVuure/img/grammar-correction-amico--1--2.png" alt="Ilustrasi" />
    </div>
  </div>
</div>
</body>
</html>
