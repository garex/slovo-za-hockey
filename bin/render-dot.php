<?php

namespace Ontology;

require_once __DIR__.'/../data/relations.php';

renderDot($relations, $hockey, $allTerm, __DIR__.'/../template/all.dot.php');

foreach ($relations->terms() as $term) {
    renderDot($relations, $hockey, $term, __DIR__.'/../template/dot.php');
}

function renderDot(RelationCollection $relations, Term $rootTerm, Term $term, string $template): void
{
    $fileName = new FileName($term, '.dot');
    ob_start();
    include $template;
    $content = ob_get_clean();

    file_exists(__DIR__.'/../dot') || mkdir(__DIR__.'/../dot');
    $verticalContent = str_replace('ratio="auto"', 'ratio="1.77"', $content);
    file_put_contents(__DIR__.'/../dot/vertical-'.$fileName, $verticalContent);

    $horizontalContent = str_replace('ratio="auto"', 'ratio="0.56"', $content);
    file_put_contents(__DIR__.'/../dot/horizontal-'.$fileName, $horizontalContent);
}
