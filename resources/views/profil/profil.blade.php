<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Saya</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    {{-- Integrasi Vite --}}
    @vite([
      'resources/css/home1.css',
      'resources/css/home2.css',
      'resources/css/profil2.css'
    ])
  </head>
  <body>
    {{-- NAVBAR --}}
    <nav class="navbar">
      <div class="navbar-container">
        <div class="navbar-left">
          <img src="https://c.animaapp.com/mcbzwwxic13R16/img/logo-t-4-8.png" alt="Logo TANGGAP" />
          <span class="brand">TANGGAP</span>
        </div>

        <div class="navbar-menu">
          <a href="/">Home</a>
          <a href="/pengaduan">Pengaduan</a>
          <a href="/berita">Berita</a>
          <a href="/customer">Customer Service</a>
        </div>

        <div class="navbar-right">
          <div class="notif-icon">
            <img src="https://c.animaapp.com/mcbzwwxic13R16/img/notif3-1-2.png" alt="Notifikasi" />
            <div class="notif-count">2</div>
          </div>
          <a href="/profil">
            <img src="https://c.animaapp.com/mcbzwwxic13R16/img/akun.png" alt="Akun Saya" />
          </a>
        </div>
      </div>
    </nav>

    {{-- KONTEN PROFIL --}}
    <div class="profile-container">
      {{-- SIDEBAR --}}
      <div class="sidebar">
        <a href="#">
          <img src="https://c.animaapp.com/mcbzwwxic13R16/img/akun.png" alt="Profil" />
          Profil Saya
        </a>
        <a href="/pengaduan-saya">
          <img src="https://c.animaapp.com/mcbzwwxic13R16/img/online-document-amico--1--1.png" alt="Pengaduan" />
          Pengaduan Saya
        </a>
        <a href="/logout">
          <img src="https://cdn-icons-png.flaticon.com/512/1828/1828479.png" alt="Keluar" />
          Keluar
        </a>
      </div>

      {{-- KONTEN UTAMA --}}
      <div class="profile-content">
        <h2>Profil Saya</h2>

        <div class="profile-photo">
          <img src="https://c.animaapp.com/mcbzwwxic13R16/img/akun.png" alt="Foto Profil" />
        </div>

        <div class="profile-info">
          <div class="edit-button-container">
            <button class="edit-button" onclick="location.href='/profil/edit'">Edit Profil</button>
          </div>

          <p>Nama: <strong>wifal</strong></p>
          <p>Email: <strong>Stress@gmail.com</strong></p>
          <p>No. HP: <strong>081234511</strong></p>
        </div>
      </div>
    </div>
      <!-- === FOOTER === -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-logo">
        <img src="https://c.animaapp.com/mcbzwwxic13R16/img/logo-t-4-8.png" alt="Logo TANGGAP" />
        <div class="footer-title">TANGGAP</div>
      </div>
      <div class="footer-links">
        <div>
          <h4>Layanan Kami</h4>
          <ul>
            <li>Bantuan</li>
            <li>Notifikasi</li>
            <li>Kontak Kami</li>
          </ul>
        </div>
        <div>
          <h4>Kategori</h4>
          <ul><li>Sosial</li></ul>
        </div>
        <div>
          <h4>Fitur</h4>
          <ul>
            <li>Pengaduan</li>
            <li>Berita</li>
            <li>Profile</li>
          </ul>
        </div>
        <div class="footer-search">
          <h4>Cari</h4>
          <input type="text" placeholder="Cari..." />
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>Tentang Aplikasi</span>
      <span>Hubungi Kami</span>
      <span>Kebijakan Privasi</span>
      <p>© 2024 Jenderal Soedirman. All Rights Reserved</p>
    </div>
  </footer>
  </body>
</html>
