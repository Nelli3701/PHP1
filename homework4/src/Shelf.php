<?php

class Shelf
{
    private int $id;
    private static int $idCounter = 0;
    private array $books;

    public function __construct()
    {
        $this->id = ++self::$idCounter;
        $this->books = [];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function addBook(Book $book): void
    {
        $this->books[$book->getId()] = $book;
    }

    public function takeBook(int $id): void
    {
        unset($this->books[$id]);
    }
}
