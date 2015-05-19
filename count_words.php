<?php
include_once 'function.php';

$count_func  = new Count();

echo $count_func -> countWordsInArray()."\n<br />";
echo $count_func -> printWordsIntoTable()."\n<br />";
