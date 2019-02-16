<?php

class FooBarXptoTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 *
	 * @return void
	 */
	public function fooBarXpto()
	{
		$this->assertTrue(true);
		$this->assertTrue(true);
	}

	/**
	 * @test
	 *
	 * @return void
	 */
	public function umMaisUmDeveSerDois() {
		$this->assertEquals(1+1, 2);
  	}
}
