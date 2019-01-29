<?php

namespace Ontology;

class Term extends Stringable
{
    private $name;
    private $popularity;
    private $description;

    public function __construct(Localized $name, int $popularity = 0, ?Stringable $description = null)
    {
        parent::__construct((string) $name);
        $this->name = $name;
        $this->popularity = $popularity;
        $this->description = $description;
    }

    public function translation()
    {
        return $this->name->translation();
    }

    public function needPronunciation(): bool
    {
        return $this->name->needPronunciation();
    }

    public function pronunciation()
    {
        return $this->name->pronunciation();
    }

    public function description(): Stringable
    {
        return $this->hasDescription() ? $this->description : new Stringable('');
    }

    public function hasDescription(): bool
    {
        return null !== $this->description;
    }

    public function popularity(): int
    {
        return $this->popularity;
    }
}
