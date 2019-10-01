<body>
    <div class="container">
        <br>
        <div class="input-group mb-3">
            <form action="" method="post">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="keyword">
            </form>
        </div>
        <?php if (empty($siswa)) : ?>
            <div class="alert alert-danger" role="alert">
                data tidak ditemukan
            </div>
        <?php endif; ?>
        <h2>Daftar siswa</h2>
        <hr>
        <div class="col md-6">
            <a href="<?= base_url() . 'siswa/insertData'; ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
                Tambah Data</a>
        </div>
        <hr>
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <table class="table">
            <thead class="thead-dark">
                <tr align=center>
                    <th scope="col"> nama </th>
                    <th scope="col"> action </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $sw) : ?>
                    <tr>
                        <td scope="col"><?php echo $sw["Nama"]; ?></td>
                        <td>
                            <i>
                                <a href="<?= base_url(); ?>siswa/deleteSiswa/<?= $sw['Id']; ?>" class="btn btn-danger float-right" onclick="return confirm('Yakin Data Ini Akan Dihapus');"> <i class="fa fa-trash-o" style="font-size:24px"></i> Hapus</a>
                                <div class="dropdown float-right">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo site_url('siswa/detail/' . $sw['Id']) ?>">Detail</a>
                                        <a class="dropdown-item" href="<?php echo site_url('siswa/edit/' . $sw['Id']) ?>">Edit</a>
                                    </div>
                                </div>
<!-- 
                                <a href="<?php echo site_url('siswa/edit/' . $sw['Id']) ?>" class="btn btn-warning float-right"><i class="fa fa-edit" style="font-size:24px"></i> Edit</a>
                                <a href="<?php echo site_url('siswa/detail/' . $sw['Id']) ?>" class="btn btn-primary float-right"><i class="fa fa-info-circle" style="font-size:24px"></i> Detail</a> -->

                            </i>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>