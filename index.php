<?php

$f = fopen('data/test.txt', 'a');
fwrite($f, time() . "\n");
fclose($f);