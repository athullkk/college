<?php
$students = array("ATHUL", "MEGU", "DEV", "NANU", "NIVED");
echo "<h3>Original Student List:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
asort($students);
echo "<h3>Sorted Student List (Ascending):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
arsort($students);
echo "<h3>Sorted Student List (Descending):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
?>