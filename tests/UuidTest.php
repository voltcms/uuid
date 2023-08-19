<?php

use \PHPUnit\Framework\TestCase;
use \VoltCMS\Uuid\Uuid;

class UuidTest extends TestCase {

    public function test() {
        $uuid = Uuid::generate();
        $this->assertNotEmpty($uuid);
        $this->assertTrue(strlen($uuid) == 36);
    }

}