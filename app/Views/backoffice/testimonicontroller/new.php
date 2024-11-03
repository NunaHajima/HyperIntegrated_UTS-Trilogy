<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Tambahkan Testimoni</h5>

            <form action="/testimonicontroller" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                        placeholder="Masukkan Nama " required name="name">
                </div>
                <br>
                <div class="form-group">
                    <label for="desc">Deskripsi Testimoni</label>
                    <textarea class="form-control" id="desc" rows="5" placeholder="Masukkan Deskripsi Testimoni" required name="desc"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" aria-describedby="emailHelp" 
                        placeholder="Rating " required name="rating">
                </div>
                <br>
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