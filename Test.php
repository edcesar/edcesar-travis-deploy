<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOk()
	{
		$this->assertTrue(true);
	}

	public function testOnePlusOne() {
		$this->assertEquals(1+1,1);
  	}
}

?>
