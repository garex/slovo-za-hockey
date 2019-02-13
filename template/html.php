<!doctype html>
<html>
<head>
  <title><?php echo $term->translation(); ?> - <?php echo $term; ?><?php echo (string) $term->description() ? ' - '.$term->description() : ''; ?></title>
  <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width" />
  <link rel="stylesheet" href="static/html.css">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="./site.webmanifest">
  <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>
<body style="background-image: url('img/<?php echo $imageName; ?>?<?php echo $generateDate; ?>')">
    <div class="description">
        <div id="description"><?php echo $term->description(); ?></div>
    </div>
    <object id="diagram" type="image/svg+xml" data="svg/<?php echo $svgName; ?>?<?php echo $generateDate; ?>"></object>
    <a class="material-icons menu-icon" href="about.html">menu</a>
    <script src="static/html.js?<?php echo $generateDate; ?>"></script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52092633" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>
</html>
