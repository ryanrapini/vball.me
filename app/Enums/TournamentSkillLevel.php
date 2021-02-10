<?php

/**
 * @method static self open()
 * @method static self aaa()
 * @method static self aa()
 * @method static self a()
 * @method static self bb()
 * @method static self upperb()
 * @method static self b()
 * @method static self lowerb()
 * @method static self c()
 * @method static self rec()
 */
class TournamentGenderRequirement extends Enum
{
	protected static function values(): array
	{
		return [
			'open' => 1,
			'aa' => 2,
			'a' => 3,
			'bb' => 4,
			'upperb' => 5,
			'b' => 6,
			'lowerb' => 7,
			'c' => 8,
			'rec' => 9,
		];
	}
}