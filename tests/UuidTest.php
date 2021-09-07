<?php

use \PHPUnit\Framework\TestCase;
use \PragmaPHP\Uuid\Uuid;

class UuidTest extends TestCase {

    public function test() {
        $uuid = Uuid::generate();
        $this->assertNotEmpty($uuid);
    }

}