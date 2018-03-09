<?php
namespace cases;

use PHPUnit\Framework\TestCase;
use psr4\walk;

class Psr4Test extends TestCase
{
	public function testInclude()
	{
		$class = new walk();
		$result = $class->deal();
		
		$this->assertTrue($result);
	}
}
