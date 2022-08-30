<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;   
    
        print "CONSTRUIDO: Objeto {$this->descricao} estoque {$this->estoque} \n";
    }

    public function __destruct()
    {
        print "DESTRUIDO: Objeto {$this->descricao} estoque {$this->estoque} \n";
    }

}

$p1 = new Produto('Chcolate', 10, 2);
unset($p1);