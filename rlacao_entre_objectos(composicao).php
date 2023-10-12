<?php

    class Produtos
    {
        public $nome;
        public $preco;

        public function __construct($nome, $preco)
        {
            $this->nome = $nome;
            $this->preco = $preco;
        }
    }

    class Carrinho
    {
        public $produtos;

        public function adicionar(Produtos $produto)
        {
            $this->produtos[] = $produto;
        }

        public function listar()
        {
            foreach ($this->produtos as $produto) {
                echo $produto->nome."<br>";
                echo $produto->preco."<hr>";
            }
        }
    }


    $produto1 = new Produtos("Iphone XS Pro Max", 121212);
    $produto2 = new Produtos("Macbook", 1000000);

    $carrinho = new Carrinho;
    $carrinho->adicionar($produto1);
    $carrinho->adicionar($produto2);

    $carrinho->listar();