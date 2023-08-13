<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .container {
        width: 1500px;
    }
</style>
<br>
<h1 class="container" style="text-align: center; font-family: Bahnschrift SemiBold Condensed;"><b>Aplikasi Biodata Siswa</b></h1>
<div class="container">
    <div class="card">
        <div class="card-header bg-success text-white">
            Data Siswa
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('/datasiswa/add') ?>" class="btn btn-primary mb-3" id="tambahData"> + Tambah Data </a>

            <table class="table table-hover">
                <thead class=" bg-warning" style="text-align: center;">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tingkat</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($siswa as $s) : ?>
                        <tr>
                            <th scope="row" style="text-align: center;"><?= $no++; ?></th>
                            <td style="text-align: center;"><?= $s['nis']; ?></td>
                            <td><?= $s['nama']; ?></td>
                            <td style="text-align: center;"><?= $s['tingkat']; ?></td>
                            <td style="text-align: center;"><?= $s['kelas']; ?></td>
                            <td style="text-align: center;"><?= $s['jurusan']; ?></td>
                            <td style="text-align: center;"><a href="<?php echo base_url('/datasiswa/edit/') ?>" class="btn btn-info" id="tombolEdit">Edit</a>

                                <form action="<?php echo base_url('/datasiswa/' . $s['nis']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>