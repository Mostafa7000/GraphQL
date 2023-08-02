<?php

return [
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
        'getAuthors' => function ($root, $args, $context) {
            return [
                [
                    'id' => 1,
                    'name' => 'Ahmed Omar'
                ],
                [
                    'id' => 2,
                    'name' => 'Hassan Ghaly'
                ]
            ];
        }
    ]
];
