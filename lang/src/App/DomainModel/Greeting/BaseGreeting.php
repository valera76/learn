<?php

declare(strict_types=1);

namespace App\DomainModel\Greeting;

/**
 * Class BaseGreeting
 * @package App\DomainModel\Greeting
 */
abstract class BaseGreeting
{
    abstract public function getGreeting(string $name): string;
    abstract public function getFlagImage();
}

