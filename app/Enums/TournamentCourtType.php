<?php

/**
 * @method static self hardcourt()
 * @method static self sand()
 * @method static self grass()
 * @method static self indoorsand()
 * @method static self other()
 */
class TournamentCourtType extends Enum
{
	protected static function values(): array
	{
		return [
			'hardcourt' => 1,
			'sand' => 2,
			'grass' => 3,
			'indoorsand' => 4,
			'other' => 5,
		];
	}
}