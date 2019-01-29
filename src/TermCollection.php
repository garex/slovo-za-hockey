<?php

namespace Ontology;

class TermCollection implements \IteratorAggregate
{
    private $items = [];

    public function __construct(Term ...$items)
    {
        foreach ($items as $item) {
            $this->addOnce($item);
        }
    }

    private function addOnce(Term $item): void
    {
        $name = (string) $item;
        if (!isset($this->items[$name])) {
            $this->items[$name] = $item;
        }
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->items);
    }

    public function withAnother(TermCollection $another): TermCollection
    {
        $me = clone $this;
        foreach ($another as $term) {
            $me->addOnce($term);
        }

        return $me;
    }

    public function intersect(TermCollection $another): TermCollection
    {
        $items = array_values(array_intersect_key($this->items, $another->items));

        return new self(...$items);
    }
}
