<?php

# readline fix
if(!function_exists('readline')) {
	function readline($label)
	{
		echo "\n".$label;
		return stream_get_line(STDIN, 1024, PHP_EOL);
	}
}

# Cli function - mesages
function message($data)
{
    if (is_array($data)) {
        print_r($data, true);
    } else {
        echo $data."\n";
    }
}

function getBooks()
{
    $string = file_get_contents('./data/books.json');

    return json_decode($string, true);
}

function getBook($index)
{
    $books = getBooks();
    if (!isset($books[$index])) {
        return null;
    }
    $book = $books[$index];
    return $book;
}

function saveBooks($books)
{
    $string = json_encode($books);
    if (false === $string) {
        return false;
    }

    return file_put_contents('./data/books.json', $string);
}

function updateBook($book, $index)
{
    $books = getBooks();
	if (!isset($books[$index])) {
		return false;
	}
    $books[$index] = $book;
    return saveBooks($books);
}

function newBook($book)
{
    $books = getBooks();
    $index = getNextAutoIndex();
    $books[$index] = $book;

    return saveBooks($books);
}

function deleteBook($index)
{
    $books = getBooks();
    if (!isset($books[$index])) {
        return false;
    }
    unset($books[$index]);

    return saveBooks($books);
}

function getNextAutoIndex()
{
	$path = "./data/autoindex";
	$current_auto_index = (int) file_get_contents($path);
	$new_auto_index = $current_auto_index + 1;
	if (file_put_contents($path, $new_auto_index) === false) {
		message("Error while saving next auto index");
		// Why 65? Learn more:
		// https://www.perpetual-beta.org/weblog/php-from-the-command-line.html
		// http://tldp.org/LDP/abs/html/exitcodes.html
		exit(65);
	}
	return $current_auto_index;
}
