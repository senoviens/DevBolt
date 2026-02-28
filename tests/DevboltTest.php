<?php
/**
 * Tests for DevBolt
 */

use PHPUnit\Framework\TestCase;
use Devbolt\Devbolt;

class DevboltTest extends TestCase {
    private Devbolt $instance;

    protected function setUp(): void {
        $this->instance = new Devbolt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Devbolt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
