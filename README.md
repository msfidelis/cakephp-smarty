# CakePHPSmarty
My Personal CakePHP Core 

# Informações & Componentes

* CakePHP 3 : 
* Smarty 3.1.28 : http://www.smarty.net/
* Material Design Bootstrap Theme : https://getmdl.io/
* Admin Dashboard Flat : http://tui2tone.github.io/flat-admin-bootstrap-templates/html/
* PHPUnit
* CodeSniffer
* PHP Mailer
* Google Charts
* Google Maps


#Instalação dos Exemplos

* Clone a Source

```
# git clone https://github.com/msfidelis/CakePHPSmarty
# chmod 777 CakePHPSmarty -R
```


* Crie um banco de dados e restaure o banco de exemplo
``` 
# cd CakePHPSmarty/db 
# mysql -u root -p -e "CREATE DATABASE example;"
# mysql -u root -p example < example.sql --verbose 

```

Edite o arquivo CakePHPSmarty/config/app.php e modifique os Datasources

```
  'Datasources' => [
    'default' => [
      'className' => 'Cake\Database\Connection',
      'driver' => 'Cake\Database\Driver\Mysql',
      'persistent' => false,
      'host' => 'localhost',
      //'port' => 'non_standard_port_number',
      'username' => 'root',
      'password' => '',
      'database' => 'example',
      'encoding' => 'utf8',
      'timezone' => 'UTC',
      'flags' => [],
      'cacheMetadata' => true,
      'log' => false,
```

* Crie um Virtualhost para o projeto 

```
      <VirtualHost *:80>
              ServerName teste.localhost.com
              ServerAlias www.teste.localhost.com
              DocumentRoot /var/www/html/CakePHPSmarty/
              <Directory /var/www/html/CakePHPSmarty//>
                      Options Indexes FollowSymLinks
                      #MultiViews
                      AllowOverride All
                      Order allow,deny
                      allow from all
              </Directory>
              ErrorLog /teste.localhost.com.error.log
              CustomLog /teste.localhost.com.access.log combined
      </VirtualHost>

```
Obs:

[Veja também: Vhost-Creator - Script de Automatização de Criação de Vhosts](https://github.com/msfidelis/VHostCreator)
```
#  vhost-creator -h teste.localhost.com -d /var/www/html/CakePHPSmarty/
```

* Habilite o Rewrite do Apache

```
# a2enmod rewrite
```

# Acessando os Exemplos

* Acesse o projeto pelo vhost criado 

![Home](http://i.imgur.com/SxFbo80.png)

* Tela de Login 

Usuario de Teste: admin@admin.com
Senha de teste: admin

![Login](http://i.imgur.com/FWkyf4c.png)

*Dashboard
![Dash](http://i.imgur.com/Jb0O22X.png)
![Dash](http://i.imgur.com/E6pjrb6.png)

