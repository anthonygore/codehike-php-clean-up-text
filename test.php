<?php

//include('functions.php');

function test_function($step) {

    $html = <<<EOF
<div>lorem ipsum doLor sit  amet, ludus munere at Quo, <a href=“#”>mel hinc pAulo concludaturque te</a>. illum   populo
iracundia Id nam, his ne elitr impedit, Nominavi adipiscinG ex his.</div>
EOF;

    $string = $html;
    $arr = array();

    if ($step >= 1) {
        $string = strip_tags($html);
    }
    if ($step >= 2) {
        $string = preg_replace('#\s+#', ' ', $string);
    }
    if ($step >= 3) {
        $string = strtolower($string);
    }
    if ($step >= 4) {
        $arr = explode(" ", $string);
    }
    if ($step >= 5) {
        $arr[0] = ucfirst($arr[0]);
        for($i = 1; $i < count($arr); $i++) {
            if (substr($arr[$i-1], -1) == ".") {
                $arr[$i] = ucfirst($arr[$i]);
            }
        }
        $string = implode(" ", $arr);
    }

    $pass = true;
    $message = "There's a problem with your code, try again!";

    switch($step) {
        case 1:
            $pass = assert(cleanup($html) == $string);
            $message = "Your code hasn't removed all tags, try again!";
            break;
        case 2:
            $pass = assert(cleanup($html) == $string);
            $message = "Your code hasn't removed the extraneous white space, try again!";
            break;
        case 3:
            $pass = assert(cleanup($html) == $string);
            $message = "Your code hasn't made mid-word letters lowercase, try again!";
            break;
        case 4:
            $pass = assert(cleanup($html) == $arr);
            $message = "Something's not right, try again!";
            break;
        case 5:
            $pass = assert(cleanup($html) == $string);
            $message = "Your code hasn't correctly cased the string, try again!";
            break;
    }

    if ($pass) {
        echo json_encode(array(
            'pass' => true,
        ));
    } else {
        echo json_encode(array(
            'pass' => false,
            'message' => $message
        ));
    }

}