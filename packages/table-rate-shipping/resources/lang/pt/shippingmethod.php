<?php

return [
    'label_plural' => 'Métodos de Envio',
    'label' => 'Método de Envio',
    'form' => [
        'name' => [
            'label' => 'Nome',
        ],
        'description' => [
            'label' => 'Descrição',
        ],
        'code' => [
            'label' => 'Código',
        ],
        'cutoff' => [
            'label' => 'Prazo',
        ],
        'charge_by' => [
            'label' => 'Cobrar Por',
            'options' => [
                'cart_total' => 'Total do Carrinho',
                'weight' => 'Peso',
            ],
        ],
        'driver' => [
            'label' => 'Tipo',
            'options' => [
                'ship-by' => 'Padrão',
                'collection' => 'Coleta',
            ],
        ],
        'stock_available' => [
            'label' => 'O estoque de todos os itens do carrinho deve estar disponível',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Nome',
        ],
        'code' => [
            'label' => 'Código',
        ],
        'driver' => [
            'label' => 'Tipo',
            'options' => [
                'ship-by' => 'Padrão',
                'collection' => 'Coleta',
            ],
        ],
    ],
    'pages' => [
        'availability' => [
            'label' => 'Disponibilidade',
            'customer_groups' => 'Este método de envio está atualmente indisponível para todos os grupos de clientes.',
        ],
    ],
];
