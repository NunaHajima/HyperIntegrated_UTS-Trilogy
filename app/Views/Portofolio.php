<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<section class="news"data-aos="slide-up" data-aos-once="true">
<div class="news" data-aos="slide-up" data-aos-once="true">
    <div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
        <br><br><br><br>
        <h2 class="fw-bolder">Portofolio</h2>
    </div>

    <!-- Loop melalui data berita yang diambil dari controller -->    
    <?php foreach ($portofolio as $portofolioItem): ?>
        <article class="news-item" data-aos="slide-up" data-aos-once="true">
        <img class="card-img-top fixed-img-size" src="/photos/<?php echo $portofolioItem['photo']; ?>" alt="..." />
            <div class="news-content">
                <h2><?= esc($portofolioItem['judul']) ?></h2>
                <p><?= esc(substr($portofolioItem['deskripsi'], 0, 100)) ?>...</p>
                <a href="/portofolio/detail/<?= esc($portofolioItem['id']) ?>">(Learn more about this portofolio)</a>
            </div>
        </article>
    <?php endforeach; ?>
    <div class="pagination">
        <?= $pager->links('portofolio', 'custom_pagination2') ?>
    </div>
</div>
</section>
<?= $this->endSection() ?>