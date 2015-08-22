<?php

namespace Autumn\Janken\Domain;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-08-22 at 00:34:51.
 */
class PlayerTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var RandomNumberGenerator
	 */
	private $randomNumberGenerator;
	/**
	 * @var Player
	 */
	protected $SUT;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->randomNumberGenerator = $this->getMock('Autumn\Janken\Domain\RandomNumberGenerator');
		$this->SUT = new Player("player 1", $this->randomNumberGenerator);
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {
		
	}

	/**
	 * @covers Autumn\Janken\Domain\Player::showHand()
	 */
	public function testShowHand() {
		$expected = Player::STONE;
		$result = $this->SUT->showHand();
		$this->assertEquals($expected, $result);
	}

	/**
	 * @covers Autumn\Janken\Domain\Player::__toString
	 */
	public function test__toString() {
		$expected = "[player 1]";
		$result = '' . $this->SUT;
		$this->assertEquals($expected, $result);
	}

}
