<?php

$str = <<<Text
john.doe@example.com  
alice.smith@gmail.com  
jane_doe123@yahoo.com  
robert_jones@hotmail.com  
emily.brown@example.org  
mike.johnson@outlook.com  
sarah_adams123@live.com  
david.miller@gmail.com  
lisa.anderson@example.net  
brian_wilson@yahoo.uk
Text;

$regexp = "/[\w.%]+@\w+\.\w{2,3}/";

preg_match_all($regexp, $str, $matches);
print_r($matches);