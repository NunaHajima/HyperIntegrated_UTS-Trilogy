<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Perbaru Berita <?= $data['judul'] ?></h5>

            <form action="/newscontroller" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" 
                        placeholder="Masukkan Judul Berita Terbaru" required name="judul" value="<?= $data['judul'] ?>">
                </div>

                <div class="form-group">
                    <label for="berita">Berita</label>
                    <input type="text" class="form-control" id="berita" aria-describedby="emailHelp" 
                        placeholder="Masukkan Berita Terbaru" required name="berita" value="<?= $data['berita'] ?>">
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

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>