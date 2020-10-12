<?php

interface LanguegesInterface
{
    public function said(string $file);
}

class UzLangueges implements LanguegesInterface
{
    public function said(string $file)
    {
        echo 'Salam alleykum ', $file, PHP_EOL;
    }
}

