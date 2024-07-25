<?php

abstract class AbstractBook
{
    protected int $id;
    protected string $title;
    protected string $author;
    protected int $year;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    abstract public function getInfo(): string;

    public function getName(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setName(string $title): void
    {
        $this->title = $title;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }
    public function getId(): int
    {
        return $this->id;
    }
}
