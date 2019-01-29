digraph term {
    graph [
        layout=neato
        overlap=scalexy
        splines=true
        compound=true
        stylesheet="../static/svg.css"
        ratio="auto"
        bgcolor="transparent"
    ]

    node [
        shape=box
        shape=oval
        shape=circle
        color=gray
        penwidth=0.2
    ]
    edge [
        arrowhead=vee
        style=dashed
    ]
    
    "<?php echo $term; ?>" [
        label="<?php echo $term; ?>\n<?php echo $term->translation(); ?><?php echo $term->pronunciation() ? '\n'.$term->pronunciation() : ''; ?>"
        tooltip="<?php echo $term->translation(); ?>"
        class="root <?php echo $term->pronunciation() ? 'has-pronunciation' : ''; ?>"
        fontsize="<?php echo $relations->fontsize($term); ?>"
    <?php if ((string) $term == (string) $rootTerm) {
    ?>
        href="../"
        target="_top"
    <?php
} else {
        ?>
        href="javascript:history.back()"
        target="_top"
    <?php
    } ?>
    ]

<?php $relatedTerms = $relations->relatedTermsBy($term); ?>    
<?php foreach ($relatedTerms as $relatedTerm) {
        ?>
    "<?php echo $relatedTerm; ?>" [
        href="../<?php echo new Ontology\FileName($relatedTerm, '.html'); ?>"
        target="_top"
        label="<?php echo $relatedTerm; ?>\n<?php echo $relatedTerm->translation(); ?><?php echo $relatedTerm->pronunciation() ? '\n'.$relatedTerm->pronunciation() : ''; ?>"
        tooltip="<?php echo $relatedTerm->translation(); ?>"
        class="<?php echo $relatedTerm->pronunciation() ? 'has-pronunciation' : ''; ?>"
        fontsize="<?php echo $relations->fontsize($relatedTerm); ?>"
    ]
<?php
    } ?>

<?php foreach ($relatedTerms as $relatedTerm) {
        ?>
<?php foreach ($relations->outgoingTermsBy($relatedTerm)->intersect($relatedTerms) as $relatedToRelatedTerm) {
            ?>
    "<?php echo $relatedTerm; ?>" -> "<?php echo $relatedToRelatedTerm; ?>"
<?php
        } ?>
<?php
    } ?>    

<?php $incomingTerms = $relations->incomingTermsBy($term); ?>    
<?php foreach ($incomingTerms as $relatedTerm) {
        ?>
    "<?php echo $relatedTerm; ?>" -> "<?php echo $term; ?>"
<?php
    } ?>

<?php $outgoingTerms = $relations->outgoingTermsBy($term); ?>
<?php foreach ($outgoingTerms as $relatedTerm) {
        ?>
    "<?php echo $term; ?>" -> "<?php echo $relatedTerm; ?>"
<?php
    } ?>
}
