<?php

function cleanup($string) {

    // Remove tags
    $string = strip_tags($string);

    // Your code here.

    return $string;
}

$html = <<<EOF
<div>lorem ipsum doLor sit  amet, ludus munere at Quo, <a href=“#”>mel hinc pAulo concludaturque te</a>. illum   populo
iracundia Id nam, his ne elitr impedit, Nominavi adipiscinG ex his.</div>
EOF;

echo cleanup($html);

