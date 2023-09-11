<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_get_sum()
    {
        $sum = 2 + 2;
        
        $this->assertEquals(4, $sum);
    }

    public function test_check_bool()
    {
        $this->assertTrue(1 == true);
    }
}