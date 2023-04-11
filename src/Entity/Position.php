<?php

namespace App\Entity;

class Position
{
    public int $id;

    public string|int $position;

    public function getPosition(): int|string
    {
        return $this->id | $this->position;
    }
}