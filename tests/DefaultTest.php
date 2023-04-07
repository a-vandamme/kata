<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DefaultTest extends TestCase
{
    public function testTrue(): void
    {
	$this->assertTrue(true);
    }
}
