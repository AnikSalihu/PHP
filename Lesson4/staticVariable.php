<?php
function callCounter() {
    static $count = 0;
    $count++;
    echo "The Value Of The Count Variable Is: $count <br>";
}

callCounter();
callCounter();
callCounter();
callCounter();
callCounter();

?>