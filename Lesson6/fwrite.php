<?php
$myfile = fopen("ds.txt", 'w');
$my_text = "Digital School";
fwrite($myfile, $my_text);
?>