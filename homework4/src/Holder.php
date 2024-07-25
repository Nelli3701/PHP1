<?php

class Holder
{
    protected string $name;
    protected string $phone;
    protected array $books;

    public function __construct(string $name, string $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->books = [];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}
