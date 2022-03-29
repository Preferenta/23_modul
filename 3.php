<?php
$str = 'Kazakov Ivan Danylovych';
function getShortName($y) {
    $x = explode(' ', $y);
    echo $x[1] . ' ' .$x[0][0].'.' ;
}
$name = getShortName($str);
echo $name;

?>