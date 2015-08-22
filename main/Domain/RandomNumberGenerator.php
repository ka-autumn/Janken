<?php
namespace Autumn\Janken\Domain;

/**
 * Description of RandomNumberGenerator
 *
 * @author ka-autumn
 */
class RandomNumberGenerator {

	public function __construct() {
	}

	/**
	 * 指定範囲内の数字をランダムに返す
	 * @param int $min 最小値
	 * @param int $max 最大値
	 * @return int 指定範囲内の数字
	 */
	public function GetInt($min, $max) {
		return mt_rand($min, $max);
	}

}
