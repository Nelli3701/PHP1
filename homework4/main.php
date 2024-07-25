<?php

//require './vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';  //это почему-то не работает, не смогла разобраться почему
require_once "src/AbstractBook.php";
require_once "src/Book.php";
require_once "src/DigitalBook.php";
require_once "src/Holder.php";
require_once "src/Library.php";
require_once "src/Shelf.php";

$lib = new Library("Библиотека им. Горького", "г. Екатеринбург");

$shelf = new Shelf();

$book1 = new Book("Преступление и наказание", "Ф. Достоевский", 1997);

$book2 = new Book("Стихи для детей", "Агния Барто", 1990);

$lib->addShelf($shelf);

$shelf->addBook($book1, $shelf);

$shelf->addBook($book2, $shelf);


$holder1 = new Holder("Ivanov", "123-456-789");
$holder2 = new Holder("Petrov", "123-000-888");

$lib->addHolder($holder1);
$lib->addHolder($holder2);

$lib->addBook($book1, $shelf);
$lib->addBook($book2, $shelf);

echo $lib->getInfo();

/*
6. Дан код:

class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4

Что он выведет на каждом шаге? Почему?
Выведет 1234.
Каждый раз значение увеличивается на 1, т.к. статическое свойство static $x = 0 создается один раз
и относится ко всему классу, а не по отдельности к его экземплярам. 
Сохраняет свое значение между вызовами метода.

Немного изменим п.5

class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1
$b1->foo(); //1
$a1->foo(); //2
$b1->foo(); //2

Что он выведет теперь?
Выведет 1122. Переменная по-прежнему статическая, но теперь создаются экземпляры разных классов. То есть теперь 
при вызове в разных классах - собственная статическая переменная.
*/