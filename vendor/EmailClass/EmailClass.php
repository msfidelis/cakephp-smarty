<?php

/**
 * Classe responsável por gerenciar os e-mails do site.
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    15/04/2016
 */

namespace EmailClass;

use Cake\Mailer\Email;
use PHPMailer;

class EmailClass {

  var $defaultSubject = "Antrosoft - Formulário de Contato";
  var $smtpHost = "email-ssl.com.br"; // Endereço do servidor SMTP
  var $smtpAuth = true; //Autenticação SMTP
  var $smtpUsername = 'noreply@antrosofttecnologia.com.br'; // Usuário do servidor SMTP
  var $smtpPassword = 'Iep8shaeyohro1beelieR1wah5aica'; // Senha da caixa postal utilizada
  var $nameSender = 'Antrosoft Tecnologia'; //Titulo do e-mail
  var $emailTo = 'msfidelis01@gmail.com'; //Defina aqui o e-mail destinatário
  var $smtpPort = 587;

  public function sendEmailContact($html) {

    new PHPMailer();

    $mail = new PHPMailer();
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->SMTPAuth = $this->smtpAuth;
    $mail->Port = 587;
    $mail->Host = $this->smtpHost;
    $mail->Username = $this->smtpUsername;
    $mail->Password = $this->smtpPassword;
    $mail->smtpConnect(
        array(
          "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
          )
        )
    );
    $mail->SMTPDebug = 2;
    $this->constructMail($mail, $html);
  }

  private function constructMail($mail, $html) {
    $mail->setFrom($this->smtpUsername, $this->nameSender);
    $mail->addAddress($this->emailTo, 'Matheus Fidelis');
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $this->defaultSubject;
    $mail->Body = $html;
    $this->send($mail);
  }

  private function send($mail) {
    if (!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }

}
