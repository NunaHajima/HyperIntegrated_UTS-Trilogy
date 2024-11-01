<html>
    <head>
        <?= $this->include('layout/head') ?>
        <?= $this->include('layout/navbar') ?>
    </head>
    <body>
    <?= $this->renderSection('content') ?>    
    </body>
    <?= $this->include('layout/footer') ?>
    <?= $this->include('layout/scripts') ?>
</html>