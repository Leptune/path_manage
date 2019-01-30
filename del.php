<?php

if (count($argv) !== 2) {
    echo 'error: Usage: pmd name'.PHP_EOL;
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
unset($data[$name]);
file_put_contents($savePath, serialize($data));
echo 'success!'.PHP_EOL;
exit(0);
