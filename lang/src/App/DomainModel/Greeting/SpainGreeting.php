<?php

interface LanguegesInterface
{
    public function said(string $file);
}

class SpLangueges implements LanguegesInterface
{
    public function said(string $file)
    {
        echo 'Hola ', $file, PHP_EOL;
    }
}

