<?= $this->extend('backoffice/layoutbase/base') ?>
<?= $this->section('content') ?>
<div class="container mt-0">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-4 text-center" style="font-weight: bold;">Portofolio</h2>
            <!-- Table -->
            <table class="table table-hover table-striped table-bordered text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 4px; overflow: hidden;">
                <thead>
                    <tr>
                        <th scope="col" style="font-size: 1em;">No.</th>
                        <th scope="col" style="font-size: 1em;">Title</th>
                        <th scope="col" style="font-size: 1em;">Description</th>
                        <th scope="col" style="font-size: 1em;">Photo</th>
                        <th scope="col" style="font-size: 1em;">Photo2</th>
                        <th scope="col" style="font-size: 1em;">Photo3</th>
                        <th scope="col" style="font-size: 1em;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($portofoliocontroller as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= implode(' ', array_slice(explode(' ', $item['judul']), 0, 10)) . (str_word_count($item['judul']) > 10 ? '...' : '') ?></td>
                        <td><?= implode(' ', array_slice(explode(' ', $item['deskripsi']), 0, 30)) . (str_word_count($item['deskripsi']) > 10 ? '...' : '') ?></td>
                        <td><img src="/photos/<?= $item['photo'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);"></td>
                        <td><img src="/photos2/<?= $item['photo2'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);"></td>
                        <td><img src="/photos3/<?= $item['photo3'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);"></td>
                        <td class="text-center align-middle" style="height: 100px;">
                            <div class="d-flex justify-content-center align-items-center" style="gap: 4px;">
                                <a href="/portofoliocontroller/<?= $item['id'] ?>/edit" 
                                class="btn btn-info btn-sm text-white d-flex align-items-center justify-content-center" 
                                style="height: 36px; width: 36px; transition: background-color 0.3s;" 
                                title="Edit Berita">
                                    <i class='bx bx-pencil' style="font-size: 1.2em;"></i>
                                </a>
                                <form action="/portofoliocontroller/<?= $item['id'] ?>" method="POST" 
                                    onsubmit="return confirm('Apakah Anda Yakin ?')" 
                                    class="d-inline" style="margin: 0;">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger btn-sm text-white d-flex align-items-center justify-content-center" 
                                            type="submit" 
                                            title="Hapus Berita" 
                                            style="height: 36px; width: 36px; transition: background-color 0.3s;">
                                        <i class='bx bx-trash' style="font-size: 1.2em;"></i>
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
            <?= $pager->links('servicecontroller', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
