<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Perbarui Data"<?= $data['name'] ?>"</h5>

            <form action="/aboutuscontroller/<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />

                <div class="form-group">
                    <label for="name">Nama</label>
                    <textarea class="form-control" id="name" rows="5" placeholder="Masukkan Anggota Team" required name="name"><?= $data['name'] ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="job">Deskripsi Pekerjaan</label>
                    <textarea class="form-control" id="job" rows="5" placeholder="Masukkan Deskripsi Pekerjaan" required name="job"><?= $data['job'] ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="photo">Current Photo:</label>
                    <?php if ($data['photo']) { ?>
                        <img src="/photos/<?= $data['photo'] ?>" alt="" width=100 height=100>
                    <?php } else { ?>
                        <p>No Photo.</p>
                    <?php } ?>
                </div>
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