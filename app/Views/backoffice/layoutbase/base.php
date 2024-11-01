<html>
    <head>
        <?= $this->include('backoffice/layoutbase/head') ?>
        <?= $this->include('backoffice/layoutbase/navbar') ?>
    </head>
    <body>
        <?= $this->renderSection('content') ?>
    </body>    
        <?= $this->include('backoffice/layoutbase/footer') ?>
        <?= $this->include('backoffice/layoutbase/scripts') ?>
</html>