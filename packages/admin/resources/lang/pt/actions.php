<?php

return [
    'collections' => [
        'create_root' => [
            'label' => 'Criar Coleção Raiz',
        ],
        'create_child' => [
            'label' => 'Criar Coleção Filha',
        ],
        'move' => [
            'label' => 'Mover Coleção',
        ],
        'delete' => [
            'label' => 'Deletar',
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'Atualizar Status',
            'wizard' => [
                'step_one' => [
                    'label' => 'Status',
                ],
                'step_two' => [
                    'label' => 'E-mails e Notificações',
                    'no_mailers' => 'Não há remetentes disponíveis para este status.',
                ],
                'step_three' => [
                    'label' => 'Pré-visualizar & Salvar',
                    'no_mailers' => 'Nenhum remetente foi escolhido para pré-visualização.',
                ],
            ],
            'notification' => [
                'label' => 'Status do pedido atualizado',
            ],
            'billing_email' => [
                'label' => 'E-mail de cobrança',
            ],
            'shipping_email' => [
                'label' => 'E-mail de Entrega',
            ],
        ],

    ],
];
