<?php

declare(strict_types=1);

namespace App\DomainModel\Greeting;

use App\DomainModel\Greeting\BaseGreeting;

/**
 * Class RuGreeting
 * @package App\DomainModel\Greeting
 */
class RuGreeting extends BaseGreeting
{
    private const GREETING = 'Привет';
    private const FLAG = <img src="public/image/flags/flag_ru.jpg">;
    
    public function getGreeting(string $name): string
    {
        return self::GREETING . ', ' . $name;
    }
    
    public function getFlagImage()
    {
        return self::FLAG;
    }
}
