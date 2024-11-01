<?= $this->extend('backoffice/layoutbase/baselogin') ?>
<?= $this->section('content') ?>
<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-dark">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-10">
            <div class="card p-5 shadow-lg border-0 rounded" style="width: 500px; max-width: 500px;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4 text-primary">Selamat Datang Admin</h5>

                    <?php if(session()->getFlashData('success')) { ?>
                        <div class="alert alert-success">
                            <?= session()->get('success') ?>
                        </div>
                    <?php } ?>
                    <?php if(session()->getFlashdata('errors')) { ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('errors') ?>
                        </div>
                    <?php } ?>

                    <form action="/login" method="post">
                        <div class="form-group mb-3">
                            <label for="example-email" class="form-label">Email</label>
                            <input type="email" class="form-control shadow-sm px-3 py-2" id="example-email" 
                                   placeholder="Enter email" name="email" value="<?= old('email') ?>" 
                                   style="border-radius: 8px; width: 100%;">
                        </div>
                        <div class="form-group mb-3">
                            <label for="example-password" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-sm px-3 py-2" id="example-password" 
                                   placeholder="Enter password" name="password" 
                                   style="border-radius: 8px; width: 100%;">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3" style="border-radius: 8px;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
