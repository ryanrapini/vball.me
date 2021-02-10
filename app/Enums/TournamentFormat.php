<?php

/**
 * @method static self standard()
 * @method static self draw()
 * @method static self kob()
 * @method static self other()
 */
class TournamentFormat extends Enum
{
	protected static function values(): array
	{
		return [
			'standard' => 1,
			'draw' => 2,
			'kob' => 3,
			'other' => 4,
		];
	}
}