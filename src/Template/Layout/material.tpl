<!DOCTYPE html>
<html>
    <head>
        {$this->Html->charset()}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            {$cakeDescription}
            {$this->fetch('title')}
        </title>
        {$this->Html->meta('icon')}

        {$this->Html->css(array(
          '/material/css/material.min.css',
          '/material/css/styles.css',
          '/css/jquery-ui.css',
          '/js/toast/src/main/resources/css/jquery.toastmessage.css'
        ))}



        {$this->Html->script(array(
          '/js/jquery.min.js',
          '/js/bootstrap.min.js',
          '/js/jquery-ui.js',
          '/js/masks.js',
          '/js/toast/src/main/javascript/jquery.toastmessage.js'
        ))}


    </head>
    <body


        {$this->fetch('content')}


</body>