<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Program Kursus</h6>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        
        <a href="<?php echo site_url('program_kursus/tambahprogram_kursus'); ?>" class="btn btn-primary mb-3">Tambah Data</a>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Program Kursus</th>
                        <th>Nama Program Kursus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach($data_program as $row) :
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->idprogramkursus; ?></td>
                        <td><?php echo $row->nmprogramkursus; ?></td>
                        <td>
                            <a href="<?php echo site_url('program_kursus/editprogram_kursus/'.$row->idprogramkursus); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('program_kursus/hapus/'.$row->idprogramkursus); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>