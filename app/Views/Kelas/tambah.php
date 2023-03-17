<?= $this->extend('Dashboard') ?>
<?= $this->section('content') ?>
<h2>Penambahan Kelas</h2>
<p>Silahkan masukan data kelas baru pada form dibawah ini. </p>

<form method="POST" action="/kelas/simpan">
    <div class="form-group">
        <label class="font-weight-bold">Nama Kelas</label>
        <input type="text" name="txtNamaKelas" class="form-control" placeholder="Masukan nama kelas, misal : X RPL 1" autocomplete="off" autofocus required>

        </select>
    </div>

    <div class="form-group">
        <label class="font-weight-bold"> Kompetensi Keahlian</label>
        <select name="txtInputKompetensi" class="form-control">
            <option value="RPL">Rekayasa Perangkat Lunak</option>
            <option value="AKL">Akutansi Keuangan Lembaga</option>
            <option value="OTKP">Otomatisasi Tata Kelola Perkantoran</option>
            <option value="BDP">Bisnis Daring dan Pemasaran</option>
            <option value="UPW">Usaha Perjalanan Wisata</option>
            <option value="TKJ">Teknik Komputer Jaringan</option>
        </select>
    </div>

    <div class="form-group">
        <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan </button>
    </div>

</form>
<?= $this->endSection(); ?>