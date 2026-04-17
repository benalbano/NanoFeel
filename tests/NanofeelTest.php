<?php
/**
 * Tests for NanoFeel
 */

use PHPUnit\Framework\TestCase;
use Nanofeel\Nanofeel;

class NanofeelTest extends TestCase {
    private Nanofeel $instance;

    protected function setUp(): void {
        $this->instance = new Nanofeel(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nanofeel::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
