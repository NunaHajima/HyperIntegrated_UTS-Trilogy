<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-2">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-4 text-center">Berita</h2>
            <br>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col ">No.</th>
                        <th scope="col ">Title</th>
                        <th scope="col ">News</th>
                        <th scope="col ">Photo</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($newscontroller as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['berita'] ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" width=100 height=100></td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center" style="gap: 4px;">
                                <!-- Tombol Edit -->
                                <a href="/newscontroller/<?= $item['id'] ?>/edit" 
                                class="btn btn-info text-white d-flex align-items-center justify-content-center mx-1"
                                style="padding: 0; height: 36px; width: 36px; margin: 0; display: flex;">
                                    <i class='bx bx-pencil' style="font-size: 1.2em; margin: auto;"></i>
                                </a>
                                
                                <!-- Tombol Delete -->
                                <form action="/newscontroller/<?= $item['id'] ?>" method="POST" 
                                    onsubmit="return confirm('Apakah Anda Yakin ?')" 
                                    class="d-inline" style="margin: 0;">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white d-flex align-items-center justify-content-center mx-1" 
                                            type="submit" 
                                            style="padding: 0; height: 36px; width: 36px; margin: 0; display: flex;">
                                        <i class='bx bx-trash' style="font-size: 1.2em; margin: auto;"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('newscontroller', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>