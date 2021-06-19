
<?php

$text = 'TECH I.S.&テックアイエス';
$wpcontentpass = mb_strstr($text,'&',true);

echo $wpcontentpass;