<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<section class="container my-5">
    <h2 class="text-center"><?= esc($item['judul']) ?></h2>
    <div class="text-center my-4">
        <img src="/photos/<?= esc($item['photo']) ?>" alt="News Image" class="img-fluid custom-img" style="max-width: 100%; height: auto; border-radius: 8px;">
    </div>
    <p><?= esc($item['berita']) ?></p>
</section>
<?= $this->endSection() ?>
