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
    ],
    'Mutation' => [
        'createBook' => function ($root, $args, $context) {
            // Extract the input data from the arguments
            $bookData = $args['input'];

            // Create the new Book object with the provided data
            $newBook = [
                'id' => uniqid(), // You can generate a unique ID using your preferred method
                'title' => $bookData['title'],
                'authorId' => $bookData['authorId'],
            ];

            // In a real application, I would save the new book to database or storage

            // Return the newly created Book
            return $newBook;
        },
    ],
];
