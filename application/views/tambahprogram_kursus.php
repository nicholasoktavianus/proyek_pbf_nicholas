<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Program Kursus</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('program_kursus/tambahprogram_kursus'); ?>" method="POST">
            <div class="form-group">
                <label>ID Program Kursus</label>
                <input type="text" name="idprogramkursus" class="form-control" value="<?php echo $idprogramkursus; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama Program Kursus</label>
                <input type="text" name="nmprogramkursus" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            <a href="<?php echo site_url('program_kursus'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>