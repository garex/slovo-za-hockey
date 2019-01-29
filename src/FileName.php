<?php

namespace Ontology;

class FileName extends Stringable
{
    public function __construct(Stringable $from, string $extension)
    {
        $name = str_replace(' ', '-', strtolower((string) $from)).$extension;

        parent::__construct($name);
    }

    public function existsAt(string $directory): bool
    {
        return file_exists($directory.'/'.$this);
    }
}
