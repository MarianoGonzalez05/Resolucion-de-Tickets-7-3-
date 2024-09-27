--TEST--
Calling any() and then then() should not report unhandled rejection
--INI--
# suppress legacy PHPUnit 7 warning for Xdebug 3
xdebug.default_enable=
--FILE--
<?php

use function React\Promise\any;
use function React\Promise\reject;

require __DIR__ . '/../vendor/autoload.php';

any([
    reject(new RuntimeException('foo')),
    reject(new RuntimeException('bar'))
])->then(null, function (\Throwable $e) {
    echo 'Handled ' . get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
});

?>
--EXPECT--
Handled React\Promise\Exception\CompositeException: All promises rejected.
