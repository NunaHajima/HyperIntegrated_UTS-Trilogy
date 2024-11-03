<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Perbarui Layanan"<?= $data['judul'] ?>"</h5>

            <form action="/servicescontroller/<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" 
                        placeholder="Masukkan Judul" required name="judul" value="<?= $data['judul'] ?>">
                </div>
                <div class="form-group">
                    <label for="service">Deskripsi</label>
                    <textarea class="form-control" id="service" rows="5" placeholder="Masukkan Deskripsi" required name="service"><?= $data['service'] ?></textarea>
                </div>
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