<?php

/**
 * Declaração de variáveis.
 */
$res = '';
$size = 4;
$upper = false;
$numbers = false;
$symbols = false;
$tipos = 1;
$count = 0;
$part = '';

if (! empty($_POST)){ 
  
  /**
   * Cria os arrays com o conteúdo de cada tipo.
   */
  $arrayLower = "abcdefghijklmnopqrstuvyxwz";
  $arrayUpper = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
  $arrayNumbers = "0123456789";
  $arraySimbols = "!@#$%&*()_+=";
  
  /**
   * Pega o tamanho da senha.
   */
  $size = $_POST['rangePassword'];
  
  /**
   * Seta letras minúsculas com verdadeiro.
   */
  $lower = true;
    
  /**
   * Busca valor das letras maiúsculas (true / false).
   */
  if (! empty($_POST['chkUpper'])){
    $upper = ($_POST['chkUpper']);
    if ($upper == true){
      $tipos += 1;
    }
  }

  /**
   * Busca valor dos números (true / false).
   */
  if (! empty($_POST['chkNumbers'])){
    $numbers = ($_POST['chkNumbers']);
    if ($numbers == true){
      $tipos += 1;
    }
  }

  /**
   * Busca valor dos símbolos (true / false).
   */
  if (! empty($_POST['chkSymbols'])){
    $symbols = ($_POST['chkSymbols']);
    if ($symbols == true){
      $tipos += 1;
    }
  }
    
  /**
   * Verifica a quantidade de cada tipo.
   */
  $count = $size / $tipos;
  /**
   * Verifica a sobra da divisão da quantidade de cada tipo.
   */
  $mode = $size % $tipos;
    
  /**
   * Por padrão sempre gera com minúsculas, adiciona a quantidade da sobra.
   */
  if ($lower) {
    $part = substr(str_shuffle($arrayLower), 0, $count + $mode);
    $password = $part;
  }
    
  /**
   * Caso $upper = true adiciona letras maiúsculas.
   */
  if ($upper) {
    $part = substr(str_shuffle($arrayUpper), 0, $count);
    $password .= $part;
  }
    
  /**
   * Caso $numbers = true adiciona números.
   */
  if ($numbers) {
    $part = substr(str_shuffle($arrayNumbers), 0, $count);
    $password .= $part;
  }
    
  /**
   * Caso $symbols = true adiciona símbolos.
   */
  if ($symbols) {
    $part = substr(str_shuffle($arraySimbols), 0, $count);
    $password .= $part;
  }

  /**
   * Mistura novamente os itens do array em $res e retorna via post, cortando no 
   * tamanho definido em size.
   */
     $res = substr(str_shuffle($password), 0, $size);
    return $res;
      
  }
    
?>