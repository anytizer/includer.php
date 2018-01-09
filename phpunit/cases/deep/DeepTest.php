<?php
namespace cases\inner;

use PHPUnit\Framework\TestCase;
use examples\deep\inner;

class DeepTest extends TestCase
{
	public function testInner()
	{
		$class = new inner();
		$result = $class->deal();
		
		$this->assertTrue($result);
	}
}
