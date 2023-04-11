<?php

namespace App\Entity;

class Worker
{
    private int $id;

    private string $name;
    private string $surname;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Сделаем методы получения и установки свойств
    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

}