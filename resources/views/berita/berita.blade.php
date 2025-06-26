<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda - TANGGAP</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  @vite(['resources/css/berita.css', 'resources/js/.js'])
</head>
<body>
  <header class="navbar">
    <div class="navbar-content">
      <img src="https://c.animaapp.com/mcbzwwxic13R16/img/logo-t-4-8.png" class="navbar-logo" alt="Logo" />
      <nav class="navbar-links">
        <a href="/">Home</a>
        <a href="/pengaduan">Pengaduan</a>
        <a href="/berita">Berita</a>
        <a href="/customer">Customer Service</a>
      </nav>
      <div class="navbar-profile">
        <img src="https://c.animaapp.com/mcbzwwxic13R16/img/akun.png" alt="Profil" />
      </div>
    </div>
  </header>

  <div class="hero">
    <div class="slides">
      <img src="https://golkarpedia.com/wp-content/uploads/2024/09/3108-dedi-mulyadi-jabar.jpg" alt="Banner 1">
      <img src="https://www.bekasikab.go.id/uploads/news/id11763_Compress_20250623_152338_8643.jpg" alt="Banner 2">
      <img src="https://www.blitarkota.go.id/uploads/berita/9gI9KcnzoUpDKQ4d8VQpOjlfafgYriGtVaNGW7jz.jpg" alt="Banner 3">
    </div>
    <div class="slider-dots">
      <span class="active" onclick="goToSlide(0)"></span>
      <span onclick="goToSlide(1)"></span>
      <span onclick="goToSlide(2)"></span>
    </div>
  </div>

  <section class="berita-section">
    <div class="berita-grid">
      <div class="berita-card">
        <img src="https://hibar.pgrikabupatenbandung.id/wp-content/uploads/2025/02/1e72224f-3c2e-4f0d-b64b-51fa652cf522-800x445.jpeg" alt="Berita 1">
        <div class="berita-text">
          <h4>Pemkab Bandung Imbau Masyarakat Waspada Potensi Bencana Alam yang Disebabkan Perubahan Cuaca Ekstrem</h4>
          <p>10 jam yang lalu</p>
        </div>
      </div>

      <div class="berita-card">
        <img src="https://akcdn.detik.net.id/community/media/visual/2025/05/25/ilustrasi-hujan-1748142789481_169.jpeg?w=700&q=90" alt="Berita 2">
        <div class="berita-text">
          <h4>Bandung Hujan Tidak Hari Ini? Ini Prakiraan Cuacanya dari BMKG</h4>
          <p>2 hari yang lalu</p>
        </div>
      </div>

      <div class="berita-card">
        <img src="https://auto2000.co.id/berita-dan-tips/_next/image?url=https%3A%2F%2Fastradigitaldigiroomuat.blob.core.windows.net%2Fstorage-uat-001%2FKetahui_Jadwal_SIM_Keliling_Kota_Bandung.jpg&w=800&q=75" alt="Berita 3">
        <div class="berita-text">
          <h4>Ketahui Jadwal SIM Keliling Kota Bandung Terbaru 2025</h4>
          <p>1 hari yang lalu</p>
        </div>
      </div>

      <div class="berita-card">
        <img src="https://www.radarbandung.id/wp-content/uploads/2025/06/1001127806-768x576.jpg" alt="Berita 4">
        <div class="berita-text">
          <h4>Padahal Tinggal Wisuda, Mahasiswa di Kota Bandung Penjual Ganja Diringkus Sat Res Narkoba Polres</h4>
          <p>1 hari yang lalu</p>
        </div>
      </div>

      <div class="berita-card">
        <img src="https://www.radarbandung.id/wp-content/uploads/2022/09/tikus-2.jpeg" alt="Berita 5">
        <div class="berita-text">
          <h4>Digigit Tikus saat Bekerja, Satu Warga Bandung Barat Terpapar Virus Hanta</h4>
          <p>1 hari yang lalu</p>
        </div>
      </div>

      <div class="berita-card">
        <img src="https://www.radarbandung.id/wp-content/uploads/2025/06/IMG-202506220055.jpg" alt="Berita 6">
        <div class="berita-text">
          <h4>Bandung Siapkan Angkot Ber-AC dan Digaji Pemerintah, Tak Ada Lagi Ngetem</h4>
          <p>1 hari yang lalu</p>
        </div>
      </div>
    </div>
  </section>

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
  <script>
    let currentIndex = 0;
    const slides = document.querySelector('.slides');
    const dots = document.querySelectorAll('.slider-dots span');
    const totalSlides = dots.length;

    function updateSlider() {
      slides.style.transform = `translateX(-${currentIndex * 100}%)`;
      dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
      });
    }

    function goToSlide(index) {
      currentIndex = index;
      updateSlider();
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlider();
    }

    setInterval(nextSlide, 3000);
  </script>
</body>
</html>
