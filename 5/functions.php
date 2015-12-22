<?php

function cleanup($string) {

    // Remove tags
    $string = strip_tags($string);

    // Remove extraneous white space
    $string = preg_replace('#\s+#', ' ', $string);

    // Make all letters lowercase
    $string = strtolower($string);

    // Explode string to array
    $arr = explode(" ", $string);

    // Your code here.

    return $string;
}

$html = <<<EOF
<div>lorem ipsum doLor sit  amet, ludus munere at Quo, <a href=“#”>mel hinc pAulo concludaturque te</a>. illum   populo
iracundia Id nam, his ne elitr impedit, Nominavi adipiscinG ex his.</div>
EOF;

echo cleanup($html);

