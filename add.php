<?php

if (count($argv) !== 2) {
    echo 'error: Usage: pma name'.PHP_EOL;
    exit(1);
}

$name = $argv[1];
$cwd = getcwd();

$data = [];
$savePath = __DIR__ . '/' . 'data.seri';
if (file_exists($savePath)) {
	$data = unserialize(file_get_contents($savePath));
}
$data[$name] = $cwd;
file_put_contents($savePath, serialize($data));
echo 'success!'.PHP_EOL;
exit(0);
