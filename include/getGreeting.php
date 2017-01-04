<?php
$time = date("H");
$timezone = date("e");
if ($time < "12") {
echo "Good morning";
} else
if ($time >= "12" && $time < "17") {
echo "Good afternoon";
} else
if ($time >= "17") {
echo "Good evening";
}
?>