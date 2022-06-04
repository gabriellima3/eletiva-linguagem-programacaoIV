<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio2Controller

{
    public static function exibir(){
        require_once("../src/View/exercicio2.php");
    }

    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valorFinal = $valor1 * $valor2;
        require_once("../src/View/exercicio2.php");
            
    }
}