<?php

$str = <<<Text
1999-09-23
2002-10-20
Text;

$regexp = "/(19|20)\d{2}-(0[1-9]|1[0-2])-([12][0-9]|3[01])/";

preg_match_all($regexp, $str, $matches);
print_r($matches);