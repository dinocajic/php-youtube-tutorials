<?php

function isPalindrome($word) {

    if ( empty($word) ) {
        return true;
    }

    if ( $word[0] == $word[ strlen($word) - 1 ] ) {
        return isPalindrome( substr($word, 1, -1) );
    }

    return false;
}

var_dump( isPalindrome("") );
var_dump( isPalindrome("dino") );
var_dump( isPalindrome("dinoonid") );
var_dump( isPalindrome("dinonid") );
var_dump( isPalindrome("hello") );