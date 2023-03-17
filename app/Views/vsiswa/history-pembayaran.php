<?=$this->extend('dashboadsiswa');?>
<?=$this->section('content');?>
<h2>Laporan Histori Pembayaran SPP</h2>
<p> Dibawah ini adalah sitory pembayaran anda.</p>

    <div class="form-group">
    <table class="table table-striped table-bordered">
	<tr class="fw-bold">
	<th>No</th>
	<th>Tahun</th>
	<th>Bulan</th>
	<th>Tanggal Bayar</th>
	<th>Jumlah Bayar</th>
</tr>
<?php
$no = 1;
$data = null;
foreach ($listPembayaran as $data => $row) { ?>
<tr class="fw-bold">
<td> <?=$data + 1?></td>
<td> <?= $row['tahun_bayar']?></td>
<td> <?= $row['bulan_bayar']?></td>
<td> <?= $row['tgl_bayar']?></td>
<td class="text-right"> <?= number_format($row['jumlah_bayar'],0,',','.');?></td>
	
<?php } ?>
	
</table>
    </div>

<div id="hasilCariHistori"></div>
<?=$this->endSection();?>