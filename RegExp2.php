<?php

$str = <<<Text
(123) 456-7890  
555-1234  
(555) 555-5555  
800-867-5309  
(123) 555-6789  
123-456-7890
123 456 7890
123.456.7890
Text;

$regexp = "/(\(?\d{3}\)?.)?\d{3}.\d{4}/";

preg_match_all($regexp, $str, $matches);
print_r($matches);