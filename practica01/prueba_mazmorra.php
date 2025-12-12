<?php
include 'mazmorra.php';

$tiles = [
    ["E",  "E",   "E", "E"],
    ["E",  "ETE", "E", "E"],
    ["ET", "TIE", "E", "ET"],
    ["EI", "IT",  "T", "TI"]
];

mazmorra($tiles);
?>