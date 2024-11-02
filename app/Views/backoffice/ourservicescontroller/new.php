<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Tambahkan Jenis Layanan</h5>

            <form action="/servicescontroller" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" 
                        placeholder="Masukkan Judul " required name="judul">
                </div>
                <br>
                <div class="form-group">
                    <label for="berita">Berita Terbaru</label>
                    <textarea class="form-control" id="berita" rows="5" placeholder="Masukkan Deskripsi Terbaru" required name="berita"></textarea>
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