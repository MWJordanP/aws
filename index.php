<?php
require __DIR__.'/vendor/autoload.php';

use Embed\Embed;

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iframe embed</title>
</head>
<body>
<?php

$info = Embed::create('https://www.youtube.com/watch?v=WxOulfAfKvk');
echo $info->getCode();
echo "<br>";
echo 'Normalement ceci affiche une iframe x)';

?>
</body>
</html>
