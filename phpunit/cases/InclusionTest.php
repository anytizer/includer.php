<?php
namespace cases;

use PHPUnit\Framework\TestCase;
use examples\tests;

class InclusionTest extends TestCase
{
	public function testInclude()
	{
		$class = new tests();
		$result = $class->deal();
		
		$this->assertTrue($result);
	}
}
