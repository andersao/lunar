<?php

return [
    'dropdown' => [
        'label' => 'Menu Suspenso',
        'form' => [
            'lookups' => [
                'label' => 'Consultas',
                'key_label' => 'Rótulo',
                'value_label' => 'Valor',
            ],
        ],
    ],
    'listfield' => [
        'label' => 'Campo de Lista',
    ],
    'text' => [
        'label' => 'Texto',
        'form' => [
            'richtext' => [
                'label' => 'Texto Formatado',
            ],
        ],
    ],
    'translatedtext' => [
        'label' => 'Texto Traduzido',
        'form' => [
            'richtext' => [
                'label' => 'Texto Formatado',
            ],
            'locales' => 'Idiomas',
        ],
    ],
    'toggle' => [
        'label' => 'Alternar',
    ],
    'youtube' => [
        'label' => 'YouTube',
    ],
    'vimeo' => [
        'label' => 'Vimeo',
    ],
    'number' => [
        'label' => 'Número',
        'form' => [
            'min' => [
                'label' => 'Mín.',
            ],
            'max' => [
                'label' => 'Máx.',
            ],
        ],
    ],
    'file' => [
        'label' => 'Arquivo',
        'form' => [
            'file_types' => [
                'label' => 'Tipos de Arquivos Permitidos',
                'placeholder' => 'Novo MIME',
            ],
            'multiple' => [
                'label' => 'Permitir Múltiplos Arquivos',
            ],
            'min_files' => [
                'label' => 'Mín. Arquivos',
            ],
            'max_files' => [
                'label' => 'Máx. Arquivos',
            ],
        ],
    ],
];
