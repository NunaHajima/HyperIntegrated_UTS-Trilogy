<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>

<section class="container my-5">
    <br><br><br>
    <h2 class="text-center"><?= esc($serviceItem['judul']) ?></h2>
    <div class="text-center my-4">
        <img src="/photos/<?= esc($serviceItem['photo']) ?>" alt="News Image" class="img-fluid w-100" style="object-fit: cover;">
    </div>
    <p><?= esc($serviceItem['service']) ?></p>
    <a href="https://wa.me/628562900777" target="_blank">
        <img src="/template/assets/contactus.png" alt="News Image" class="img-fluid custom-img2">
    </a>
</section>

<?= $this->endSection() ?>
