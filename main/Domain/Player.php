<?php
namespace Autumn\Janken\Domain;

/**
 * Description of Player
 *
 * @author ka-autumn
 */
class Player {
	const STONE = "グー";
	const SCISSORS = "チョキ";
	const PAPER = "パー";

	/**
	 * @var string 名前
	 */
	private $name;
	/**
	 * @var RandomNumberGenerator 乱数生成器
	 */
	private $generator;

	public function __construct($name, RandomNumberGenerator $generator) {
		$this->name = $name;
		$this->generator = $generator;
	}

	public function showHand() {
		return self::STONE;
	}

	public function __toString() {
		return '['. $this->name. ']';
	}
}
