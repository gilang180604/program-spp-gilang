<?php
$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'];
include'../koneksi.php';
$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>


<h5>Halaman Pembayaran SPP.</h5>
<a href="?url=pembayaran" class="btn btn-primary"> Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-pembayaran&nins=<?= $nisn; ?>">
     <input name="id_spp" value="<?= $data['id_spp'] ?>" type="hidden"  class="form-control" required>
    <div class="form-grup mb-2">
        <label >Nama Petugas</label>
        <input value="<?= $_SESSION['nama_petugas'] ?>" disabled class="form-control" required>
    </div>
    <div class="form-grup mb-2">
        <label >NISN</label>
        <input readonly name="nisn" value="<?= $data['nisn'] ?>" type="text"  class="form-control" required>
    </div>
    <div class="form-grup mb-2">
        <label >Nama Siswa</label>
        <input value="<?= $data['nama'] ?>" disabled type="text"  class="form-control" required>
    </div>
    <div class="form-grup mb-2">
        <label >Tanggal Bayar</label>
        <input name="tgl_bayar" type="date"  class="form-control" required>
    </div>
    <div class="form-grup mb-2">
        <label > Bulan Bayar</label>
        <select name="bulan_dibayar" class="form-control" required>
            <option value="">Pilih Bulan Dibayar</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
    </div>
    <div class="form-grup mb-2">
        <label >tahun Bayar</label>
        <select name="tahun_dibayar" class="form-control" required>
            <option value="">Pilih Tahun Bayar</option>
            <?php
            for($i=2010; $i<=date('Y'); $i++){
                echo"<option value='$i'> $i</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-grup mb-2">
        <label >Jumlah Bayar (Jumlah yang Harus Di Bayar Adalah <b> <?= number_format($kekurangan,2,',','.') ?> </b>)</label>
        <input type="number" name="jumlah_bayar" max="<?= $kekurangan; ?>" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>