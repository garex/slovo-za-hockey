<?php

namespace Ontology;

class Relation
{
    private $from;
    private $to;

    public function __construct(Term $from, Term $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function from(): Term
    {
        return $this->from;
    }

    public function to(): Term
    {
        return $this->to;
    }
}
