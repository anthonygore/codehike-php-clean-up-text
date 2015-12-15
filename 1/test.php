<?php

include('functions.php');

/**
 * @test
 */
function test_function() {

    $html = <<<EOF
<div>lorem ipsum doLor sit  amet, ludus munere at Quo, <a href=“#”>mel hinc pAulo concludaturque te</a>. illum   populo
iracundia Id nam, his ne elitr impedit, Nominavi adipiscinG ex his.</div>
EOF;

    $pass = assert(cleanup($html) == strip_tags($html));

    if ($pass) {
        echo json_encode(array(
            'pass' => true
        ));
    } else {
        echo json_encode(array(
            'pass' => false,
            'message' => "Something's wrong with your code, try again!"
        ));
    }
}