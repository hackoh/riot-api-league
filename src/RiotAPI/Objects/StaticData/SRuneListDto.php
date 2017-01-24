<?php

/**
 * Copyright (C) 2016  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\Objects\StaticData;

use RiotAPI\Objects\ApiObjectIterable;


/**
 *   Class SRuneListDto
 * This object contains rune list data.
 *
 * Used in:
 *   lol-static-data (v1.2)
 *     @link https://developer.riotgames.com/api/methods#!/1055/3623
 *
 * @iterable $data
 *
 * @package RiotAPI\Objects\StaticData
 */
class SRuneListDto extends ApiObjectIterable
{
	/** @var SBasicDataDto $basic */
	public $basic;

	/** @var SRuneDto[] $data */
	public $data;

	/** @var string $type */
	public $type;

	/** @var string $version */
	public $version;
}
