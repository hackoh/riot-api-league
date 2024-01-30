<?php

/**
 * Copyright (C) 2016-2022  Daniel Dolejška
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
 *   Class MatchFrameDto
 *
 * Used in:
 *   match (v4)
 *     - @see LeagueAPI::getMatchTimeline
 *       @link https://developer.riotgames.com/apis#match-v4/GET_getMatchTimeline
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class MatchFrameDto extends ApiObject
{
	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchTimeline
	 *
	 * @var MatchParticipantFrameDto[] $participantFrames
	 */
	public $participantFrames;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchTimeline
	 *
	 * @var MatchEventDto[] $events
	 */
	public $events;

	/**
	 * Available when received from:
	 *   - @see LeagueAPI::getMatchTimeline
	 *
	 * @var int $timestamp
	 */
	public $timestamp;
}
