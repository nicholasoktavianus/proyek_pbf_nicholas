<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Program Kursus</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('program_kursus/editprogram_kursus/'.$edit->idprogramkursus); ?>" method="POST">
            <div class="form-group">
                <label>ID Program Kursus</label>
                <input type="text" name="idprogramkursus" class="form-control" value="<?php echo $edit->idprogramkursus; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama Program Kursus</label>
                <input type="text" name="nmprogramkursus" class="form-control" value="<?php echo $edit->nmprogramkursus; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-warning">Ubah Data</button>
            <a href="<?php echo site_url('program_kursus'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>