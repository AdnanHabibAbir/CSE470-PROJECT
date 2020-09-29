<?php
use PHPUnit\Framework\TestCase;

class EqualsTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEquals(1, 1);
    }

    public function testFailure2()
    {
        $this->assertEquals('bar', 'baz');
    }
}
?>