<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    31/05/2016
 */
trait requestTrait {

  protected function getUrl() {
    return $this->getValue("url");
  }

  protected function getBool($key) {
    return ((bool) $this->getValue($key)) ? 1 : 0;
  }

  protected function getString($key, $lenght = 0) {
    $value = $this->getValue($key, $lenght);
    if (!is_string($value)) {
      $value = null;
    }
    return strtoupper($value);
  }

  protected function getEmail($key, $lenght = 0) {
    $value = $this->getValue($key, $lenght);
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
      $value = null;
    }
    return strtolower($value);
  }

  protected function getCEP($key) {
    $value = null;
    $metadata = $this->getValue($key, 9);
    if (preg_match("/^(\d{5})-(\d{3})$/", $metadata)) {
      $value = preg_replace("/(-)/s", null, $metadata);
    }
    return $value;
  }

  protected function getIE($key) {
    $value = null;
    $metadata = $this->getValue($key, 16);
    if (!empty($metadata)) {
      $value = $metadata;
    }
    return $value;
  }

  protected function getCNPJ($key) {
    $value = null;
    $metadata = $this->getValue($key, 18);
    if (preg_match("/^(\d{2})\.(\d{3})\.(\d{3})\/(\d{4})-(\d{2})$/", $metadata)) {
      $value = preg_replace("/(\.)|(\/)|(-)/s", null, $metadata);
    }
    return $value;
  }

  protected function getCPF($key) {
    $value = null;
    $metadata = $this->getValue($key, 14);
    if (preg_match("/^(\d{3})\.(\d{3})\.(\d{3})-(\d{2})$/", $metadata)) {
      $value = preg_replace("/(\.)|(-)/s", null, $metadata);
    }
    return $value;
  }

  protected function getCNPJCPF($key) {
    $value = null;
    if ($data = $this->getCNPJ($key)) {
      $value = $data;
    } else if ($data = $this->getCPF($key)) {
      $value = $data;
    }
    return $value;
  }

  protected function getInt($key, $lenght = 0) {
    $value = (int) $this->getValue($key, $lenght);
    if (!is_integer($value)) {
      $value = null;
    }
    return $value;
  }

  protected function getNumeric($key, $lenght = 0) {
    $value = 0.00;
    $metadata = $this->getValue($key, $lenght);
    $ponto = str_replace(".", null, $metadata);
    $virgula = str_replace(",", ".", $ponto);
    if ((bool) $virgula) {
      $value = $virgula;
    }
    return $value;
  }

  protected function getNumericVirgula($key, $lenght = 0) {
    $value = 0.00;
    $metadata = $this->getValue($key, $lenght);
    $ponto = str_replace(",", ".", $metadata);
    if ((bool) $ponto) {
      $value = $ponto;
    }
    return $value;
  }

  protected function getDateUnixtime($key) {
    $value = "";
    $metadata = $this->getValue($key, 10);
    if (!empty($metadata)) {
      $date = preg_replace("/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/", "$3-$2-$1T00:00:00", $metadata);
      if ($time = strtotime($date)) {
        $value = $time;
      }
    }
    return $value;
  }

  protected function getDateFormat($key) {
    $value = "";
    $metadata = $this->getValue($key, 10);
    if (!empty($metadata) && preg_match("/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/", $metadata)) {
      $date = preg_replace("/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/", "$3-$2-$1T00:00:00", $metadata);
      if ($time = strtotime($date)) {
        $value = $date;
      }
    }
    return $value;
  }

  protected function getDatePlusDays($key) {
    $value = "";
    $metadata = $this->getValue($key, 10);
    if (!empty($metadata)) {
      $value = date('Y-m-d', strtotime(' + ' . $metadata . ' days'));
    }
    return $value;
  }

  protected function getHourFormat($key) {
    $value = "";
    $metadata = $this->getValue($key, 8);
    if (!empty($metadata)) {
      if (preg_match("/^(\d{2}):(\d{2}):(\d{2})$/", $metadata)) {
        $value = $metadata;
      }
    }
    return $value;
  }

  protected function getPhone($key, $lenght = 0) {
    $datavalue = $this->getValue($key);
    $datareplace = preg_replace("/[^0-9]/s", "", $datavalue);
    return (strlen($datareplace) <= $lenght) ? $datareplace : null;
  }

  protected function getArray($key, $lenght = 0) {
    $value = array();
    $metadata = $this->getValue($key, $lenght);
    if (is_array($metadata)) {
      $value = $metadata;
    }
    return $value;
  }

  protected function getValue($key, $lenght = 0) {
    $value = "";
    if (isset($this->data[$key])) {
      $strlen = (is_array($this->data[$key])) ? count($this->data[$key]) : strlen($this->data[$key]);
      if (!(bool) $lenght || ((int) $strlen <= (int) $lenght)) {
        $value = $this->data[$key];
      }
    }
    return $value;
  }

}
