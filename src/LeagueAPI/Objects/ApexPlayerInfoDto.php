<?php

/**
 * Copyright (C) 2016-2023  Daniel Dolejška
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

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class ApexPlayerInfoDto
 *
 * Used in:
 *   lol-challenges (v1)
 *     - @see LeagueAPI::getChallengeLeaderboards
 *       @link https://developer.riotgames.com/apis#lol-challenges-v1/GET_getChallengeLeaderboards
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class ApexPlayerInfoDto extends ApiObject
{
	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getChallengeLeaderboards
	 *
	 * @var string $puuid
	 */
	public string $puuid;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getChallengeLeaderboards
	 *
	 * @var int $value
	 */
	public int $value;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getChallengeLeaderboards
	 *
	 * @var int $position
	 */
	public int $position;
}
