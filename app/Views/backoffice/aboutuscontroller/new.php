<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Tambahkan Data Karyawan</h5>

            <form action="/aboutuscontroller" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="name">Nama</label>
                    <textarea class="form-control" id="name" rows="5" placeholder="Anggota Tim" required name="name"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="job">Deskripsi Pekerjaan</label>
                    <textarea class="form-control" id="job" rows="5" placeholder="Masukkan Deskripsi Pekerjaan" required name="job"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>