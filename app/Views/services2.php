<?= $this->extend('layout/base') ?>
<?= $this->section('content') ?>
<section class="container my-5">
        <h2 class="text-center">News Title</h2>
        <div class="text-center my-4">
        <header class="bg-light py-0">
            <div class="container-fluid w-100 px-0">
                <div class="row gx-0 justify-content-center">
                    <div class="container-fluid p-0 w-100">
                        <!-- Carousel -->
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active bg-cover carousel-item-custom" style="background-image: url('template/assets/contoh1.jpg'); background-size: cover;">
                                </div>
                                <div class="carousel-item bg-cover carousel-item-custom" style="background-image: url('template/assets/contoh2.jpg'); background-size: cover;">
                                </div>
                                <div class="carousel-item bg-cover carousel-item-custom" style="background-image: url('template/assets/company4.jpg'); background-size: cover;">
                                </div>
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
        </div>
        <p>At Hyper Integrated, we provide innovative web-based solutions designed for flexibility and efficiency. Our systems require no software installation, allowing users to access the latest versions without the hassle of constant updates. With support for multiple users, platforms, and browsers, our solutions offer seamless accessibility across desktops, laptops, and mobile devices. Whether you're at the office or working remotely, employees can stay connected and productive from anywhere with an internet connection. Let's discuss how our tailored web systems can enhance your business operations and streamline your digital experience.</p>
        <br>
        <a href="https://wa.me/628562900777" target="_blank">
            <img src="template/assets/contactus.png" alt="News Image" class="img-fluid custom-img2">
        </a>
    </section>
<?= $this->endSection() ?>