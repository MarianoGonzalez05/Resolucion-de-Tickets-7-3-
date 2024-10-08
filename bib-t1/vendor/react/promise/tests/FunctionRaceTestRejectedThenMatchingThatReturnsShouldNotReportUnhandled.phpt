--TEST--
Calling race() and then then() should not report unhandled rejection
--INI--
# suppress legacy PHPUnit 7 warning for Xdebug 3
xdebug.default_enable=
--FILE--
<?php

use function React\Promise\race;
use function React\Promise\reject;

require __DIR__ . '/../vendor/autoload.php';

race([
    reject(new RuntimeException('foo')),
    reject(new RuntimeException('bar'))
])->then(null, function (\Throwable $e) {
    echo 'Handled ' . get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
});

?>
--EXPECT--
Handled RuntimeException: foo
