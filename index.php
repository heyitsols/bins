<?php

// Yes I know I shouldn't do this
date_default_timezone_set('Europe/London');

// Manual arrays, because my council is still backwards enough to distribute this by PDF
$black = array('2507','0808','2208','0509','1909','0310','1710','3110','1411','2811','1212');
$blue = array('0108','1508','2908','1209','2609','1010','2410','0711','2111','0512');
$tomorrow = date("dm", strtotime("+1 day"));

if (in_array("$tomorrow", $black)) {
    $bin = "black";
} elseif (in_array("$tomorrow", $blue)) {
    $bin = "blue";
} else {
    $bin = "none";
}

// Yes I know this isn't relevant, I just really wanted to use it and it doesn't make any difference
// to the time taken to run
// $ time php index.php
// No bin day tomorrow
// real 0m0.104s
// user    0m0.056s
// sys  0m0.010s
switch ($bin) {
case "black":
    echo "Tomorrow is black bin day!";
    break;
case "blue":
    echo "Tomrrow is blue bin day!";
    break;
case "none":
    echo "No bin day tomorrow";
    break;
}

?>
