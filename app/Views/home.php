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
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active bg-cover carousel-item-custom" style="background-image: url('template/assets/contoh1.jpg'); background-size: cover;">
                                    <div class="overlay"></div>
                                    <h1 class="carousel-text animate-zoomin">CV. Hyper Integrated Technology</h1>
                                </div>
                                <div class="carousel-item bg-cover carousel-item-custom" style="background-image: url('template/assets/contoh2.jpg'); background-size: cover;">
                                    <div class="overlay"></div>
                                    <h1 class="carousel-text animate-zoomin">CV. Hyper Integrated Technology</h1>
                                </div>
                                <div class="carousel-item bg-cover carousel-item-custom" style="background-image: url('template/assets/company4.jpg'); background-size: cover;">
                                    <div class="overlay"></div>
                                    <h1 class="carousel-text animate-zoomin">CV. Hyper Integrated Technology</h1>
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
        <!-- Section-->
        <div class="text-center mb-1" data-aos="slide-up" data-aos-once="true">
            <br>
            <h2 class="fw-bolder">News</h2>
        </div>
        <section class="py-2" data-aos="slide-up" data-aos-once="true">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-55">
                            <!-- Product image-->
                            <img class="card-img-top" src="template/assets/contoh1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-55">
                            <!-- Product image-->
                            <img class="card-img-top" src="template/assets/contoh1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5" >
                        <div class="card h-55">
                            <!-- Product image-->
                            <img class="card-img-top" src="template/assets/contoh1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5" >
                        <div class="card h-55">
                            <!-- Product image-->
                            <img class="card-img-top" src="template/assets/contoh1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5" >
                        <div class="card h-55">
                            <!-- Product image-->
                            <img class="card-img-top" src="template/assets/contoh1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5" >
                        <div class="card h-55">
                            <!-- Product image-->
                            <img class="card-img-top" src="template/assets/contoh1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ulangi untuk elemen kolom lainnya dengan data-aos-once="true" -->
                </div>
            </div>
        </section>
        <section class="testimoni">
        <div class="text-center mb-0"data-aos="slide-up" data-aos-once="true">
            <h2 class="fw-bolder">Testimoni</h2>
        </div>
        <br>
        <div class="testimoni-container" data-aos="slide-up" data-aos-once="true">
            <!-- Testimoni 1 -->
            <div class="testimoni-box">
                <img src="template/assets/contoh1.jpg" alt="Web System Image">
                <div class="testimoni-content">
                    <h2>Web-based System</h2>
                    <p>Need to upgrade again</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!-- 4 dari 5 bintang -->
                    </div>
                </div>
            </div>
            <div class="testimoni-box">
                <img src="template/assets/contoh1.jpg" alt="Web System Image">
                <div class="testimoni-content">
                    <h2>Web-based System</h2>
                    <p>Need to upgrade again</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!-- 4 dari 5 bintang -->
                    </div>
                </div>
            </div>
            <div class="testimoni-box">
                <img src="template/assets/contoh1.jpg" alt="Web System Image">
                <div class="testimoni-content">
                    <h2>Web-based System</h2>
                    <p>Need to upgrade again</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!-- 4 dari 5 bintang -->
                    </div>
                </div>
            </div>
            <div class="testimoni-box">
                <img src="template/assets/contoh1.jpg" alt="Web System Image">
                <div class="testimoni-content">
                    <h2>Web-based System</h2>
                    <p>Need to upgrade again</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!-- 4 dari 5 bintang -->
                    </div>
                </div>
            </div>
            <!-- Testimoni lainnya -->
        </div>
        <br>
        <br>
    </section>
    </body>
</html>
<?= $this->endSection() ?>