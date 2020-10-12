<?php

interface LanguegesInterface
{
    public function said(string $file);
}

class DeLangueges implements LanguegesInterface
{
    public function said(string $file)
    {
        echo 'Hallo ', $file, PHP_EOL;
    }
}

