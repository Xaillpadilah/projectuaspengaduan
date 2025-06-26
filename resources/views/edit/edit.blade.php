<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profil</title>

  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  {{-- Vite CSS --}}
  @vite(['resources/css/home1.css'])

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f2f2f2;
      padding: 40px;
    }

    .edit-profile-container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    h2 {
      margin-bottom: 20px;
      font-weight: 600;
      font-size: 24px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    input[type="text"],
    input[type="email"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .form-buttons {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 20px;
    }

    .btn {
      padding: 10px 20px;
      font-size: 14px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
    }

    .btn-primary {
      background-color: #007bff;
      color: white;
    }

    .btn-secondary {
      background-color: #ccc;
      color: #333;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .btn-secondary:hover {
      background-color: #999;
    }
  </style>
</head>
<body>
  <div class="edit-profile-container">
    <h2>Edit Profil</h2>

    @auth
      <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" id="nama" name="nama" value="{{ old('nama', Auth::user()->name) }}" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
        </div>

        <div class="form-group">
          <label for="no_hp">No. HP</label>
          <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', Auth::user()->no_hp ?? '') }}">
        </div>

        <div class="form-group">
          <label for="foto">Foto Profil (opsional)</label>
          <input type="file" id="foto" name="foto">
        </div>

        <div class="form-buttons">
          <a href="{{ route('profil') }}" class="btn btn-secondary">Batal</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    @else
      <p>Silakan <a href="{{ route('login') }}">login</a> untuk mengedit profil.</p>
    @endauth
  </div>
</body>
</html>
