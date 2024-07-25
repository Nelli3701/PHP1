<?php

class Book extends AbstractBook
{
    private Holder|null $holder;
    protected int|null $shelfId;
    private static int $idCounter = 0;

    public function __construct(string $title, string $author, int $year)
    {
        parent::__construct($title, $author);
        $this->year = $year;
        $this->id = ++self::$idCounter;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getHolder(): Holder|null
    {
        return $this->holder;
    }

    public function setHolder(Holder $holder): void
    {
        $this->holder = $holder;
    }

    public function getShelfId(): int|null
    {
        return $this->shelfId;
    }

    public function setShelfId(int $shelfId): void
    {
        $this->shelfId = $shelfId;
    }

    public static function getIdCounter(): int
    {
        return self::$idCounter;
    }

    public function getInfo(): string
    {
        return "Book: ID - {$this->id}, Title - {$this->title}, Author - {$this->author}, Year - {$this->year}, Holder - {$this->holder->getName()}, Shelf ID - {$this->shelfId}";
    }
}
