<?php

return [
    'shipping_methods' => [
        'customer_groups' => [
            'description' => 'Associe grupos de clientes a este método de envio para determinar sua disponibilidade.',
        ],
    ],
    'shipping_rates' => [
        'title_plural' => 'Taxas de Envio',
        'actions' => [
            'create' => [
                'label' => 'Criar Taxa de Envio',
            ],
        ],
        'notices' => [
            'prices_incl_tax' => 'Todos os preços incluem impostos, que serão considerados ao calcular o gasto mínimo.',
            'prices_excl_tax' => 'Todos os preços excluem impostos, o gasto mínimo será baseado no subtotal do carrinho.',
        ],
        'form' => [
            'shipping_method_id' => [
                'label' => 'Método de Envio',
            ],
            'price' => [
                'label' => 'Preço',
            ],
            'prices' => [
                'label' => 'Faixas de Preço',
                'repeater' => [
                    'customer_group_id' => [
                        'label' => 'Grupo de Clientes',
                        'placeholder' => 'Qualquer',
                    ],
                    'currency_id' => [
                        'label' => 'Moeda',
                    ],
                    'min_quantity' => [
                        'label' => 'Gasto Mínimo',
                    ],
                    'price' => [
                        'label' => 'Preço',
                    ],
                ],
            ],
        ],
        'table' => [
            'shipping_method' => [
                'label' => 'Método de Envio',
            ],
            'price' => [
                'label' => 'Preço',
            ],
            'price_breaks_count' => [
                'label' => 'Faixas de Preço',
            ],
        ],
    ],
    'exclusions' => [
        'title_plural' => 'Exclusões de Envio',
        'form' => [
            'purchasable' => [
                'label' => 'Produto',
            ],
        ],
        'actions' => [
            'create' => [
                'label' => 'Adicionar lista de exclusão de envio',
            ],
            'attach' => [
                'label' => 'Adicionar lista de exclusão',
            ],
            'detach' => [
                'label' => 'Remover',
            ],
        ],
    ],
];
