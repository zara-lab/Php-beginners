# PHP за абсолютно начинаещи част II

В този урок работим в конзола. Ако проектът `php-beginners` се намира в `/home/zaralab/php-beginners` изпълнете в конзолата:

    cd /home/zaralab/php-beginners/lecture2
    php console.php

Правим първи крачки в дизайн на нашите приложения, разделяме кода си в папки (`data/` за данни които ползваме в урока, `lib/` за споделен код). Използваме `console.php` за входна точка на нашето  приложение, научаваме се как и кога да използваме `require` / `require_once`, `include` / `include_once`

## Arrays

Дефинираме масив в `data/arrays.php`, упражнение за работа с този масив се намира `practice/arrays.php`

```php
printc($array);
printc($array[0]);
printc($array[1]);
// .............
```

## Functions

В `lib/functions.php` дефинираме първата си функция - използваме я във всички упражнения за изпращане на резултата от нашата работа към конзолата.

В `practice/functions.php` се запознаваме с `printf` и  `sprintf`

```php
// .............
$result = sprintf('The value of $x is %d and $y is %s', $x, $y);
printc($result);
```
