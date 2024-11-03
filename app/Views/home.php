<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <!-- Header-->
        <header class="bg-light py-0">
            <div class="container-fluid w-100 px-0">
                <div class="row gx-0 justify-content-center">
                    <div class="container-fluid p-0 w-100">
                        <!-- Carousel -->
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-inner">
                                <?php $isActive = true; ?>
                                <?php foreach ($sliders as $slider): ?>
                                    <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?> bg-cover carousel-item-custom"
                                        style="background-image: url('/photos/<?php echo $slider['photo']; ?>'); background-size: cover;">
                                        <div class="overlay"></div>
                                        <h1 class="carousel-text animate-zoomin">CV. Hyper Integrated Technology</h1>
                                    </div>
                                    <?php $isActive = false; ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- Carousel controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Section-->
        <div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <br>
            <h2 class="fw-bolder">News</h2>
        </div>

        <section class="py-2" data-aos="slide-up" data-aos-once="true">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                    <?php foreach ($news as $newsItem): ?>
                        <div class="col mb-5">
                            <!-- Wrap card in a link -->
                            <a href="/news/detail/<?php echo $newsItem['id']; ?>" style="text-decoration: none; color: inherit;">
                                <div class="card h-55">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="/photos/<?php echo $newsItem['photo']; ?>" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- News title-->
                                            <h5><?php echo $newsItem['judul']; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section class="testimoni">
            <div class="text-center mb-0" data-aos="slide-up" data-aos-once="true">
                <h2 class="fw-bolder">Testimoni</h2>
            </div>
            <br>
            <div class="testimoni-container" data-aos="slide-up" data-aos-once="true">
                <?php foreach ($testimonis as $testimoni): ?>
                    <div class="testimoni-box">
                        <img src="/photos/<?php echo $testimoni['photo']; ?>" alt="Testimoni Image">
                        <div class="testimoni-content">
                            <h2 style="font-size: 18px;" class="fw-bolder"><?php echo $testimoni['name']; ?></h2>
                            <p style="font-size: 15px;"><?php echo $testimoni['desc']; ?></p>
                            <div class="rating">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <i class="<?php echo $i <= $testimoni['rating'] ? 'fas' : 'far'; ?> fa-star"></i>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <br><br>
        </section>
    </body>
</html>
<?= $this->endSection() ?>