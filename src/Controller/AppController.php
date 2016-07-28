<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Database\Type;
use Cake\Event\Event;
use Smarty;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

  public $viewClass = 'App\View\SmartyView';
  public $smarty;

  public function __construct(\Cake\Network\Request $request = null, \Cake\Network\Response $response = null, $name = null, $eventManager = null, $components = null) {
    parent::__construct($request, $response, $name, $eventManager, $components);

    $this->smarty = new Smarty();
    $this->smarty->cache_lifetime = 120;
    $this->smarty->caching = false;
    $this->smarty->setTemplateDir([APP . 'Template' . DS]);

    //Data no padrão correto
    Type::build('date')->setLocaleFormat('yyyy-MM-dd');
  }

  /**
   * Initialization hook method.
   *
   * Use this method to add common initialization code like loading components.
   *
   * e.g. `$this->loadComponent('Security');`
   *
   * @return void
   */
  public function initialize() {
    parent::initialize();

    $this->loadComponent('RequestHandler');
    $this->loadComponent('Flash');

    $this->loadComponent('Auth', array(
      'loginRedirect' => [
        'controller' => 'dashboard',
        'action' => 'index'
      ],
      'logoutRedirect' => [
        'controller' => 'Homepage',
        'action' => 'index',
        'home'
    ]));
  }

  public function setAlert($type, $msg) {
    $message = array(
      'msg' => $msg,
      'type' => $type
    );
    $_SESSION['message'] = $message;
  }

  /**
   * Before render callback.
   *
   * @param \Cake\Event\Event $event The beforeRender event.
   * @return void
   */
  public function beforeRender(Event $event) {
    if (!array_key_exists('_serialize', $this->viewVars) &&
        in_array($this->response->type(), ['application/json', 'application/xml'])
    ) {
      $this->set('_serialize', true);
    }

    if (isset($_SESSION['message'])) {
      $this->set('alertMessage', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  }

}
