<head>
    <title>DeaSoft - Serviço de Gerenciamento de Salão de Beleza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Utils -->

    {$this->Html->script(array(
      '/js/toast/src/main/javascript/jquery.toastmessage.js', 
      '/login/login.js'
    ))}


    {$this->Html->css(array(
      "/login/login.css"
    ))}


</head>
<body>
    {$this->fetch('content')}
</body>


