<?php
// cookie = information about a user stored in a user's web browser targeted advertisements, browsing preferences, and other non sensitive data

setcookie("fav_shirt", "Park Avenue", time()+3600);

echo "Buy ", $_COOKIE["fav_shirt"];

?>