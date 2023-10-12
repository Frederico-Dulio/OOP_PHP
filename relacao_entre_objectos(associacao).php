<?php

    class Pedido
    {
        public $numero;
        public $client;
    }

    class Cliente
    {
        public $nome;
        public $endereco;
    }

    $client = new Cliente;
    $client->nome = "Frederico Dulio";
    $client->endereco = "Rua 22, Número 57";

    $pedido = new Pedido;
    $pedido->numero = 27;
    $pedido->client = $client;

    $dados = array(
        'numero'=>$pedido->numero,
        'nome_cliente'=>$client->nome,
        'endereco_cliente'=>$pedido->client->endereco
    );

    var_dump($dados);