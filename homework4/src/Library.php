<?php

class Library
{
    private string $name;
    private string $address;
    private array $shelves;
    private array $holders;
    private array $books;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
        $this->shelves = [];
        $this->holders = [];
        $this->books = [];
    }

    public function addShelf(Shelf $shelf): void
    {
        $this->shelves[$shelf->getId()] = $shelf;
    }

    public function addHolder(Holder $holder): void
    {
        $this->holders[$holder->getName()] = $holder;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function addBook(Book $book, Shelf $shelf): void
    {
        $this->books[$book->getId()] = $book;
        $shelf->addBook($book);
    }
}
