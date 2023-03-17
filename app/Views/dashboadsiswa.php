<?=$this->include('Layout/headersiswa');?>

<!-- Awal Konten Aplikasi -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <?= $this->renderSection('content') ?>
  </div>
</main>
<div class="card mt-2">

        </div>


<?=$this->include('Layout/Modal');?>
<?=$this->include('Layout/Footer');?>