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
        echo "Igual a zero";
      }
      elseif ($valor1 > 0)
      {
        echo "Valor Positivo";
      }
      else
      {
        echo "Valor Negativo";
      }
        require_once("../src/View/exercicio4.php");

    }
}