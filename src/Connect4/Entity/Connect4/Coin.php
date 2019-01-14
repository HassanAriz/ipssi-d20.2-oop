<?php
/**
 * Created by PhpStorm.
 * User: likwi
 * Date: 17/12/2018
 * Time: 11:47
 */

declare(strict_types=1);

namespace Support\Entity\Connect4;


class Coin
{
    private const red = 'rouge';
    private const  yellow = 'jaune';
    private $color;
    private function __construct(string $color)
    {
        $this->color = $color;
    }
    public function __toString(): string
    {
        return $this->color;
    }
    public static function createRed(): Coin
    {
        return new self(self::red);
    }
    public static function createYellow(): Coin
    {
        return new self(self::yellow;
    }
}