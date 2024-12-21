<?php

return [
    'label' => 'Zona de Envio',
    'label_plural' => 'Zonas de Envio',
    'form' => [
        'unrestricted' => [
            'content' => 'Esta zona de envio não possui restrições e estará disponível para todos os clientes no checkout.',
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'type' => [
            'label' => 'Tipo',
            'options' => [
                'unrestricted' => 'Sem Restrições',
                'countries' => 'Restringir a Países',
                'states' => 'Restringir a Estados / Províncias',
                'postcodes' => 'Restringir a Códigos Postais',
            ],
        ],
        'country' => [
            'label' => 'País',
        ],
        'states' => [
            'label' => 'Estados',
        ],
        'countries' => [
            'label' => 'Estados',
        ],
        'postcodes' => [
            'label' => 'Códigos Postais',
            'helper' => 'Liste cada código postal em uma nova linha. Suporta curingas como NW*',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Nome',
        ],
        'type' => [
            'label' => 'Tipo',
            'options' => [
                'unrestricted' => 'Sem Restrições',
                'countries' => 'Restringir a Países',
                'states' => 'Restringir a Estados / Províncias',
                'postcodes' => 'Restringir a Códigos Postais',
            ],
        ],
    ],
];
