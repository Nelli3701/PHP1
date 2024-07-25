<?php
require_once __DIR__ . '/vendor/autoload.php';

$lib = new Library("Библиотека им. Горького", "г. Екатеринбург");

$shelf = new Shelf();

$book1 = new Book("Преступление и наказание", "Ф. Достоевский", 1997);

$book2 = new Book("Стихи для детей", "Агния Барто", 1990);

$lib->addShelf($shelf);

$shelf->addBook($book1, $shelf);

$shelf->addBook($book2, $shelf);


$holder = new Holder("Ivanov", "123-456-789");

$lib->addHolder($holder);

echo $lib;
