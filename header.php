<?php
$header = $config["header"];

echo "<ul>\n";
foreach ($header as $menu) {
        echo '<a href="'.$menu['link'].'">'.$menu['title'].'</a>';
}
echo "</ul>\n";
?>