<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<div class="news" data-aos="slide-up" data-aos-once="true">
    <div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
        <br><br><br><br>
        <h2 class="fw-bolder">News</h2>
    </div>

    <!-- Loop melalui data berita yang diambil dari controller -->    
    <?php foreach ($news as $newsItem): ?>
        <article class="news-item" data-aos="slide-up" data-aos-once="true">
            <img src="/photos/<?= esc($newsItem['photo']) ?>" alt="News Image" style="width: 400px; height: 200px; object-fit: cover;">
            <div class="news-content">
                <h2><?= esc($newsItem['judul']) ?></h2>
                <p><?= esc(substr($newsItem['berita'], 0, 100)) ?>...</p>
                <a href="/news/detail/<?= esc($newsItem['id']) ?>">Read more</a>
            </div>
        </article>
    <?php endforeach; ?>
    <div class="pagination">
        <?= $pager->links('news', 'custom_pagination2') ?>
    </div>
</div>

<?= $this->endSection() ?>
