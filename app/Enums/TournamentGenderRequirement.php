<?php

/**
 * @method static self mens()
 * @method static self womens()
 * @method static self coed()
 */
class TournamentGenderRequirement extends Enum
{
	protected static function values(): array
	{
		return [
			'mens' => 1,
			'womens' => 2,
			'coed' => 3
		];
	}
}