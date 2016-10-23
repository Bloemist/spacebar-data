<?php
$output = shell_exec('git config --global user.email "spacebar@kwitz.net" 2>&1');
echo $output;
$output = shell_exec('git config --global user.name "hsg-spacebar" 2>&1');
echo $output;
$output = shell_exec('git commit -am "new transaction" 2>&1');
echo $output;
$output = shell_exec('git push https://hsg-spacebar:password@github.com/Bloemist/spacebar master 2>&1');
echo $output;
?>
