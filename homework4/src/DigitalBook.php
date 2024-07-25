<?php

class DigitalBook extends AbstractBook
{
    protected float $price;
    private static int $idCounter = 0;

    public function __construct(string $title, string $author, float $price)
    {
        parent::__construct($title, $author);
        $this->price = $price;
        self::$idCounter++;
        $this->id = self::$idCounter;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getInfo(): string
    {
        return "Book: ID - {$this->id}, Title - {$this->title}, Author - {$this->author}, Price - {$this->price}";
    }
}
