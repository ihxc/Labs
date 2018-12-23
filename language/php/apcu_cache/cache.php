<?php
$key = 'world';
$value = 'hello';
$r = apcu_store($key, $value);
var_dump(apcu_fetch($key));

