<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<section class="news"data-aos="slide-up" data-aos-once="true">
<div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <br><br><br><br>
            <h2 class="fw-bolder">Our Services</h2>
        </div>
            <article class="news-item"data-aos="slide-up" data-aos-once="true">
                <img src="template/assets/contoh1.jpg" alt="News Image 1">
                <div class="news-content">
                    <h2>News Title 1</h2>
                    <p>The news provides us with an up-to-date understanding of local, national, and international events...</p>
                    <a href="/services2">(Learn more about the web-based system)</a>
                </div>
            </article>

            <article class="news-item"data-aos="slide-up" data-aos-once="true">
                <img src="template/assets/contoh1.jpg" alt="News Image 2">
                <div class="news-content">
                    <h2>News Title 2</h2>
                    <p>Staying abreast of current events fosters a sense of global awareness...</p>
                    <a href="/services2">(Learn more about the Mobile Application System)</a>
                </div>
            </article>
            <br>
            <br>
        </section>
<?= $this->endSection() ?>