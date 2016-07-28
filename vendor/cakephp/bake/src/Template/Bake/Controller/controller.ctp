<%

/**
 * Controller bake template file
 *
 * Allows templating of Controllers generated from bake.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$defaultModel = $name;
%>
<?php namespace <%= $namespace %>\Controller<%= $prefix %>;

use <%= $namespace %>\Controller\AppController;

/**
* @author  Matheus Scarpato Fidelis
* @email   msfidelis01@gmail.com
* @date    16/05/2016
*/
class <%= $name %>Controller extends AppController {

var $statCriacaoDefaul = 1;
var $msgSucess = "Registro salvo com sucesso!";
var $msgError = "Erro ao salvar o registro";
<%
echo $this->Bake->arrayProperty('helpers', $helpers, ['indent' => false]);
echo $this->Bake->arrayProperty('components', $components, ['indent' => true]);
foreach ($actions as $action) {
  echo $this->element('Controller/' . $action);
}
%>
}
