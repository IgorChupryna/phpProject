<?php

$header = $config["header"];

echo "<ul>\n";
foreach ($header as $menu) {
    foreach ($menu as $val) {

        echo '<li><a style="margin-right: 5px" href="' . $val['link'] . '">' . $val['title'] . '</a></li>';
    }
}
echo "</ul>\n";
?>