<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Tambahkan Portofolio</h5>

            <form action="/portofoliocontroller" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul">Judul Portofolio</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" 
                        placeholder="Masukkan Judul " required name="judul">
                </div>
                <br>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Portofolio</label>
                    <textarea class="form-control" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi" required name="deskripsi"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" id="photo" aria-describedby="photoHelp" name="photo">
                </div>
                <br>
                <div class="form-group">
                    <label for="photo2">Photo2</label>
                    <input type="file" class="form-control" id="photo2" aria-describedby="photoHelp" name="photo2">
                </div>
                <br>
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