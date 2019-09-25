<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-reader">
                    <h4>Detail Siswa</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $siswa['Nama']; ?></h5>
                    <hr>
                    <p class="card-text">
                        <label for="">NIM</label>
                        <br><?php echo $siswa['Nim']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Alamat</label>
                        <br><?php echo $siswa['Alamat']; ?>
                    </p>
                    <a href="<?php echo site_url('siswa/index/') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i>
                        Back</a>
                </div>
            </div>
        </div>
    </div>