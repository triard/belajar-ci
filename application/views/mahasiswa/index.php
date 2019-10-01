<body>
    <div class="container">

        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <br>
        <div class="input-group mb-3">
            <form action="" method="post">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="keyword">
            </form>
        </div>
        <?php if (empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
                data tidak ditemukan
            </div>
        <?php endif; ?>

        <div class="card-small">
            <div class="card-header">
                <h2>Daftar Mahasiswa</h2>
                <hr>
                <div class="col md-6">
                    <a href="<?= base_url() . 'mahasiswa/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
                </div>
                <hr>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th> nama </th>
                            <th> action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?php echo $mhs['nama']; ?></td>
                                <td>
                                    <i>
                                        <a href="<?= base_url(); ?>mahasiswa/delete/<?= $mhs['id']; ?>" class="btn btn-danger float-right" onclick="return confirm('Yakin Data Ini Akan Dihapus');"> <i class="fa fa-trash-o" style="font-size:24px"></i> Hapus</a>
                                        <div class="dropdown float-right">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo site_url('mahasiswa/detail/' . $mhs['id']) ?>">Detail</a>
                                                <a class="dropdown-item" href="<?php echo site_url('mahasiswa/edit/' . $mhs['id']) ?>">Edit</a>
                                            </div>
                                        </div>
                                        <!-- <a href="<?php echo site_url('mahasiswa/edit/' . $mhs['id']) ?>" class="btn btn-warning float-right"><i class="fa fa-edit" style="font-size:24px"></i> Edit</a>
                                        <a href="<?php echo site_url('mahasiswa/detail/' . $mhs['id']) ?>" class="btn btn-primary float-right"><i class="fa fa-info-circle" style="font-size:24px"></i> Detail</a> -->
                                    </i>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>