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

    new Relation($player, $shot),
    new Relation($shot, $goal),
    new Relation($shot, $puck),
    new Relation($shot, $stick),
    new Relation($shot, $goalNet),

    new Relation($shot, $flipShot),
    new Relation($shot, $wristShot),
    new Relation($shot, $slapShot),
    new Relation($shot, $snapShot),
    new Relation($snapShot, $wristShot),
    new Relation($snapShot, $slapShot),
    new Relation($shot, $backhandShot),
    new Relation($backhandShot, $wristShot),
    new Relation($shot, $onetimer),

    new Relation($hockey, $team),
    new Relation($hockey, $sport),
    new Relation($hockey, $shot),
    new Relation($hockey, $player),
    new Relation($hockey, $stick),
    new Relation($hockey, $puck),
    new Relation($hockey, $goalNet),
    new Relation($hockey, $goal)
);
