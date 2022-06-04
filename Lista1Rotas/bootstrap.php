<?php

    require_once __DIR__.'/vendor/autoload.php';

    //Aqui a gente recupera o que o usuário digitou e qual método HTPP ele utilizou

    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER["PATH_INFO"];

    //Instânciar classe Router
    
    $router = new \Aluno\ProjetoPhp\Router($method, $path);

    //Adicionar as rotas válidas abaixo

   
    //Ex1
    $router->get('/exercicio1', '\Aluno\ProjetoPhp\Controller\Exercicio1Controller::exibir');

    $router->post('/resultado1','\Aluno\ProjetoPhp\Controller\Exercicio1Controller::exibirResultado');

    
    //Ex2
    $router->get('/exercicio2', '\Aluno\ProjetoPhp\Controller\Exercicio2Controller::exibir');

    $router->post('/resultado2','\Aluno\ProjetoPhp\Controller\Exercicio2Controller::exibirResultado');

    //Ex3
    $router->get('/exercicio3', '\Aluno\ProjetoPhp\Controller\Exercicio3Controller::exibir');

    $router->post('/resultado3','\Aluno\ProjetoPhp\Controller\Exercicio3Controller::exibirResultado');

    //Ex4
    $router->get('/exercicio4', '\Aluno\ProjetoPhp\Controller\Exercicio4Controller::exibir');

    $router->post('/resultado4','\Aluno\ProjetoPhp\Controller\Exercicio4Controller::exibirResultado');

    //Ex5
    $router->get('/exercicio5', '\Aluno\ProjetoPhp\Controller\Exercicio5Controller::exibir');

    $router->post('/resultado5','\Aluno\ProjetoPhp\Controller\Exercicio5Controller::exibirResultado');


    //Adicionar as rotas válidas acima

    $result = $router ->handler();

    if (!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }

    echo $result($router->getParams());