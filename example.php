<?php

require_once __DIR__ . '/Exceptions/HashException.php';

require_once __DIR__ . '/Hash/IHash.php';
require_once __DIR__ . '/ArrayList/IArrayList.php';

require_once __DIR__ . '/Hash/Hash.php';
require_once __DIR__ . '/ArrayList/ArrayList.php';

$hashCapacity = 10;
$hash = new Hash(stdClass::class, int::class, $hashCapacity);

$users = [];

for ($userId = 0; $userId < $hashCapacity - 1; $userId++) {
    $user = new stdClass();
    $users[] = $user;
    $hash[$user] = $userId + 1;
}

echo "{$hash[$users[0]]}\n"; // This will print number for first "user" key

try {
    $hash[new stdClass()] = 'invalid value exception will be thrown';
} catch (HashException $exception) {
    echo "{$exception->getMessage()}\n";
}

try {
    $hash['invalid key exception will be thrown'] = 1;
} catch (HashException $exception) {
    echo "{$exception->getMessage()}\n";
}

try {
    $hash[new stdClass()] = 0;
    $hash[new stdClass()] = 1;
} catch (HashException $exception) {
    echo "{$exception->getMessage()}\n";
}