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
  
        $mediaFinal = (($valor1 + $valor2 + $valor3 + $valor4) / 4);
        $respostaMedia = "Média final: $mediaFinal";
        echo "<br/>";
        if ($mediaFinal >= 7){
          $resultado = "Aprovado";
        }
        else{
          $resultado = "Reprovado";
        }
        require_once("../src/View/exercicio5.php");

    }
}