<?php
$creatures = [
[
"nama" =>
"Barong Ket", "kategori" => "Makhluk", "habitat" => "Pura dan desa Bali",
"tingkat_misteri" => 5, "deskripsi" => "Makhluk yang sering dipandang sebagai
pelindung dan simbol kebaikan dalam cerita Bali.", "fakta" => "Barong masuk ke
banyak pertunjukan tradisional dan masih dianggap penting dalam budaya Bali.",
"gambar" =>
"https://images.unsplash.com/photo-1518546305927-5a555bb7020d?auto=format&fit=crop&w=900&q=80"
], [ "nama" => "Rangda", "kategori" => "Roh", "habitat" => "Hutan dan tempat
yang terasa angker", "tingkat_misteri" => 5, "deskripsi" => "Tokoh yang sering
menjadi lawan dari Barong dalam cerita Bali, dengan aura yang sangat kuat.",
"fakta" => "Dalam banyak versi cerita, Rangda dikenal sebagai sosok yang
misterius dan berpengaruh.", "gambar" =>
"https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=80"
], [ "nama" => "Leak", "kategori" => "Makhluk", "habitat" => "Tempat sepi dan
malam hari", "tingkat_misteri" => 4, "deskripsi" => "Makhluk yang sering
dikaitkan dengan cerita malam dan suasana yang terasa sunyi.", "fakta" => "Leak
sering muncul dalam kisah rakyat sebagai bentuk rasa takut yang dibawa ke
lingkungan tertentu.", "gambar" =>
"https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=900&q=80"
], [ 4 "nama" => "Naga Basuki", "kategori" => "Legenda", "habitat" => "Sungai,
air terjun, dan pura", "tingkat_misteri" => 4, "deskripsi" => "Legenda yang erat
kaitannya dengan air dan keseimbangan alam di Bali.", "fakta" => "Naga sering
dianggap sebagai simbol penjaga alam dan sumber kehidupan.", "gambar" =>
"https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=900&q=80"
], [ "nama" => "Dewi Sri", "kategori" => "Lainnya", "habitat" => "Sawah dan
ladang", "tingkat_misteri" => 3, "deskripsi" => "Tokoh yang terkait dengan
kesuburan dan kemakmuran alam untuk masyarakat Bali.", "fakta" => "Ia sering
dijadikan simbol harapan para petani dan kesejahteraan desa.", "gambar" =>
"https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=900&q=80"
], [ "nama" => "Babi Ngepet", "kategori" => "Makhluk", "habitat" => "Kebun dan
pekarangan", "tingkat_misteri" => 4, "deskripsi" => "Cerita tentang makhluk yang
sering muncul di malam hari dan membuat orang merasa waswas.", "fakta" => "Versi
ceritanya sering dipakai untuk menjelaskan tempat-tempat yang terasa mistis di
sekitar desa.", "gambar" =>
"https://images.unsplash.com/photo-1526336024174-e58f5cdd8e13?auto=format&fit=crop&w=900&q=80"
], [ "nama" => "Kera Putih", "kategori" => "Legenda", "habitat" => "Hutan dan
bukit sakral", "tingkat_misteri" => 3, 5 "deskripsi" => "Makhluk legendaris yang
sering dikaitkan dengan penjagaan tempat suci dan alam sekitar.", "fakta" =>
"Cerita ini menegaskan pentingnya menghormati lingkungan dan tempat yang
dianggap sakral.", "gambar" =>
"https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=900&q=80"
], [ "nama" => "Penunggu Pura", "kategori" => "Roh", "habitat" => "Pura dan area
suci", "tingkat_misteri" => 4, "deskripsi" => "Sosok yang dipercaya menjaga
tempat ibadah dan mengingatkan manusia untuk selalu hormat.", "fakta" => "Cerita
ini sering dikaitkan dengan nilai rasa hormat dan menjaga kebersihan lingkungan
suci.", "gambar" =>
"https://images.unsplash.com/photo-1516483638261-f4dbaf036963?auto=format&fit=crop&w=900&q=80"
], [ "nama" => "Mbah Gunung", "kategori" => "Lainnya", "habitat" => "Gunung dan
daerah pegunungan", "tingkat_misteri" => 5, "deskripsi" => "Legenda tentang
penjaga alam yang kerap hadir dalam cerita rakyat dan narasi orang tua.",
"fakta" => "Kisah ini menggambarkan rasa hormat masyarakat Bali terhadap alam
dan gunung tinggi.", "gambar" =>
"https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=900&q=80"
] ]; ?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    6
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bali Bestiary</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background: #f5efe6;
        color: #1d1d1d;
        font-family: Arial, sans-serif;
        margin: 0;
      }
      a {
        text-decoration: none;
      }
      .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
      }
      .hero {
        background:
          linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),
          url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1400&q=80")
            center/cover no-repeat;
        min-height: 380px;
        display: flex;
        align-items: center;
        margin-bottom: 24px;
      }
      .hero-inner {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 18px;
        max-width: 560px;
        padding: 28px 24px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      }
      .eyebrow {
        color: #8b6a1c;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-size: 0.72rem;
      }
      .hero h1 {
        margin: 10px 0 12px;
        font-size: clamp(2.2rem, 5vw, 4rem);
        letter-spacing: 2px;
        color: #1d1d1d;
      }
      .hero p {
        margin: 0;
        color: #4d4b48;
        line-height: 1.7;
      }
      .btn-main {
        display: inline-block;
        background: #2f4f3f;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 12px 20px;
        font-weight: 600;
        margin-top: 18px;
      }
      .btn-main:hover {
        background: #254136;
        color: white;
      }
      .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -12px;
      }
      .col-md-6,
      .col-lg-4 {
        box-sizing: border-box;
        width: 100%;
        padding: 12px;
      }
      @media (min-width: 768px) {
        .col-md-6 {
          width: 50%;
        }
      }
      @media (min-width: 992px) {
        .col-lg-4 {
          width: 33.333%;
        }
      }
      .card-custom {
        background: white;
        border: 1px solid #e8dec7;
        border-radius: 16px;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
      }
      .card-custom img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
      }
      .card-body {
        padding: 18px;
      }
      .badge-kategori {
        display: inline-block;
        background: #f1eadb;
        color: #5e4721;
        border-radius: 999px;
        font-size: 0.72rem;
        padding: 6px 10px;
        margin-bottom: 12px;
      }
      .card-custom h3 {
        margin: 0 0 8px;
        font-size: 1.3rem;
        color: #1d1d1d;
      }
      .meta {
        color: #4d4b48;
        font-size: 0.9rem;
        margin-bottom: 8px;
      }
      .mystery {
        color: #9a7a1d;
        letter-spacing: 1px;
      }
      .desc {
        color: #4a463d;
        line-height: 1.7;
        margin-top: 12px;
        margin-bottom: 14px;
      }
      .btn-detail {
        background: transparent;
        border: 1px solid #2f4f3f;
        color: #2f4f3f;
        width: 100%;
        border-radius: 10px;
        padding: 10px 12px;
        margin-top: 8px;
        cursor: pointer;
        font-weight: 600;
      }
      .btn-detail:hover {
        background: #2f4f3f;
        color: white;
      }
      .modal-content {
        background: #fffefb;
        color: #1d1d1d;
        border: 1px solid #e7dcc4;
        border-radius: 16px;
      }
      .modal-header,
      .modal-footer {
        border-color: #efe4d2;
      }
      .detail-image {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 16px;
      }
    </style>
  </head>
  <body>
    <header class="hero" id="home">
      <div class="container">
        <div class="hero-inner">
          <div class="eyebrow">Bali Folklore</div>
          <h1>BALI BESTIARY</h1>
          <p>Mengenal cerita, makhluk, dan legenda yang berkembang di Bali.</p>
          <a href="#bestiary" class="btn btn-main">Lihat Bestiary</a>
        </div>
      </div>
    </header>
    <div class="container" id="bestiary">
      <div class="row">
        11 <?php foreach ($creatures as $item): ?> <?php $kategori =
        strtolower($item['kategori']); $bintang = str_repeat('★',
        $item['tingkat_misteri']) . str_repeat('☆', 5 -
        $item['tingkat_misteri']); ?>
        <div
          class="col-md-6 col-lg-4 creature-card"
          data-kategori="<?= $kategori ?>"
        >
          <div class="card-custom">
            <img src="<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>" />
            <div class="card-body">
              <span class="badge-kategori"><?= $item['kategori'] ?></span>
              <h3><?= $item['nama'] ?></h3>
              <div class="meta">
                <strong>Habitat:</strong> <?= $item['habitat'] ?>
              </div>
              <div class="meta">
                <strong>Misteri:</strong>
                <span class="mystery"><?= $bintang ?></span>
              </div>
              <p class="desc"><?= $item['deskripsi'] ?></p>
              <button
                class="btn btn-detail"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#detailModal"
                data-nama="<?= htmlspecialchars($item['nama'], ENT_QUOTES, 'UTF-8') ?>"
                data-kategori="<?= htmlspecialchars($item['kategori'], ENT_QUOTES, 'UTF-8') ?>"
                data-habitat="<?= htmlspecialchars($item['habitat'], ENT_QUOTES, 'UTF-8') ?>"
                data-tingkat="<?= htmlspecialchars((string) $item['tingkat_misteri'], ENT_QUOTES, 'UTF-8') ?>"
                data-deskripsi="<?= htmlspecialchars($item['deskripsi'], ENT_QUOTES, 'UTF-8') ?>"
                data-fakta="<?= htmlspecialchars($item['fakta'], ENT_QUOTES, 'UTF-8') ?>"
                data-gambar="<?= htmlspecialchars($item['gambar'], ENT_QUOTES, 'UTF-8') ?>"
              >
                Lihat Detail
              </button>
              12
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detail Cerita</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <img
              id="detailImage"
              class="detail-image"
              src=""
              alt="Gambar makhluk"
            />
            <span id="detailKategori" class="badge-kategori"></span>
            <h3 id="detailNama" class="mt-3"></h3>
            <p><strong>Habitat:</strong> <span id="detailHabitat"></span></p>
            <p>
              <strong>Tingkat Misteri:</strong> <span id="detailTingkat"></span>
            </p>
            <p id="detailDeskripsi"></p>
            <h6 class="mt-4">Fakta Singkat</h6>
            <p id="detailFakta"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-main" data-bs-dismiss="modal">
              Tutup
            </button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      13;
      const detailButtons = document.querySelectorAll(
        '[data-bs-target="#detailModal"]',
      );
      detailButtons.forEach(function (button) {
        button.addEventListener("click", function () {
          const tingkat = Number(this.dataset.tingkat);
          const starText = "★".repeat(tingkat) + "☆".repeat(5 - tingkat);
          document.getElementById("detailImage").src = this.dataset.gambar;
          document.getElementById("detailKategori").textContent =
            this.dataset.kategori;
          document.getElementById("detailNama").textContent = this.dataset.nama;
          document.getElementById("detailHabitat").textContent =
            this.dataset.habitat;
          document.getElementById("detailTingkat").textContent = starText;
          document.getElementById("detailDeskripsi").textContent =
            this.dataset.deskripsi;
          document.getElementById("detailFakta").textContent =
            this.dataset.fakta;
        });
      });
    </script>
  </body>
</html>
