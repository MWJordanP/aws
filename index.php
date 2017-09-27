<?php
require __DIR__.'/vendor/autoload.php';

use Embed\Embed;

?>

<form action="" method="get">
    <label for="">Url</label>
    <input type="url" name="url">
    <button>
        Afficher
    </button>
</form>


<?php

if (isset($_GET['url']) && !empty($_GET['url'])) {
    $info = Embed::create($_GET['url']);
    echo $info->getCode();
}

?>
