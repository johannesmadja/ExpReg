<?php

$str = <<<Text
12345
12345-6789
Text;

$regexp = "/\d{5}(-\d{4})?/";

preg_match_all($regexp, $str, $matches);
print_r($matches);