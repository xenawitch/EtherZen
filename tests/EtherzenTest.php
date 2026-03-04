<?php
/**
 * Tests for EtherZen
 */

use PHPUnit\Framework\TestCase;
use Etherzen\Etherzen;

class EtherzenTest extends TestCase {
    private Etherzen $instance;

    protected function setUp(): void {
        $this->instance = new Etherzen(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherzen::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
