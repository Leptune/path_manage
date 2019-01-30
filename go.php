<?php

if (count($argv) !== 2) {
    echo 'error: Usage: pmg name'.PHP_EOL;
    exit(1);
}

$name = $argv[1];
$data = [];
$savePath = __DIR__ . '/' . 'data.seri';
if (file_exists($savePath)) {
	$data = unserialize(file_get_contents($savePath));
}
if (!isset($data[$name])) {
	echo "error: $name not exist! add first!".PHP_EOL;
	exit(1);
}
if (!file_exists($data[$name])) {
	echo "error: path [{$data[$name]}] not exist, please check!".PHP_EOL;
	exit(1);
}
echo $data[$name];
exit(0);
