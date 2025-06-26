<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pengaduan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  @vite(['resources/css/pengaduan2.css', 'resources/js/pengaduan.js'])
</head>
<body>

  <!-- === NAVBAR === -->
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

  <!-- === FORM === -->
  <div class="container">
    <form id="pengaduanForm">
      <!-- Step 1 -->
      <div class="step active" id="step1">
        <h2>1. Isi Form Pengaduan</h2>
        <div class="form-group">
          <label>Judul</label>
          <input type="text" id="judul" required />
        </div>
        <div class="form-group">
          <label>Uraian Masalah</label>
          <textarea id="uraian" required></textarea>
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <input type="text" id="lokasi" required />
        </div>
        <div class="buttons">
          <span></span>
          <button type="button" onclick="nextStep()">Lanjutkan</button>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step" id="step2">
        <h2>2. Tambahkan Foto</h2>
        <label class="upload-box">
          <div class="upload-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/126/126477.png" />
            Upload Foto
          </div>
          <input type="file" id="foto" accept="image/*" onchange="previewFoto(event)" hidden />
        </label>
        <div class="buttons">
          <button type="button" onclick="prevStep()">Sebelumnya</button>
          <button type="button" onclick="nextStep()">Lanjutkan</button>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step" id="step3">
        <h2>3. Pratinjau Pengaduan</h2>
        <div class="preview-box">
          <img id="preview" />
        </div>
        <div class="uraian-preview">
          <h4>Uraian Masalah:</h4>
          <p id="uraianPreview"></p>
        </div>
        <div class="buttons">
          <button type="button" onclick="prevStep()">Sebelumnya</button>
          <button type="submit">Kirim</button>
        </div>
      </div>
    </form>
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
  <script>
let currentStep = 0;
const steps = document.querySelectorAll('.step');

function showStep(i) {
  steps.forEach((step, idx) => step.classList.toggle('active', idx === i));
  currentStep = i;
}

function nextStep() {
  if (currentStep === 1) {
    document.getElementById("uraianPreview").textContent = document.getElementById("uraian").value;
  }
  if (currentStep < steps.length - 1) showStep(currentStep + 1);
}

function prevStep() {
  if (currentStep > 0) showStep(currentStep - 1);
}

function previewFoto(event) {
  const preview = document.getElementById("preview");
  const file = event.target.files[0];
  if (file && file.type.startsWith("image/")) {
    const reader = new FileReader();
    reader.onload = e => {
      preview.src = e.target.result;
      preview.style.display = "block";
    };
    reader.readAsDataURL(file);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  showStep(0);
});
</script>
</body>
</html>
