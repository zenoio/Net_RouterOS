<?php

namespace PEAR2\Net\RouterOS\Util\Test\Unsafe;

use PEAR2\Net\RouterOS\Util\Test\Unsafe;

require_once __DIR__ . '/../Unsafe.php';

abstract class NonPersistent extends Unsafe
{
    protected function tearDown()
    {
        unset($this->util);
        unset($this->client);
    }
}
