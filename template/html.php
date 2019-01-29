<!doctype html>
<html>
<head>
  <title><?php echo $term->translation(); ?> - <?php echo $term; ?><?php echo (string) $term->description() ? ' - '.$term->description() : ''; ?></title>
  <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width" />
  <link rel="stylesheet" href="static/html.css">
</head>
<body style="background-image: url('img/<?php echo $imageName; ?>?<?php echo $generateDate; ?>')">
    <div class="description">
        <div id="description"><?php echo $term->description(); ?></div>
    </div>
    <object id="diagram" type="image/svg+xml" data="svg/<?php echo $svgName; ?>?<?php echo $generateDate; ?>"></object>
    <script src="static/html.js?<?php echo $generateDate; ?>"></script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52092633" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>
</html>
