<?php

namespace Ontology;

use Symfony\Component\Yaml\Yaml;

require_once __DIR__.'/../data/relations.php';

$without = [];
foreach ($relations->terms() as $term) {
    if (!$term->hasDescription()) {
        $without['description'][] = (string) $term;
    }
    if ($term->needPronunciation()) {
        $without['pronunciation'][] = (string) $term;
    }
    $imageName = new FileName($term, '.jpg');
    if (!$imageName->existsAt(__DIR__.'/../docs/img')) {
        $without['image'][] = (string) $imageName;
    }
}

if (!empty($without)) {
    echo Yaml::dump($without);
}
