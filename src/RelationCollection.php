<?php

namespace Ontology;

class RelationCollection implements \IteratorAggregate
{
    private $items;
    private $terms;
    private $outgoingTermsBy;
    private $incomingTermsBy;

    public function __construct(Relation ...$items)
    {
        $this->items = $items;

        $terms = [];
        $outgoingTermsBy = [];
        $incomingTermsBy = [];
        foreach ($this->items as $item) {
            $terms[] = $item->from();
            $terms[] = $item->to();
            $outgoingTermsBy[(string) $item->from()][] = $item->to();
            $incomingTermsBy[(string) $item->to()][] = $item->from();
        }
        $this->terms = new TermCollection(...$terms);
        foreach ($outgoingTermsBy as $key => $terms) {
            $this->outgoingTermsBy[$key] = new TermCollection(...$terms);
        }
        foreach ($incomingTermsBy as $key => $terms) {
            $this->incomingTermsBy[$key] = new TermCollection(...$terms);
        }
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->items);
    }

    public function terms(): TermCollection
    {
        return $this->terms;
    }

    public function relatedTermsBy(Term $term): TermCollection
    {
        return $this->incomingTermsBy($term)->withAnother($this->outgoingTermsBy($term));
    }

    public function outgoingTermsBy(Term $term): TermCollection
    {
        if (!isset($this->outgoingTermsBy[(string) $term])) {
            $this->outgoingTermsBy[(string) $term] = new TermCollection();
        }

        return $this->outgoingTermsBy[(string) $term];
    }

    public function incomingTermsBy(Term $term): TermCollection
    {
        if (!isset($this->incomingTermsBy[(string) $term])) {
            $this->incomingTermsBy[(string) $term] = new TermCollection();
        }

        return $this->incomingTermsBy[(string) $term];
    }

    public function fontsize(Term $term): int
    {
        return 10 + 5 * (self::POPULARITY_INTERVALS - $this->popularityRank($term));
    }

    private const POPULARITY_INTERVALS = 3;

    private $popylarityToRank = [];

    private function popularityRank(Term $term): int
    {
        if (!empty($this->popylarityToRank)) {
            return $this->popylarityToRank[$term->popularity()];
        }

        $termsByPopularity = [];
        foreach ($this->terms() as $term) {
            $termsByPopularity[$term->popularity()] = $term;
        }
        $intervals = $this->intervalize(array_keys($termsByPopularity), self::POPULARITY_INTERVALS);
        foreach ($intervals as $rank => $popularities) {
            foreach ($popularities as $popularity) {
                $this->popylarityToRank[$popularity] = $rank;
            }
        }

        return $this->popylarityToRank[$term->popularity()];
    }

    private function intervalize(array $data, int $intervals): array
    {
        rsort($data);

        $gaps = [];
        foreach ($data as $i => $value) {
            if (0 == $i) {
                $gaps[] = 0;
            } else {
                $gaps[] = $data[$i - 1] - $data[$i];
            }
        }

        arsort($gaps);

        $keys = array_slice(array_flip($gaps), 0, $intervals - 1);
        $keys[] = count($data);

        $result = [];
        foreach ($data as $i => $value) {
            foreach ($keys as $interval => $iMax) {
                if ($i < $iMax) {
                    $result[$interval][] = $value;
                    break;
                }
            }
        }

        return $result;
    }
}
