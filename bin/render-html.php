<?php

namespace Ontology;

require_once __DIR__.'/../data/relations.php';

renderHtml($allTerm);

foreach ($relations->terms() as $term) {
    renderHtml($term);
}

function renderHtml(Term $term): void
{
    $fileName = new FileName($term, '.html');
    $imageName = new FileName($term, '.jpg');
    $svgName = 'vertical-'.new FileName($term, '.dot.svg');
    $generateDate = (new \DateTime())->format('Y-m-d');
    $root = __DIR__.'/..';
    ob_start();
    include $root.'/template/html.php';
    $content = ob_get_clean();
    file_put_contents($root.'/docs/'.$fileName, $content);
}
