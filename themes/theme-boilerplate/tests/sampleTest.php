<?php

use WP_Mock\Tools\TestCase as TestCase;

class Test extends TestCase
{
    public function test(): void
    {
        WP_Mock::userFunction('is_single', [
            'return_in_order' => [true, false],
        ]);

        $this->assertTrue(is_single());
        $this->assertFalse(is_single());
    }

}
