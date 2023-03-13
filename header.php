<?php

$header = $config["header"];

echo "<ul>\n";
foreach ($header as $menu) {
    foreach ($menu as $val) {
        echo '<a style="margin-right: 5px" href="' . $val['link'] . '">' . $val['title'] . '</a>';
    }
}
echo "</ul>\n";
?>