<?php

declare(strict_types=1);

namespace Support\Entity\Connect4;

final class Player implements Participant
{
    private $id;
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function id(): int
    {
        return $this->id;
    }
}