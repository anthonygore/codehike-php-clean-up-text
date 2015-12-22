<?php

function cleanup($string) {

    // Remove tags
    $string = strip_tags($string);

    // Remove extraneous white space
    $string = preg_replace('#\s+#', ' ', $string);

    // Make all letters lowercase
    $string = strtolower($string);

    // Your code here.

    return $arr;
}

$html = <<<EOF
<div>lorem ipsum doLor sit  amet, ludus munere at Quo, <a href=“#”>mel hinc pAulo concludaturque te</a>. illum   populo
iracundia Id nam, his ne elitr impedit, Nominavi adipiscinG ex his.</div>
EOF;

print_r(cleanup($html));

