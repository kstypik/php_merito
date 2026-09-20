<?php

class Person
{
    protected string $name;
    protected int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo(): string
    {
        return "Imię: {$this->name}, wiek: {$this->age}";
    }
}
