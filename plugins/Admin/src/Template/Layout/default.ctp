<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!-- CSS/BOOTSTRAP -->
        <?= $this->Html->css('bootstrap-theme.css') ?>
        <?= $this->Html->css('bootstrap-theme.min.css') ?>
        <?= $this->Html->css('bootstrap.css') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>

        <!-- JS/BOOTSTRAP -->
        <?= $this->Html->script('jquery-2.2.2.min.js') ?>
        <?= $this->Html->script('bootstrap.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>

        <title>
            Administração
        </title>
    </head>
    <body>
        
            <?php //echo $this->element('Navbar/default') ?>
        
        <section>
            <div class="container-fluid">
                <?php echo $this->fetch('content'); ?>
            </div>
        </section>
    </body>

</html>