<?php
/**
 * Tests for MatplotlibDev
 */

use PHPUnit\Framework\TestCase;
use Matplotlibdev\Matplotlibdev;

class MatplotlibdevTest extends TestCase {
    private Matplotlibdev $instance;

    protected function setUp(): void {
        $this->instance = new Matplotlibdev(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Matplotlibdev::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
