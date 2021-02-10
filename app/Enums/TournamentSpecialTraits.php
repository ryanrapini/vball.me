<?php

/**
 * @method static self shorties()
 * @method static self glow()
 * @method static self revco()
 * @method static self mickieminnie()
 */
class TournamentFormat extends Enum
{
	protected static function values(): array
	{
		return [
			'shorties' => 1,
			'glow' => 2,
			'revco' => 3,
			'mickieminnie' => 4
		];
	}
}