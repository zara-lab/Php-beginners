<?php

do {
    $index = readline('Enter book ID to view: ');
} while(!is_numeric($index));

$index = (int) $index - 1;
$book = getBook($index);

if (null === $book) {
	message('Book not found.');
	exit(64);
}

message('----------------------');
message('Name: '.$book['name']);
message('Author: '.$book['author']);
message('Genre: '.$book['genre']);
message('Price: '.$book['price']);
message('In stock: '.($book['in_stock'] == true ? 'Yes' : 'No'));
message('----------------------');
