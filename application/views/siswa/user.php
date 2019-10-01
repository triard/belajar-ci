<div class="container mt-20">
    <div class="col-md-12">
        <h1 class="text-center mb-30"><?= $title ?></h1>
    </div>
    <div>
        <a href="<?= base_url() . 'laporan_pdf/laporan_siswa'; ?>" class="btn btn-danger float-right" style="margin:10px 0 10px 0;">print data</a>
    </div>
    <table class="table wy-table-striped wy-table-bordered" id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($siswa as $sw) :
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $sw->Nama; ?></td>
                    <td><?= $sw->Nim ?></td>
                    <td><?= $sw->Alamat ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>