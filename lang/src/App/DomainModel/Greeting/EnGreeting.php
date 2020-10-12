<?php

interface LanguegesInterface
{
    public function said(string $file);
}

class EnLangueges implements LanguegesInterface
{
    public function said(string $file)
    {
        echo 'Hello ', $file, PHP_EOL;
    }
}

