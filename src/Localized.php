<?php

namespace Ontology;

/**
 * @see https://tophonetics.com/ru/
 */
class Localized extends Stringable
{
    private $translation;
    private $pronunciation;

    public function __construct(string $original, string $translation, string $pronunciation = null)
    {
        parent::__construct($original);
        $this->translation = $translation;
        $this->pronunciation = $pronunciation;
    }

    public function translation(): string
    {
        return $this->translation;
    }

    public function needPronunciation(): bool
    {
        return null === $this->pronunciation;
    }

    public function pronunciation(): string
    {
        return (string) $this->pronunciation;
    }
}
