<?= $this->include('Layout/headersiswa'); ?>

<!-- Awal Konten Aplikasi -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <?= $this->renderSection('content') ?>
  </div>
</main>
<div class="card mt-2">
  <div class="card-body">
    <!--Ini isi web kita-->
    <?php
    $file = @$_GET['url'];
    if (empty($file)) {
      echo "<h4>Selamat Datang Di Halaman Siswa.</h4>";
      echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi disekolah.";
    } else {
      include $file . '.php';
    }
    ?>


  </div>
</div>


<?= $this->include('Layout/Footer'); ?>