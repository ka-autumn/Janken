<?php
namespace Autumn\Janken\Domain;

/**
 * Description of Player
 *
 * @author Kazuo
 */
class Player {
	const STONE = "グー";
	const SCISSORS = "チョキ";
	const PAPER = "パー";

	/**
	 * @var string 名前
	 */
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function showHand() {
		return self::STONE;
	}

	public function __toString() {
		return '['. $this->name. ']';
	}
}
