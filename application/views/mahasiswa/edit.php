<br><br>
<div id="wrapper">
    <div id="content-wrapper">
        <div class="container">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">
                    <h4>Edit data Mahasiswa</h4>
                </div>
                <div class="card-body">

                    <form action="<?php base_url('mahasiswa/edit') ?>" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>" />

                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="nama mahasiswa" value="<?php echo $mahasiswa['nama'] ?>" />
                            <div class="invalid-feedback">
                                <?php echo form_error('nama') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">NIM</label>
                            <input class="form-control <?php echo form_error('nim') ? 'is-invalid' : '' ?>" type="number" name="nim" min="0" placeholder="nomor indux mahasiswa" value="<?php echo $mahasiswa['nim'] ?>" />
                            <div class="invalid-feedback">
                                <?php echo form_error('price') ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="name">Alamat*</label>
                            <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" placeholder="alamat..."><?php echo $mahasiswa['alamat'] ?></textarea>
                            <div class="invalid-feedback">
                                <?php echo form_error('alamat') ?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label for="jurusan">jurusan</label>
                            <select id="jurusan" class="form-control" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
                                <option value="Kimia">Kimia</option>
                                <option value="informatika">informatika</option>
                                <option value="Mesin">Mesin</option>
                            </select>
                        </div>

                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        <a href="<?php echo site_url('mahasiswa/index/') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i>
                            Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>