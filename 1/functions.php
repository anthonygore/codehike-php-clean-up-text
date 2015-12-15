<?php

function cleanup($string) {
    // Your code here.
}

$html = <<<EOF
<div>lorem ipsum doLor sit  amet, ludus munere at Quo, <a href=“#”>mel hinc pAulo concludaturque te</a>. illum   populo
iracundia Id nam, his ne elitr impedit, Nominavi adipiscinG ex his.</div>
EOF;

echo cleanup($html);

