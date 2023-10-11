<?php

    class Pedido
    {
        public $numero;
        public $cliente;
    }

    class Cliente
    {
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente;
    $cliente->nome = "Frederico Dulio";
    $cliente->endereco = "Rua 22, Número 57";

    $pedido = new Pedido;
    $pedido->numero = 27;
    $pedido->cliente = $cliente;

    $dados = array(
        'numero'=>$pedido->numero,
        'nome_cliente'=>$cliente->nome,
        'endereco_cliente'=>$pedido->cliente->endereco
    );

    var_dump($dados);