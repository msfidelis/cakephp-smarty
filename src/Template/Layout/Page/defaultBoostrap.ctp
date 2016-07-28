<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Stylish Portfolio - Start Bootstrap Theme</title>

        <!-- Bootstrap Core CSS -->
        <?=
        $this->Html->css(array(
          '/style/css/bootstrap.min.css',
          '/style/css/stylish-portfolio.css',
          '/style/font-awesome/css/font-awesome.min.css'
        ));
        ?>
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    </head>

    <body>
        <?= $this->fetch('content'); ?>
    </body> 
    <!-- JavaScript -->
    <?=
    $this->Html->script(array(
      '/style/js/jquery.js',
      '/style/js/bootstrap.min.js',
      '/style/js/bootstrap.js',
      '/style/js/custom.js'
    ));
    ?>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</html>