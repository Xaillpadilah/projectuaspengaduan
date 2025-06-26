<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    {{-- Integrasi Vite --}}
    @vite([
      'resources/css/home1.css',
      'resources/css/home2.css',
      'resources/css/home3.css'
    ])
  </head>
  <body>
    {{-- ========== NAVBAR ========== --}}
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

    {{-- ========== KONTEN UTAMA .HOME ========== --}}
    <div class="home">
      <div class="div">
        <div class="overlap">
          <img class="rectangle" src="https://c.animaapp.com/mcbzwwxic13R16/img/rectangle-4349.svg" />
          <img class="img" src="https://c.animaapp.com/mcbzwwxic13R16/img/rectangle-4353.svg" />
          <p class="text-wrapper">Tanggap adalah sarana pengaduan masyarakat terhadap suatu masalah.</p>
          <div class="text-wrapper-2">TANGGAP</div>
          <img class="online-document" src="https://c.animaapp.com/mcbzwwxic13R16/img/online-document-amico--1--1.png" />
          <img class="rectangle-3" src="https://c.animaapp.com/mcbzwwxic13R16/img/rectangle-93.svg" />
          <p class="sampaikan-suara-anda">
            <span class="span">Sampaikan suara Anda pada kami.<br /></span>
            <span class="text-wrapper-9">Laporan Anda membawa perbaikan.<br />Mari bersama wujudkan perubahan yang lebih baik untuk masyarakat.</span>
          </p>
          <div class="rectangle-4"></div>
          <div class="text-wrapper-11" onclick="location.href='selengkapnya.html'">Selengkapnya</div>
          <img class="devices-pana" src="https://c.animaapp.com/mcbzwwxic13R16/img/devices-pana.png" />
        </div>

        <div class="text-wrapper-20">Layanan</div>

        <div class="overlap-wrapper">
          <div class="overlap-3">
            <div class="text-wrapper-21">Customer Service</div>
            <p class="text-wrapper-22">
              Jika masyarakat ingin menyampaikan keluhannya, bisa menghubungi customer service kami
            </p>
            <div class="overlap-group-wrapper">
              <div class="overlap-group-3">
                <div class="text-wrapper-23" onclick="location.href='baca-selengkapnya.html'">Baca Selengkapnya</div>
              </div>
            </div>
            <img class="contact-us-pana" src="https://c.animaapp.com/mcbzwwxic13R16/img/contact-us-pana-2.png" />
          </div>
        </div>

        <div class="group-4">
          <div class="overlap-5">
            <div class="text-wrapper-26">Pengaduan</div>
            <p class="text-wrapper-27">
              Kami menyediakan layanan pengaduan bagi seluruh masyarakat untuk menemukan solusi yang efektif dan efisien
            </p>
            <div class="overlap-group-wrapper">
              <div class="overlap-group-3">
                <div class="text-wrapper-23">Baca Selengkapnya</div>
              </div>
            </div>
            <img class="devices-pana-2" src="https://c.animaapp.com/mcbzwwxic13R16/img/devices-pana-1.png" />
          </div>
        </div>

        <div class="group-2">
          <div class="overlap-4">
            <div class="text-wrapper-24">Berita</div>
            <p class="text-wrapper-25">
              platform kami juga memberi layanan berita terupdate untuk setiap harinya untuk bagi setiap masyarakat
            </p>
            <div class="group-3">
              <div class="overlap-group-3">
                <div class="text-wrapper-23">Baca Selengkapnya</div>
              </div>
            </div>
            <img class="exciting-news-amico" src="https://c.animaapp.com/mcbzwwxic13R16/img/exciting-news-amico.png" />
          </div>
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
