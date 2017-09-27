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
    <title>Document</title>
</head>
<body>

<!--<form action="" method="get">-->
<!--    <label for="">Url</label>-->
<!--    <input type="url" name="url">-->
<!--    <button>-->
<!--        Afficher-->
<!--    </button>-->
<!--</form>-->
<?php

//if (isset($_GET['url']) && !empty($_GET['url'])) {
$info = Embed::create('https://www.youtube.com/watch?v=WxOulfAfKvk');
echo $info->getCode();
//}

?>
</body>
</html>
