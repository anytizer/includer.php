<?php
namespace cases;

use PHPUnit\Framework\TestCase;
use examples\FlyTogether;

class FlyTogetherTest extends TestCase
{
	public function testIncludeDoubleUpperCases()
	{
		$class = new FlyTogether();
		$result = $class->deal();
		
		$this->assertTrue($result);
	}
}
