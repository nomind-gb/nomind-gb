<?php

use \Datetime;
$now = new DateTime();
echo $now->format('Y-m-d H:i:s');
echo "<br/>";
echo $now->getTimestamp();
##
echo "<br/>getting phpinfo... <br/>";
##

phpinfo();

?>

