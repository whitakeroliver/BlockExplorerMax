<?php
/**
 * Tests for BlockExplorerMax
 */

use PHPUnit\Framework\TestCase;
use Blockexplorermax\Blockexplorermax;

class BlockexplorermaxTest extends TestCase {
    private Blockexplorermax $instance;

    protected function setUp(): void {
        $this->instance = new Blockexplorermax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockexplorermax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
