<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<style>
    .container {
        width: 1200px;
    }
</style>

<div class="container">
    <br>
    <h1 class="container" style="text-align: center; font-family: Bahnschrift SemiBold Condensed;"><b>Tambah Data Siswa</b></h1>
    <br>
    <div class="card">
        <div class="card-header bg-success text-white">
            Input Data
        </div>
        <form action="/datasiswa/save" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
                <!-- error -->
                <div class="alert alert-danger error" role="alert" style="display: none;">
                </div>
                <!--sukses-->
                <div class="alert alert-primary sukses" role="alert" style="display: none;">
                </div>
                <!--Form-->
                <label for="nis">NIS</label>
                <input type="text" id="nis" name="nis" class="form-control" placeholder="nis..." autofocus>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="nama...">
                <label for="tingkat">Tingkat</label>
                <select class="form-select" id="tingkat" name="tingkat" aria-label="Default select example">
                    <option selected>Tingkat...</option>
                    <option value="x">X</option>
                    <option value="xi">XI</option>
                    <option value="xii">XII</option>
                </select>
                <label for="kelas">Kelas</label>
                <select class="form-select" id="kelas" name="kelas" aria-label="Default select example">
                    <option selected>Kelas...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <label for="jurusan">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
                    <option selected>Jurusan...</option>
                    <option value="rpl">RPL</option>
                    <option value="tkro">TKRO</option>
                    <option value="tmi">TMI</option>
                    <option value="tm">TM</option>
                    <option value="tbo">TBO</option>
                </select>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" id="simpan" class="btn btn-success">Edit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <?= $this->endSection(); ?>