<?php
$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'];
include'../koneksi.php';
$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>


<h5>Halaman Edit Data SPP.</h5>
<a href="?url=petugas" class="btn btn-primary"> Kembali</a>
<hr>
<form method="post" action="?url=proses-edit-petugas&id_petugas=<?= $id_petugas; ?>">
    <div class="form-grup mb-2">
        <label >Nama Petugas</label>
        <input value="<?= $_SESSION['nama_petugas'] ?>" disabled class="form-control" required>
    </div>
    <div class="form-grup mb-2">
        <label >Password</label>
        <input value="<?= $data['password'] ?>" type="text" name="password" class="form-control" required>
    </div>
    <div class="form-grup mb-2">
        <label >NISN</label>
        <input value="<?= $data['nisn'] ?>" disabled type="text"  class="form-control" required>
    </div>
    <div class="form-grup mb-2">
        <label >Nama Siswa</label>
        <input value="<?= $data['nama'] ?>" disabled type="text"  class="form-control" required>
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
        <label >NISN</label>
        <input value="<?= $data['nisn'] ?>" disabled type="text" name="nama_petugas" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>