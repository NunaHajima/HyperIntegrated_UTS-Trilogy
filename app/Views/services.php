<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<section class="news"data-aos="slide-up" data-aos-once="true">
<div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <br><br><br><br>
            <h2 class="fw-bolder">Our Services</h2>
        </div>
        <?php foreach ($service as $serviceItem): ?>
            <article class="news-item" data-aos="slide-up" data-aos-once="true">
                <img src="/photos/<?= esc($serviceItem['photo']) ?>" alt="News Image" style="width: 400px; height: 200px; object-fit: cover;">
                <div class="news-content">
                    <h2><?= esc($serviceItem['judul']) ?></h2>
                    <p><?= esc(substr($serviceItem['service'], 0, 100)) ?>...</p>
                    <a href="/service/detail/<?= esc($serviceItem['id']) ?>">Read more</a>
                </div>
            </article>
        <?php endforeach; ?>
        <br>
        </section>
<?= $this->endSection() ?>