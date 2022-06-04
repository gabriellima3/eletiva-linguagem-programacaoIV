<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio5Controller
{
    public static function exibir(){
        require_once("../src/View/exercicio5.php");
    }

    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $valor4 = $_POST['valor4'];
  
        $resultado = (($valor1 + $valor2 + $valor3 + $valor4) / 4);
        echo "Média final: $resultado";
        echo "<br/>";
        if ($resultado >= 7){
          echo "Aprovado";
        }
        else{
          echo "Reprovado";
        }
        require_once("../src/View/exercicio5.php");

    }
}