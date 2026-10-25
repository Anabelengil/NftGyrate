<?php
/**
 * Tests for NftGyrate
 */

use PHPUnit\Framework\TestCase;
use Nftgyrate\Nftgyrate;

class NftgyrateTest extends TestCase {
    private Nftgyrate $instance;

    protected function setUp(): void {
        $this->instance = new Nftgyrate(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftgyrate::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
