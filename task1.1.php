<?php
/**
 * Задача 1.1
 */

function find($haystack, $needle)
{
    foreach($haystack as $key => $value) {
        if ($value >= $needle) {
            return $key;
        }
    }
}
