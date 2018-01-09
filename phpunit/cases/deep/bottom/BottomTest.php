<?php
namespace cases\inner\bottom;

use PHPUnit\Framework\TestCase;
use examples\deep\bottom\hypoxia;

class BottomTest extends TestCase
{
	public function testHypoxia()
	{
		$class = new hypoxia();
		$result = $class->deal();
		
		$this->assertTrue($result);
	}
}
