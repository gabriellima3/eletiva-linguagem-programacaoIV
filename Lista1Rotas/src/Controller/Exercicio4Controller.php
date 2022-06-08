<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio4Controller
{
    public static function exibir(){
        require_once("../src/View/exercicio4.php");
    }

    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
      if ($valor1 == 0)
      {
        $resultado = "Igual a zero";
      }
      elseif ($valor1 > 0)
      {
        $resultado = "Valor Positivo";
      }
      else
      {
        $resultado = "Valor Negativo";
      }
        require_once("../src/View/exercicio4.php");

    }
}