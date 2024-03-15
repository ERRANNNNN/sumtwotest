<b>Описание тестового:</b>

Реализуйте функцию sumTwo, которая в аргументы принимает Integer[] $nums и Integer $target, <br>где $nums это массив целых чисел (count($nums) > 1) и $target искомая сумма значений.
<br>Возвращает функция массив 2х интов (Integer[]), где указаны индексы элементов из $nums сумма которых равна $target. <br>Если элементов удовлетворяющим условиями несколько, то возвращается первое совпадение.

Проверка работоспособности:
1. Иметь установленный docker и docker-compose
2. В корне проекта создать папку logs
3. В папке logs папку nginx
4. В корневой папке проекта:
5. <code> $ docker-compose build </code>
6. <code> $ docker-compose up -d </code>
7. <code> $ cd data </code>
8. <code> $ composer install </code>
9. Для запуска тестов:
10. <code> $ vendor/bin/phpunit tests </code>

Класс SumTwo покрыт тестами, хранятся в папке data/tests