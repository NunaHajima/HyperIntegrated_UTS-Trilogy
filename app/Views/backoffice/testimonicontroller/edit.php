<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Perbarui Testimoni "<?= $data['name'] ?>"</h5>

            <form action="/testimonicontroller/<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                        placeholder="Masukkan Nama" required name="name" value="<?= $data['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="desc">Deskripsi Testimoni</label>
                    <textarea class="form-control" id="desc" rows="5" placeholder="Masukkan Deskripsi Testimoni" required name="desc"><?= $data['desc'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" aria-describedby="emailHelp" 
                        placeholder="Rating" required name="rating" value="<?= $data['rating'] ?>">
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
                    <label for="photo">Photo (Portrait)</label>
                    <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>