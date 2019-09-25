<div class="container">
    <div class="row mt-3">
        <div class="col mt-6">
            <div class="card">
                <div class="card-header">
                    <h3>Form Tambah Data Mahasiswa</h3>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="card body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php base_url('mahasiswa/index') ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input id="nim" class="form-control  <?php echo form_error('nim') ? 'is-invalid' : '' ?>" type=" text" name="nim">
                        </div>
                        <div class=" form-group">
                            <label for="almat">alamat</label>
                            <input id="alamat" class="form-control <?php echo form_error('nim') ? 'is-invalid' : '' ?>" type="text" name="alamat">
                        </div>
                        <div class=" form-group">
                            <label for="jurusan">jurusan</label>
                            <select id="jurusan" class="form-control" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>>
                                <option value=" Kimia">Kimia</option>
                                <option value="informatika">informatika</option>
                                <option value="Mesin">Mesin</option>
                            </select>
                        </div>

                        <button type="submit" nama="submit" class="btn btn-primary float-right">Submit</button>
                        <a href="<?php echo site_url('mahasiswa/index/') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i>
                            Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>