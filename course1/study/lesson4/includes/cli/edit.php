<?php

do {
    $index = readline('Enter book ID to edit (or type \'q\' to exit): ');
    if ($index == 'q') {
        message('Bye');
        exit(0);
    }
}
while(!is_numeric($index));

$index = (int) $index - 1;
$book = getBook($index);
if (null === $book) {
	message('Book not found.');
    // Why 64? Learn more:
    // https://www.perpetual-beta.org/weblog/php-from-the-command-line.html
    // http://tldp.org/LDP/abs/html/exitcodes.html
	exit(64);
}

while(true) {
	$choice = editFieldPrompt();
	if($choice == 'q') {
        message('Bye');
        exit(0);
	}
	$value = editValuePrompt();

	switch ($choice) {
		case '1':
			$book['name'] = $value;
			break;
		case '2':
			$book['autor'] = $value;
			break;
		case '3':
			$book['genre'] = $value;
			break;
		case '4':
			$book['price'] = $value;
			break;
		case '5':
			$book['in_stock'] = $value ? true : false;
			break;

	}

	$check = updateBook($book, $index);
	if ($check === false || $check === 0) {
		message('Error: Book not saved.');
	} else {
		message('Changes saved.');
	}
}


function editFieldPrompt()
{
	do {
		message('1. Name');
		message('2. Author');
		message('3. Genre');
		message('4. Price');
		message('5. In stock');
	    $choice = readline('Please enter field to edit (type \'q\' to exit): ');
		$loop = !is_numeric($choice) || (int) $choice < 1 ||  (int) $choice > 5;

	    if ($choice == 'q') {
	    	$loop = false;
	    }
	}
	while($loop);

	return $choice;
}

function editValuePrompt()
{
	do {
		$value = readline('Enter new value: ');
	} while (trim($value) == '');
	return $value;
}
