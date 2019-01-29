<?php

namespace Ontology;

require_once __DIR__.'/terms.php';

$relations = new RelationCollection(
    new Relation($team, $player),
    new Relation($rink, $ice),
    new Relation($rink, $goalNet),
    new Relation($opponent, $team),
    new Relation($opponent, $player),

    new Relation($stick, $puck),
    new Relation($puck, $ice),

    new Relation($puck, $goalNet),
    new Relation($opponent, $goalNet),

    new Relation($team, $sport),
    new Relation($score, $goal),
    new Relation($score, $point),
    new Relation($point, $goal),
    new Relation($player, $goal),
    new Relation($player, $sport),
    new Relation($point, $player),
    new Relation($point, $team),

    new Relation($goal, $puck),
    new Relation($goal, $goalNet),

    new Relation($hockey, $team),
    new Relation($hockey, $sport),
    new Relation($hockey, $rink),
    new Relation($hockey, $player),
    new Relation($hockey, $stick),
    new Relation($hockey, $puck),
    new Relation($hockey, $goalNet),
    new Relation($hockey, $goal)
);
