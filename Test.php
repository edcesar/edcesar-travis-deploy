<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOk()
	{
		$this->assertTrue(true);
		$this->assertTrue(false);
	}

	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
}
