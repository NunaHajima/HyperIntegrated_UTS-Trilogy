<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php if ($pager->hasPreviousPage()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="Next">
                <span aria-hidden="true">First</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Sebelumnya</span>
            </a>
        </li>
        <?php endif ?>
        <?php foreach ($pager->links() as $link): ?>
        <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
            <a class="page-link" href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
        <?php endforeach ?>
        <?php if ($pager->hasNextPage()) : ?>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Selanjutnya</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="Next">
                <span aria-hidden="true">Terakhir</span>
            </a>
        </li>
        <?php endif ?>
    </ul>
</nav>