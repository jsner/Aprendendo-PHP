<?php

class Produto
{
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0) {
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades >= 0) {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) and $percentual >= 0) {
            $this->preco *= (1 + ($percentual / 100));
        }
    }
}
$p1 = new Produto;

$p1->descricao = "Chocolate";
$p1->estoque = 10;
$p1->preco = 8;

print "O estoque de {$p1->descricao} é {$p1->estoque} \n";
print "O preço de {$p1->descricao} é {$p1->preco} \n";

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(100);
$p1->reajustarPreco(50);

print "\n";
print "O estoque de {$p1->descricao} é {$p1->estoque} \n";
print "O preço de {$p1->descricao} é {$p1->preco} \n";
