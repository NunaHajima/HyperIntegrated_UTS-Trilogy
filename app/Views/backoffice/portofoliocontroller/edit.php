<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Tambah Portofolio"<?= $data['judul'] ?>"</h5>

            <form action="/portofoliocontroller/<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />

                <div class="form-group">
                    <label for="judul">Judul Portofolio</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" 
                        placeholder="Masukkan Judul Portofolio" required name="judul" value="<?= $data['judul'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Portofolio</label>
                    <textarea class="form-control" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi Portofolio" required name="deskripsi"><?= $data['deskripsi'] ?></textarea>
                </div>
                <br>                
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo">
                </div>
                <div class="form-group">
                    <label for="photo2">Photo2</label>
                    <input type="file" class="form-control" id="photo2" aria-describedby="photoHelp" name="photo2">
                </div>
                <div class="form-group">
                    <label for="photo3">Photo3</label>
                    <input type="file" class="form-control" id="photo3" aria-describedby="photoHelp" name="photo3">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>