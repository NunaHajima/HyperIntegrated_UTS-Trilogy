<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<section class="news"data-aos="slide-up" data-aos-once="true">
<div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <br><br><br><br>
            <h2 class="fw-bolder">About Us</h2>
        </div>
        <div class="text-start mb-1" data-aos="slide-up" data-aos-once="true">
            <h2 class="custom-font-size2 font-size: 20px;">Meet Our Team</h2>
        </div>
        <?php foreach ($about as $aboutItem): ?>
            <article class="news-item" data-aos="slide-up" data-aos-once="true">
            <img class="card-img-top fixed-img-size2" src="/photos/<?php echo $aboutItem['photo']; ?>" alt="..." />
                <div class="news-content">
                    <h2><?= esc($aboutItem['name']) ?></h2>
                    <p><?= esc(substr($aboutItem['job'], 0, 100)) ?></p>
                </div>
            </article>
        <?php endforeach; ?>
        <div class="text-start mb-1" data-aos="slide-up" data-aos-once="true">
            <h2 class="custom-font-size2 font-size: 20px">Contact Us :</h2>
        </div>
        <div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <h2 class="custom-font-size3">CV. Hyper Integrated Technology</h2>
            <h2 class="custom-font-size3">Jl. Let. Jen. TB. Simatupang Kav.10 Jakarta Selatan, Indonesia</h2>
            <h2 class="custom-font-size3">Contact Person : Handy 08562900777</h2>
        </div>
        <br>
        </section>
<?= $this->endSection() ?>