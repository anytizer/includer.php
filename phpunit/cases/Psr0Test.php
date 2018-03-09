<?php
namespace cases;

use PHPUnit\Framework\TestCase;
use psr0\psr0_walk;

class Psr0Test extends TestCase
{
	public function testInclude()
	{
		$class = new psr0_walk();
		$result = $class->deal();
		
		$this->assertTrue($result);
	}
}
