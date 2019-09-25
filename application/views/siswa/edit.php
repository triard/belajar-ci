<div class="container">
    <div class="container-fluid">
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <div class="row mt-3">
            <div class="col mt-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Form edit Data Siswa</h3>
                    </div>
                    <div class="card body">
                        <form action="<?php base_url('siswa/edit') ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $siswa['Id'] ?>" />
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input id="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" value="<?php echo $siswa['Nama'] ?>">
                            </div>
                            <div class=" form-group">
                                <label for="almat">alamat</label>
                                <input id="alamat" class="form-control <?php echo form_error('nim') ? 'is-invalid' : '' ?>" type="text" name="alamat" value="<?php echo $siswa['Alamat'] ?>">
                            </div>
                            <div class=" form-group">
                                <label for="nim">NIM</label>
                                <input id="nim" class="form-control  <?php echo form_error('nim') ? 'is-invalid' : '' ?>" type=" text" name="nim" value="<?php echo $siswa['Nim'] ?>">
                            </div>

                            <button type=" submit" nama="submit" class="btn btn-primary float-right">Save</button>
                            <a href="<?php echo site_url('siswa/index/') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i>
                                Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>