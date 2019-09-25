<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Detail mahasiwa</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $mahasiswa['nama']; ?></h5>
                    <p class="card-text">
                        <label for="">NIM</label>
                        <br><?php echo $mahasiswa['nim']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Alamat</label>
                        <br><?php echo $mahasiswa['alamat']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">NIM</label>
                        <br><?php echo $mahasiswa['jurusan']; ?>
                    </p>
                    <a href="<?php echo site_url('mahasiswa/index/') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                        Back</a>

                </div>
            </div>
        </div>
    </div>
</div>