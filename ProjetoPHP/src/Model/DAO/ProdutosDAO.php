<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosDAO{

    public function inserir(Produtos $p)
    {
        try {
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $prepare = Conexao::conectar()->prepare($sql);
            $prepare->bindValue(":nome", $p->getNome());
            $prepare->bindValue(":valor", $p->getValor());
            $prepare->bindValue(":descricao", $p->getDescricao());
            return $prepare->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function alterar(Produtos $p)
    {
        try {
            $sql = "UPDATE `produtos` SET `nome`= :nome,`descricao`= :descricao,`valor`= :valor WHERE id = :id";
            $prepare = Conexao::conectar()->prepare($sql);
            $prepare->bindValue(":nome", $p->getNome());
            $prepare->bindValue(":descricao", $p->getDescricao());
            $prepare->bindValue(":valor", $p->getValor());
            $prepare->bindValue(":id", $p->getId());
            return $prepare->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM `produtos` WHERE id=:id";
            $prepare = Conexao::conectar()->prepare($sql);
            $prepare->bindValue(":id", $id);
            return $prepare->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function consultar()
    {
        try {
            $sql = "SELECT * FROM produtos";
            return Conexao::conectar()->query($sql);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function consultarPorId($id)
    {
        try {
            $sql = "SELECT * FROM produtos WHERE id=:id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return false;
        }
    }
}