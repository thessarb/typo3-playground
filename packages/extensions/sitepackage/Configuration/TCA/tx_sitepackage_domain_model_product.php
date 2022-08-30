<?php
return [
    'ctrl' => [
        'title' => 'Product',
        'label' => 'name',
        'iconfile' => 'EXT:sitepackage/Resources/Public/Icons/cat.svg'
    ],
    'columns' => [
        'name' => [
            'label' => 'Name',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'label' => 'Description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ],
        ],
        'quantity' => [
            'label' => 'Quantity',
            'config' => [
                'type' => 'input',
                'size' => '4',
                'eval' => 'int'
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'name, description, quantity'],
    ],
];
