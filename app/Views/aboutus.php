<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<section class="news"data-aos="slide-up" data-aos-once="true">
<div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <br><br><br><br>
            <h2 class="fw-bolder">About Us</h2>
        </div>
        <div class="text-start5 mb-1" data-aos="slide-up" data-aos-once="true">
            <h2 class="custom-font-size2 title-padding5">Meet Our Team</h2>
        </div>
        <?php foreach ($about as $aboutItem): ?>
            <article class="news-item5" data-aos="slide-up" data-aos-once="true">
                <img src="/photos/<?php echo $aboutItem['photo']; ?>" alt="Testimoni Image" class="news-image5">
                <div class="news-content5">
                    <div>
                        <h2 class="news-title5"><?= nl2br(esc($aboutItem['name'])) ?></h2>
                    </div>
                    <div>
                        <p class="news-description5"><?= esc(substr($aboutItem['job'], 0, 100)) ?></p>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
        <div class="text-start5 mb-1" data-aos="slide-up" data-aos-once="true">
            <h2 class="custom-font-size2 title-padding5">Contact Us</h2>
        </div>
        <div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <h2 class="custom-font-size3">CV. Hyper Integrated Technology</h2>
            <h2 class="custom-font-size3">Jl. Let. Jen. TB. Simatupang Kav.10 Jakarta Selatan, Indonesia</h2>
            <h2 class="custom-font-size3">Contact Person : Handy 08562900777</h2>
        </div>
        <br>
        </section>
<?= $this->endSection() ?>