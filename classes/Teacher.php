<?php

require_once "Person.php";

class Teacher extends Person
{
    private string $subject;

    public function __construct(string $name, int $age, string $subject)
    {
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function getInfo(): string
    {
        return "Imię: {$this->name}, wiek: {$this->age}, przedmiot: {$this->subject}";
    }

    public function getHtml(): string
    {
        return <<<HTML
            <div class="teacher">
                <h2>{$this->name}</h2>
                <p>Wiek: {$this->age}</p>
                <p>Przedmiot: {$this->subject}</p>
            </div>
HTML;
    }
}
