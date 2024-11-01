<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Tambahkan Berita Baru</h5>

            <form action="/newscontroller" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" 
                        placeholder="Masukkan Judul Berita Terbaru" required name="judul">
                </div>
                <br>
                <div class="form-group">
                    <label for="berita">Berita Terbaru</label>
                    <textarea class="form-control" id="berita" rows="5" placeholder="Masukkan Berita Terbaru" required name="berita"></textarea>
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