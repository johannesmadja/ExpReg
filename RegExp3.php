<?php

$str = <<<Text
192.168.0.1  
10.0.0.1  
172.16.0.1  
203.0.113.42  
198.51.100.17 
Text;

$regexp = "//";

preg_match_all($regexp, $str, $matches);
print_r($matches);