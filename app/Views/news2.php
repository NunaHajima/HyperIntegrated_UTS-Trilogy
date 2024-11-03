<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>

<section class="container my-5">
    <br><br><br><br>
    <h2 class="text-center"><?= esc($newsItem['judul']) ?></h2>
    <div class="text-center my-4">
        <img src="/photos/<?= esc($newsItem['photo']) ?>" alt="News Image" class="img-fluid w-100" style="object-fit: cover;">
    </div>
    <p><?= esc($newsItem['berita']) ?></p>
</section>

<?= $this->endSection() ?>
