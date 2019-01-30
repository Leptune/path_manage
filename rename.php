<?php

if (count($argv) !== 3) {
    echo 'error: Usage: pmr old_name new_name'.PHP_EOL;
    exit(1);
}

$old_name = $argv[1];
$new_name = $argv[2];
$data = [];
$savePath = __DIR__ . '/' . 'data.seri';
if (file_exists($savePath)) {
	$data = unserialize(file_get_contents($savePath));
}
if (!isset($data[$old_name])) {
	echo "error: $old_name not exist! add first!".PHP_EOL;
	exit(1);
}
$data[$new_name] = $data[$old_name];
unset($data[$old_name]);
file_put_contents($savePath, serialize($data));
echo 'success!'.PHP_EOL;
exit(0);
