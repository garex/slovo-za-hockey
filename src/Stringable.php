<?php

namespace Ontology;

class Stringable
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function isEmpty(): bool
    {
        return empty($this->value);
    }

    public function __toString()
    {
        return $this->value;
    }
}
