<?php
var_dump("講師の名前は？");
$msg = trim( fgets( STDIN ) );
var_dump("本日の講師は" . $msg . "です。");