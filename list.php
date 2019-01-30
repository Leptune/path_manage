<?php

if (count($argv) !== 1) {
    echo 'error: Usage: pml'.PHP_EOL;
    exit(1);
}

$data = [];
$savePath = __DIR__ . '/' . 'data.seri';
if (file_exists($savePath)) {
	$data = unserialize(file_get_contents($savePath));
}
if (empty($data)) {
	echo 'error: there is no path alias! please add first!'.PHP_EOL;
	exit(1);
}
echo PHP_EOL;
foreach ($data as $name => $path) {
	echo "$name => $path".PHP_EOL;
}
echo PHP_EOL;
echo 'success!'.PHP_EOL;
exit(0);
