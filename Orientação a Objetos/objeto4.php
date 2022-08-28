<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function setDescricao($descricao)
    {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
        }
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setEstoque($estoque)
    {
        if (is_numeric($estoque) and $estoque > 0) {
            $this->estoque = $estoque;
        }
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
}


$p1 = new Produto;

$p1->setDescricao("Pão com Queijo");
$p1->setEstoque(15);

echo "Descrição => {$p1->getDescricao()} \n";
echo "Estoque => {$p1->getEstoque()} \n";