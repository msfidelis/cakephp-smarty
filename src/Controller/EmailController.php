<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controller;
use App\Controller\AppController;
use Cake\Network\Response; 
use Cake\Network\Request;
use Cake\Mailer\Email;
/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    15/04/2016
 */
class EmailController extends AppController{
  
  var $templateDefault;
  var $templateFormat = 'both';
  var $supportMail = 'msfidelis@gmail.com';
  
public function __construct(Request $request = null, Response $response = null, $name = null, $eventManager = null, $components = null) {
  parent::__construct($request, $response, $name, $eventManager, $components);
}


  public function sendEmailContact($data) {
    $email = new Email();
    $email->viewVars(['data' => $data]);
    $email->template('contact', 'contact');
    $email->emailFormat($this->templateFormat);
    $email->to($this->supportMail);
  }
}
