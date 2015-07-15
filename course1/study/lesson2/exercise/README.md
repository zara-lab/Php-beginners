## Задание

Създайте приложение, което да работи в terminal/command prompt с изпълнение на:

    php app.php

1. Използвайте следните данни в своето приложение:
```
$array = array(
    'First element',
    'Search me',
    'I love ZaraLab',
    'I\'m going to become PHP expert!'
);
```

2. Намерете индекса на стойността от масива "Search me", използвайки метод
за търсене в масив и изпишете в терминала:
    Task Array Search: index is [xxx]
където [xxx] е стойността на търсения индекс. **Extra:** Приложението изписва `Task Array Search: index not found` ако търсенето е
неуспешно

3. Намерете индекса на стойността от масива "I'm going to become PHP expert!"
Заместете в стойността "PHP" със "software". Заместете старата стойност от масива с новата
и разпишете целия масив в терминала:
    Taks Replace: Array
    (
        [0] => First element
        [1] => Search me
        [2] => I love ZaraLab
        [3] => I'm going to become software expert!
    )
**Tip:** В документацията на PHP потърсете `str_replace`

4. Намерете индекса на стойността от масива "I love ZaraLab". Създайте (програмно) масив от тази стойност, съдържащ думите. Заместете старата стойност от $array масива с новополучения масив. Разпишете в терминала:
    Taks Explode: Array
    (
        [0] => First element
        [1] => Search me
        [2] => Array
            (
                [0] => I
                [1] => love
                [2] => ZaraLab
            )

        [3] => I'm going to become PHP expert!
    )
**Tip:** В документацията на PHP потърсете `explode`

5. **Extra:** Контролирайте вашето приложение с допълнителен аргумент по следния начин:
    php app.php search_key
разписва само задача .2

    php app.php replace
разписва само задача .3

    php app.php explode
разписва само задача .4

## Пояснения

Всичко маркирано с **Extra** е незадължително, т.е. предизвикателство :)

**Tip** ще ти даде насоки при решаването на текущата задача!
