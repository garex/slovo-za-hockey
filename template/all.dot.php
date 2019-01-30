digraph term {
    graph [
        layout=fdp
        # overlap=scalexy
        splines=true
        # compound=true
        stylesheet="../static/svg.css"
        ratio="auto"
        bgcolor="transparent"
    ]

    node [
        # shape=box style="filled,rounded"
        # shape=circle
        # shape=none
        shape=oval
        color=gray
        penwidth=0.2
    ]
    edge [
        arrowhead=vee
        style=dashed
    ]

<?php foreach ($relations->terms() as $term) {
    ?>
    "<?php echo $term; ?>" [
        href="../<?php echo new Ontology\FileName($term, '.html'); ?>"
        target="_top"
        fontsize="<?php echo $relations->fontsize($term); ?>"
        label="<?php echo $term; ?>\n<?php echo $term->translation(); ?>"
        tooltip="<?php echo $term->translation(); ?>"
        class="<?php echo ((string) $term == (string) $rootTerm) ? 'root ' : ''; ?>"

    ]
<?php
} ?>

<?php foreach ($relations as $relation) {
        ?>
    "<?php echo $relation->from(); ?>" -> "<?php echo $relation->to(); ?>"
<?php
    } ?>    

}
