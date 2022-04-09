<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>
    </div>

    <div class="card-body">
    <form method="post" action="simpan_catatan.php">
    <div class="form-group">
                <label>Tanggal Perjalanan</label>
                <input name="tanggal" class="form-control" type="date" placeholder="Pilih Tanggal" required>
            </div>
            <br>
            <div class="form-group">
                <label>Waktu Perjalanan</label>
                <input name="waktu" class="form-control" type="time" placeholder="Pilih Waktu" required>
            </div>
            <br>
            <div class="form-group">
                <label>Lokasi Perjalanan</label>
                <input name="lokasi" class="form-control" type="text" placeholder="Masukan Lokasi Perjalanan" required>
            </div>
            <br>
            <div class="form-group">
                <label>Suhu Tubuh</label>
                <input name="suhu" class="form-control" type="text" placeholder="Masukan Suhu Tubuh" required>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> SIMPAN </button>
                <button type="reset" style="background: #D65004" class="btn btn-secondary"> <i class="fa fa-trash"></i> KOSONGKAN </button>
            </div>
</form>
    </div>