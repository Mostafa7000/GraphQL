<?php

return [
    'Book' => [
        'author' => [
            'id' => 1,
            'name' => 'Ahmed Omar'
        ],
    ],
    'Query' => [
        'getBooks' => function ($root, $args, $context) {
            return [
                [
                    'id' => 1,
                    'title' => 'Journey to the center of earth'
                ],
                [
                    'id' => 2,
                    'title' => 'Oliver Twist'
                ]
            ];
        },
    ]
];
