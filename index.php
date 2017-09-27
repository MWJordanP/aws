<?php
require __DIR__.'/vendor/autoload.php';

use Embed\Embed;

?>

<form action="" method="post">
    <label for="">Url</label>
    <input type="url" name="url">
    <button>
        Afficher
    </button>
</form>


<?php

if (isset($_POST['url']) && !empty($_POST['url'])) {
    $info = Embed::create($_POST['url']);
    echo $info->getCode();
}

?>
