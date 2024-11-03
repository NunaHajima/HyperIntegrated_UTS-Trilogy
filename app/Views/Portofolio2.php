<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>

<section class="container my-5">
    <br><br><br>
    <h2 class="text-center"><?= esc($portofolioItem['judul']) ?></h2>

    <!-- Bootstrap Carousel Start -->
    <div id="portfolioCarousel" class="carousel slide my-4" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img src="/photos/<?= esc($portofolioItem['photo']) ?>" alt="Image 1" class="img-fluid w-100" style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="/photos2/<?= esc($portofolioItem['photo2']) ?>" alt="Image 2" class="img-fluid w-100" style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="/photos3/<?= esc($portofolioItem['photo3']) ?>" alt="Image 3" class="img-fluid w-100" style="object-fit: cover;">
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Bootstrap Carousel End -->
    <p><?= esc($portofolioItem['deskripsi']) ?></p>
    <a href="https://wa.me/628562900777" target="_blank">
        <img src="/template/assets/contactus.png" alt="News Image" class="img-fluid custom-img2">
    </a>
</section>

<?= $this->endSection() ?>
